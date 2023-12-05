import HeroSection from "@/app/components/SubFamily/HeroSection";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import YoutubeVideoCarousell from "@/app/components/SubFamily/YoutubeVideoCarousell/YoutubeVideoCarousell";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import AudioSection from "@/app/components/roadstersUniqueComp/AudioSection";
import SecondaryNavBar from "@/app/components/whiteSecondaryNavBar/SecondaryNavBar";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import React from "react";

const ClassicsSubFamilyPage = async ({ params }: any) => {
  const subFamily = params.subFamily;

  try {
    const familyRes = await fetch(`${FAMILIES}?type=classics`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const family = familyData[0];

    const bikesRes = await fetch(
      `${BIKES}?category=classics&subFamilyCategory=${subFamily}`,
      {
        cache: "no-store",
      }
    );
    const bikes = await bikesRes.json();

    const hasGrayCaro =
      family.subFamilies[subFamily].subFamilyPageInfo.hasOwnProperty(
        "grayCarousell"
      );

    const hasYoutubeVid =
      family.subFamilies[subFamily].subFamilyPageInfo.hasOwnProperty(
        "youtubeVideo"
      );

    const hasImageAsHero =
      family.subFamilies[subFamily].gallery.hasOwnProperty(
        "subFamilyHeroImage"
      );

    const hasAudioSection =
    family.subFamilies[subFamily].subFamilyPageInfo.hasOwnProperty(
      "audioSection"
    );

    const hasYoutubeCaro = family.subFamilies[subFamily].subFamilyPageInfo.hasOwnProperty(
      "youtubeVideosCarousellItems"
    );

    return (
      <>
        {hasImageAsHero && (
          <HeroSection
            image={family.subFamilies[subFamily].gallery.subFamilyHeroImage.src}
            model={subFamily}
            slogans={
              family.subFamilies[subFamily].subFamilyPageInfo.heroSlogans
            }
          />
        )}

        {!hasImageAsHero && (
          <HeroSection
            video={family.subFamilies[subFamily].gallery.subFamilyHeroVideo.src}
            model={subFamily}
            slogans={
              family.subFamilies[subFamily].subFamilyPageInfo.heroSlogans
            }
          />
        )}

        <main className="bg-white">
          <TopSection
            title={
              family.subFamilies[subFamily].subFamilyPageInfo.topSection.title
            }
            desc={
              family.subFamilies[subFamily].subFamilyPageInfo.topSection.desc
            }
            subtitle={
              family.subFamilies[subFamily].subFamilyPageInfo.topSection
                .subtitle
            }
            image={
              family.subFamilies[subFamily].gallery.subFamilyTopSectionImage.src
            }
            bgImage={
              family.subFamilies[subFamily].gallery.subFamilyTopSectionBGImage
                .src
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
                  link: `/motorcycles/${family.type}/${subFamily}/${bike.model}`,
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
            video={family.subFamilies[subFamily].subFamilyPageInfo.youtubeVideo}
          />
        )}

        {hasGrayCaro && (
          <BottomCarousell
            items={
              family.subFamilies[subFamily].subFamilyPageInfo.grayCarousell
            }
          />
        )}

        <NumbersSection
          model={subFamily}
          specNumbers={
            family.subFamilies[subFamily].subFamilyPageInfo.specNumbers
          }
        />

        {hasAudioSection && 
          <AudioSection
            audio={family.subFamilies[subFamily].subFamilyPageInfo.audioSection.audio}
            title={family.subFamilies[subFamily].subFamilyPageInfo.audioSection.title}
            desc={family.subFamilies[subFamily].subFamilyPageInfo.audioSection.desc}
            model={subFamily}
          />
        }

        {hasYoutubeCaro && (
          <YoutubeVideoCarousell
            items={family.subFamilies[subFamily].subFamilyPageInfo.youtubeVideosCarousellItems}
          />
        )}
      </>
    );
  } catch (err) {
    console.log(err);

    return "err";
  }
};

export default ClassicsSubFamilyPage;
