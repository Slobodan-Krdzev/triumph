import HeroSection from "@/app/components/SubFamily/HeroSection";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import BottomCarousell, { carousellItems } from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import React from "react";

const SubFamilyPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const familyRes = await fetch(`${FAMILIES}?type=adventure`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const family = familyData[0]

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${query}`)
    const bikes = await bikesRes.json()

    console.log('OVDE', bikes);
    

    return (
      <>
        <HeroSection video={family.subFamilies[query].gallery.subFamilyHeroVideo.src} model={query} slogans={family.subFamilies[query].subFamilyPageInfo.heroSlogans}/>

        <main className="bg-white">
          <TopSection
            title={family.subFamilies[query].subFamilyPageInfo.topSection.title}
            desc={family.subFamilies[query].subFamilyPageInfo.topSection.desc}
            subtitle={family.subFamilies[query].subFamilyPageInfo.topSection.subtitle}
            image={family.subFamilies[query].gallery.subFamilyTopSectionImage.src}
            bgImage={family.subFamilies[query].gallery.subFamilyTopSectionBGImage.src}
          />

          <section className="px-4 lg:px-20 xl:px-40">
            {bikes.map((bike: any) => <BikeInfoTextImageBtn
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
          />)}
          </section>
        </main>

        <BottomCarousell items={family.subFamilies[query].subFamilyPageInfo.grayCarousell}/>
        <NumbersSection model={query} specNumbers={family.subFamilies[query].specNumbers}/>
      </>
    );
  } catch(error) {
    console.log(error);
    
    return "err"
  }
};

export default SubFamilyPage;
