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

const RoadstersSubFamilyPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${query}`, {
      cache: "no-store",
    });
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${query}`, {
      cache: "no-store",
    });
    const bikes = await bikesRes.json();

    const hasGrayCaro =
      subFamily.hasOwnProperty("grayCarousell");

    const hasYoutubeVid =
      subFamily.hasOwnProperty("youtubeVideo");

    const hasAudio = subFamily.subFamilyPageInfo.hasOwnProperty("audioSection");

    const hasYoutubeCaro = subFamily.hasOwnProperty(
      "youtubeVideosCarousellItems"
    );

    return (
      <>
        <HeroSection
          video={subFamily.gallery.subFamilyHeroVideo.src}
          mobileImage={subFamily.gallery.subFamilyHeroImageMobile?.src ?? "/"}
          model={formulateSubFamilyTitleOnBanner(query)}
          slogans={subFamily.heroSlogans}
        />

        <main className="bg-white">
          <TopSection
            title={subFamily.topSection.title}
            desc={subFamily.topSection.desc}
            subtitle={subFamily.topSection.subtitle}
            image={subFamily.gallery.subFamilyTopSectionImage.src}
            bgImage={subFamily.gallery.subFamilyTopSectionBGImage.src}
          />

          <section className="px-4 lg:px-20 xl:px-40 pb-16">
            {bikes.map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike.subFamilyPromo.title ?? bike.title}
                desc={bike.subFamilyPromo?.desc ?? ""}
                desc2={bike.price && `Цени од: €${bike.price}.00`}
                ctaBtn={{
                  text: "Детали",
                  link: `/motorcycles/roadsters/${query}/${bike.model}`,
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

        {hasYoutubeVid && (
          <YouTubePromo video={subFamily.youtubeVideo} />
        )}

        {hasGrayCaro && (
          <BottomCarousell items={subFamily.grayCarousell} />
        )}

        <NumbersSection
          model={query}
          specNumbers={subFamily.specNumbers}
        />

        {hasAudio && (
          <AudioSection
            audio={subFamily.subFamilyPageInfo.audioSection.audio}
            title={subFamily.subFamilyPageInfo.audioSection.title}
            desc={subFamily.subFamilyPageInfo.audioSection.desc}
            model={query}
          />
        )}

        {hasYoutubeCaro && (
          <YoutubeVideoCarousell
            items={subFamily.youtubeVideosCarousellItems}
          />
        )}
      </>
    );
  } catch (error) {
    return redirect(`/motorcycles/roadsters`)
  }
};

export default RoadstersSubFamilyPage;
