import Image from "next/image";
import React from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import MainBtn from "../MainBtn";

type LatestModelsCarousellItemProps = {
  title: string;
  image: string;
  desc: string;
  url?: string;
  width: string;
};

const LatestModelsCarousellItem = ({
  title,
  image,
  desc,
  url,
  width,
}: LatestModelsCarousellItemProps) => {
  return (
    <div className="flex flex-row" style={{ minWidth: width }}>
      <div className="basis-1/2 overflow-hidden flex justify-end items-center" style={{height: '691px'}}>
        <Image src={image} alt={title} width={955} height={691} loading="lazy"/>
        
      </div>
      <div className="basis-1/2 flex flex-col px-16 justify-center items-start">
        <div className="w-8/12">
        <SectionTitleH2 text={title} color={"dark"} />
        <p className="mb-8 text-xl">{desc}</p>
        {url && <MainBtn
          text={"Детали"}
          bgBlack={true}
          isLink={true}
          link={url}
          fullWidth={false}
        />}
        </div>
        
        
      </div>
    </div>
  );
};

export default LatestModelsCarousellItem;
