import React from "react";
import SectionTitleH2 from "./familiySharedComponents/SectionTitleH2";
import MainBtn from "./MainBtn";
import FamilyBikesSlider from "./FamilyBikesSlider";

// type bike[] ,  familyType
type BikesByFamilyWithSliderProps = {
  bikes: any[];
  familyData: {
    title: string;
    desc: string;
    url: string;
  };
};

const BikesByFamilyWithSlider = ({
  bikes,
  familyData,
}: BikesByFamilyWithSliderProps) => (
  <div className="flex lg:flex-row flex-col md:mb-24 mb-16 gap-8">
    <div className="lg:basis-3/12 basis-1 border-r-2 border-gray-300">
      <SectionTitleH2 text={familyData.title} color={"dark"} />
      <div className="lg:flex flex-col items-start hidden">
        <p className="mb-8 text-gray-700">{familyData.desc}</p>
        <MainBtn
          text={"Види Колекција"}
          bgBlack={true}
          isLink={true}
          link={familyData.url}
        />
      </div>
    </div>
    <div className="lg:basis-9/12 grow-0  overflow-hidden" >
        <FamilyBikesSlider bikesToRender={bikes}/>
    </div>
  </div>
);

export default BikesByFamilyWithSlider;
