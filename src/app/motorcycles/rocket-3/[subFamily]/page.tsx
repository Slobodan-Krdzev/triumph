import HeroSection from "@/app/components/SubFamily/HeroSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import { FAMILIES, BIKES } from "@/app/constants/constants";
import React from "react";

const Rocket3SubFamPage = async () => {
  try {
    const familyRes = await fetch(`${FAMILIES}?type=rocket-3`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const family = familyData[0];

    const bikesRes = await fetch(
      `${BIKES}?category=rocket-3&subFamilyCategory=rocket-3`,
      {
        cache: "no-store",
      }
    );
    const bikes = await bikesRes.json();

    console.log(
      "FAMILIJA OD CLASSICS SUBFAMILY",
      family.subFamilies["rocket-3"].gallery.subFamilyHeroVideo.src
    );

    //   const hasGrayCaro =
    //     family.subFamilies.subFamilyPageInfo.hasOwnProperty(
    //       "grayCarousell"
    //     );

    //   const hasYoutubeVid =
    //     family.subFamilies.subFamilyPageInfo.hasOwnProperty(
    //       "youtubeVideo"
    //     );

    return (
      <>
        <HeroSection
          video={family.subFamilies["rocket-3"].gallery.subFamilyHeroVideo.src}
          mobileImage={family.subFamilies['rocket-3'].gallery.subFamilyHeroImageMobile?.src ?? "/"}
          model={"Rocket-3"}
          slogans={family.subFamilies["rocket-3"].subFamilyPageInfo.heroSlogans}
        />

        <main className="bg-white">
          <TopSection
            title={
              family.subFamilies["rocket-3"].subFamilyPageInfo.topSection.title
            }
            desc={
              family.subFamilies["rocket-3"].subFamilyPageInfo.topSection.desc
            }
            subtitle={
              family.subFamilies["rocket-3"].subFamilyPageInfo.topSection
                .subtitle
            }
            image={
              family.subFamilies["rocket-3"].gallery.subFamilyTopSectionImage
                .src
            }
            bgImage={
              family.subFamilies["rocket-3"].gallery.subFamilyTopSectionBGImage
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
                  link: `/motorcycles/${family.type}/rocket-3/${bike.model}`,
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
      </>
    );
  } catch (err) {
    console.log(err);

    return "ERR";
  }
};

export default Rocket3SubFamPage;
