import React from "react";
import SectionTitleH2 from "./familiySharedComponents/SectionTitleH2";
import MainBtn from "./MainBtn";
import FamilyBikesSlider from "./FamilyBikesSlider";

// type bike[] ,  familyType
type BikesByFamilyWithSliderProps = {
  subFamilies: any[];
  familyData: {
    title: string;
    desc: string;
    url: string;
  };
};

const BikesByFamilyWithSlider = ({
  subFamilies,
  familyData,
}: BikesByFamilyWithSliderProps) => {
  
  return (
    <div className="flex lg:flex-row flex-col md:mb-24 mb-16 gap-8">
    <div className="lg:basis-1/3 basis-1 border-r-2 border-gray-300">
      <SectionTitleH2 text={familyData.title} color={"dark"} />
      <div className="lg:flex flex-col items-start hidden md:w-10/12">
        {familyData.desc && <p className="mb-8 text-gray-700">{familyData.desc}</p>  }
        {familyData.url === '' ? '' : <MainBtn
          text={"Види Колекција"}
          bgBlack={true}
          isLink={true}
          link={familyData.url}
        />}
        
      </div>
    </div>
    <div className="lg:basis-2/3 grow-0  overflow-hidden" >
      
        <FamilyBikesSlider bikesToRender={subFamilies}/>
    </div>
  </div>
  )
  
};

export default BikesByFamilyWithSlider;
