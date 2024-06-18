import HeroSection from "@/app/components/SubFamily/HeroSection";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import YoutubeVideoCarousell from "@/app/components/SubFamily/YoutubeVideoCarousell/YoutubeVideoCarousell";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import AudioSection from "@/app/components/roadstersUniqueComp/AudioSection";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const ClassicsSubFamilyPage = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const subFamilyRes = await fetch(
      `${SUB_FAMILIES}?subFamilyName=${subFam}`,
      {
        next: { revalidate: 30 },
      }
    );
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${subFam}`, {
      next: { revalidate: 30 },
    });
    const bikes = await bikesRes.json();

    const hasImageAsHero =
      subFamily.gallery.hasOwnProperty("subFamilyHeroImage");

    return (
      <>
        {hasImageAsHero ? (
          <HeroSection
            image={subFamily?.gallery?.subFamilyHeroImage?.src ?? "/images/triumphLogo.png"}
            mobileImage={subFamily?.gallery?.subFamilyHeroImageMobile?.src ?? "/images/triumphLogo.png"}
            slogans={subFamily?.heroSlogans ?? ["Triumph", 'Classics']}
            model={formulateSubFamilyTitleOnBanner(subFam) ?? "Triumph"}
          />
        ) : (
          <HeroSection
            video={subFamily?.gallery?.subFamilyHeroVideo?.src ?? ""}
            slogans={subFamily?.heroSlogans ?? ["Triumph", 'Classics']}
            mobileImage={subFamily?.gallery?.subFamilyHeroImageMobile?.src ?? "/images/triumphLogo.png"}
            model={formulateSubFamilyTitleOnBanner(subFam) ?? "Triumph"}
          />
        )}

        <main className="bg-white ">
          <TopSection
            title={subFamily?.topSection.title ?? "Triumph Classics"}
            desc={subFamily?.topSection.desc ?? ""}
            subtitle={subFamily?.topSection.subtitle ?? "Оригинален Triumph Bonneville Дух"}
            image={subFamily?.gallery?.subFamilyTopSectionImage.src ?? "/images/triumphLogo.png"}
            bgImage={subFamily?.gallery?.subFamilyTopSectionBGImage.src ?? "/images/triumphLogo.png"}
          />

          <section className="px-4 lg:px-20 xl:px-40">
            {bikes.map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike?.title ?? "Triumph Classic"}
                desc={bike?.subFamilyPromo?.desc ?? ""}
                desc2={bike?.price && `Цени од: € ${bike?.price.toLocaleString('en-EN')} .`}
                ctaBtn={{
                  text: "Детали",
                  link: `/motorcycles/classics/${subFam}/${bike?.model}`,
                }}
                image={{
<<<<<<< HEAD
                  src: `${bike.subFamilyPromo?.image ?? bike.gallery.modelImage.src}`,
                  alt: `${bike.gallery.modelImage.alt }`,
=======
                  src: `${bike?.subFamilyPromo?.image ?? bike?.gallery?.modelImage?.src ?? "/images/triumphLogo.png"}`,
                  alt: `${bike?.gallery?.modelImage?.alt ?? "Triumph Classics"}`,
>>>>>>> 07b969689c18fbab99e2ccde41273fdafd736d47
                }}
                blackBtn={true}
                imageOnTheLeft={false}
                mobileTextRight={false}
              />
            ))}
          </section>
        </main>

        {subFamily?.youtubeVideo && (
          <YouTubePromo video={subFamily?.youtubeVideo ?? ""} />
        )}

        {subFamily?.grayCarousell && (
          <BottomCarousell items={subFamily?.grayCarousell ?? []} />
        )}

        {subFamily?.specNumbers && (
          <NumbersSection
            model={subFam}
            specNumbers={subFamily?.specNumbers ?? []}
          />
        )}

        {subFamily?.subFamilyPageInfo?.audioSection && (
          <AudioSection
            audio={subFamily?.subFamilyPageInfo.audioSection?.audio ?? ""}
            title={subFamily?.subFamilyPageInfo.audioSection?.title ?? ""}
            desc={subFamily?.subFamilyPageInfo.audioSection?.desc ?? ""}
            model={subFamily?.title}
            logo={subFamily?.subFamilyPageInfo.audioSection?.logo}
          />
        )}

        {subFamily?.youtubeVideosCarousellItems && (
          <YoutubeVideoCarousell
            items={subFamily?.youtubeVideosCarousellItems ?? []}
          />
        )}
      </>
    );
  } catch (err) {

    return redirect("/motorcycles/classics");
  }
};

export default ClassicsSubFamilyPage;
