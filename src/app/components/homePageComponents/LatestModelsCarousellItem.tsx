import Image from "next/image";
import React from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import MainBtn from "../MainBtn";

type LatestModelsCarousellItemProps = {
  title: string;
  image: string;
  desc: string;
  url: string;
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
    <div className="flex lg:flex-row flex-col" style={{ minWidth: width }}>
      <div className="md:basis-3/5 basis-full">
        <Image src={image} alt={title} width={1232} height={468} className="hidden md:block"/>
        
      </div>
      <div className="md:basis-2/5 flex flex-col px-16 justify-center items-start">
        <SectionTitleH2 text={title} color={"dark"} />
        <p className="mb-8">{desc}</p>
        <MainBtn
          text={"Детали"}
          bgBlack={true}
          isLink={true}
          link={url}
          fullWidth={false}
        />
      </div>
    </div>
  );
};

export default LatestModelsCarousellItem;
