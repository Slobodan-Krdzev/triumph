import HeroSection from "@/app/components/SubFamily/HeroSection";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import YoutubeVideoCarousell from "@/app/components/SubFamily/YoutubeVideoCarousell/YoutubeVideoCarousell";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import AudioSection from "@/app/components/roadstersUniqueComp/AudioSection";
import { FAMILIES, BIKES } from "@/app/constants/constants";
import React from "react";

const RoadstersSubFamilyPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const familyRes = await fetch(`${FAMILIES}?type=roadsters`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const family = familyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${query}`, {
      cache: "no-store",
    });
    const bikes = await bikesRes.json();

    const hasGrayCaro =
      family.subFamilies[query].subFamilyPageInfo.hasOwnProperty(
        "grayCarousell"
      );

    const hasYoutubeVid =
      family.subFamilies[query].subFamilyPageInfo.hasOwnProperty(
        "youtubeVideo"
      );

    const hasAudio =
      family.subFamilies[query].subFamilyPageInfo.hasOwnProperty(
        "audioSection"
      );

    const hasYoutubeCaro = family.subFamilies[
      query
    ].subFamilyPageInfo.hasOwnProperty("youtubeVideosCarousellItems");

    return (
      <>
      
        <HeroSection
          video={family.subFamilies[query].gallery.subFamilyHeroVideo.src}
          model={query}
          slogans={family.subFamilies[query].subFamilyPageInfo.heroSlogans}
        />

        <main className="bg-white">
          <TopSection
            title={family.subFamilies[query].subFamilyPageInfo.topSection.title}
            desc={family.subFamilies[query].subFamilyPageInfo.topSection.desc}
            subtitle={
              family.subFamilies[query].subFamilyPageInfo.topSection.subtitle
            }
            image={
              family.subFamilies[query].gallery.subFamilyTopSectionImage.src
            }
            bgImage={
              family.subFamilies[query].gallery.subFamilyTopSectionBGImage.src
            }
          />

          <section className="px-4 lg:px-20 xl:px-40">
            {bikes.map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike.subFamilyPromo.title}
                desc={bike.subFamilyPromo.desc}
                ctaBtn={{
                  text: "Детали",
                  link: `/motorcycles/${family.type}/${query}/${bike.model}`,
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
          <YouTubePromo
            video={family.subFamilies[query].subFamilyPageInfo.youtubeVideo}
          />
        )}

        {hasGrayCaro && (
          <BottomCarousell
            items={family.subFamilies[query].subFamilyPageInfo.grayCarousell}
          />
        )}

        <NumbersSection
          model={query}
          specNumbers={family.subFamilies[query].subFamilyPageInfo.specNumbers}
        />

        {hasAudio && (
          <AudioSection
            audio={
              family.subFamilies[query].subFamilyPageInfo.audioSection.audio
            }
            title={
              family.subFamilies[query].subFamilyPageInfo.audioSection.title
            }
            desc={family.subFamilies[query].subFamilyPageInfo.audioSection.desc}
            model={query}
          />
        )}

        {hasYoutubeCaro && (
          <YoutubeVideoCarousell
            items={family.subFamilies[query].subFamilyPageInfo.youtubeVideosCarousellItems}
          />
        )}
      </>
    );
  } catch (error) {
    console.log(error);

    return "err";
  }
};

export default RoadstersSubFamilyPage;
