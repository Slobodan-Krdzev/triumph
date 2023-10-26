import React from "react";
import FamilyPageTitle from "./FamilyPageTitle";
import Image from "next/image";

type FamilyPageHeroSectionProps = {
  title: string;
  mainBikeLogo?: any
  desc: string;
  video?: string;
  image?: string;
};

const FamilyPageHeroSection = ({
  title,
  mainBikeLogo,
  desc,
  video,
  image,
}: FamilyPageHeroSectionProps) => {
  return (
    <section className="bg-neutral-800 flex justify-between pl-10">

      <div className="flex basis-1/3 flex-col justify-between py-20 text-white">
        <FamilyPageTitle text={title} />
        {mainBikeLogo && <Image className="mb-3" src={`/images/${mainBikeLogo.url}`} alt={mainBikeLogo.alt} width={110} height={35}/>}
        <p className="text-base">{desc}</p>
      </div>

      <div className="flex basis-2/3 justify-center items-center pl-5 py-5 text-white">
            <video src={`/images/${video}`} autoPlay muted loop></video>
      </div>

    </section>
  );
};

export default FamilyPageHeroSection;
