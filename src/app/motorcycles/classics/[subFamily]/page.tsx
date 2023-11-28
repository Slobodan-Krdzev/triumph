import HeroSection from "@/app/components/SubFamily/HeroSection";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
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

    console.log("FAMILIJA OD CLASSICS SUBFAMILY", bikes);

    const hasGrayCaro =
      family.subFamilies[subFamily].subFamilyPageInfo.hasOwnProperty(
        "grayCarousell"
      );

    const hasYoutubeVid =
      family.subFamilies[subFamily].subFamilyPageInfo.hasOwnProperty(
        "youtubeVideo"
      );

    return (
      <>
        <HeroSection
          image={family.subFamilies[subFamily].gallery.subFamilyHeroVideo.src}
          model={subFamily}
          slogans={family.subFamilies[subFamily].subFamilyPageInfo.heroSlogans}
        />

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
          specNumbers={family.subFamilies[subFamily].subFamilyPageInfo.specNumbers}
        />
      </>
    );
  } catch (err) {
    console.log(err);

    return "err";
  }
};

export default ClassicsSubFamilyPage;
