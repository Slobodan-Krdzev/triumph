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

  console.log(subFam);

  try {
    const subFamilyRes = await fetch(
      `${SUB_FAMILIES}?subFamilyName=${subFam}`,
      {
        cache: "no-store",
      }
    );
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${subFam}`, {
      cache: "no-store",
    });
    const bikes = await bikesRes.json();

    const hasImageAsHero =
      subFamily.gallery.hasOwnProperty("subFamilyHeroImage");

    return (
      <>
        {hasImageAsHero ? (
          <HeroSection
            image={subFamily.gallery.subFamilyHeroImage.src ?? ""}
            mobileImage={subFamily.gallery.subFamilyHeroImageMobile?.src ?? "/"}
            slogans={subFamily.subFamilyPageInfo.heroSlogans}
            model={formulateSubFamilyTitleOnBanner(subFam)}
          />
        ) : (
          <HeroSection
            video={subFamily.gallery.subFamilyHeroVideo.src ?? ""}
            slogans={subFamily.subFamilyPageInfo.heroSlogans}
            mobileImage={subFamily.gallery.subFamilyHeroImageMobile?.src ?? "/"}
            model={formulateSubFamilyTitleOnBanner(subFam)}
          />
        )}

        <main className="bg-white">
          <TopSection
            title={subFamily.subFamilyPageInfo.topSection.title ?? ""}
            desc={subFamily.subFamilyPageInfo.topSection.desc ?? ""}
            subtitle={subFamily.subFamilyPageInfo.topSection.subtitle ?? ""}
            image={subFamily.gallery.subFamilyTopSectionImage.src ?? ""}
            bgImage={subFamily.gallery.subFamilyTopSectionBGImage.src ?? ""}
          />

          <section className="px-4 lg:px-20 xl:px-40">
            {bikes.map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike.subFamilyPromo.title}
                desc={bike.subFamilyPromo.desc}
                ctaBtn={{
                  text: "Детали",
                  link: `/motorcycles/classics/${subFam}/${bike.model}`,
                }}
                image={{
                  src: `${bike.gallery.modelImage.src}`,
                  alt: `${bike.gallery.modelImage.alt}`,
                }}
                blackBtn={true}
                imageOnTheLeft={false}
                mobileTextRight={false}
              />
            ))}
          </section>
        </main>

        {subFamily.subFamilyPageInfo.youtubeVideo && (
          <YouTubePromo video={subFamily.subFamilyPageInfo.youtubeVideo} />
        )}

        {subFamily.subFamilyPageInfo.grayCarousell && (
          <BottomCarousell items={subFamily.subFamilyPageInfo.grayCarousell} />
        )}

        {subFamily.subFamilyPageInfo.specNumbers && (
          <NumbersSection
            model={subFam}
            specNumbers={subFamily.subFamilyPageInfo.specNumbers}
          />
        )}

        {subFamily.subFamilyPageInfo.audioSection && (
          <AudioSection
            audio={subFamily.subFamilyPageInfo.audioSection.audio}
            title={subFamily.subFamilyPageInfo.audioSection.title}
            desc={subFamily.subFamilyPageInfo.audioSection.desc}
            model={subFamily}
          />
        )}

        {subFamily.subFamilyPageInfo.youtubeVideosCarousellItems && (
          <YoutubeVideoCarousell
            items={subFamily.subFamilyPageInfo.youtubeVideosCarousellItems}
          />
        )}
      </>
    );
  } catch (err) {
    console.log(err);

    return redirect("/motorcycles/classics");
  }
};

export default ClassicsSubFamilyPage;
