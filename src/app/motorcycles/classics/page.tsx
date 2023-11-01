import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { FAMILIES, BIKES } from "@/app/constants/constants";
import React from "react";

const ClassicPage = async () => {
  const familyRes = await fetch(`${FAMILIES}?type=classics`, {
    cache: "no-store",
  });
  const familyData = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?type=classics`);
  const bikes = await bikesRes.json();

  return (
    <>
      <PageHeroSection
        title={`modern  ${familyData[0].type}`}
        video={familyData[0].familyPageBannerVideo}
      />

      <section className="py-16 lg:py-32">
        <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
          <SectionTitleH2
            text="400cc engine"
            color="dark"
          />
          <PageParagraph
            marginBot={true}
            text="The Speed ​​400 and the Scrambler 400 X, two all-new bikes come to Triumph's iconic range of modern classics. With the character and response of the new 400cc engine, affordable ergonomics and high specification, these new machines offer class-leading performance and a confident, agile handling."
          />
         
        </div>
      </section>
    </>
  );
};

export default ClassicPage;
