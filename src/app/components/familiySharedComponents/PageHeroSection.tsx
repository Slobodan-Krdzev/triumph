import React from "react";
import FamilyPageTitle from "./PageTitle";
import Image from "next/image";
import PageTitle from "./PageTitle";

type PageHeroSectionProps = {
  title: string;
  mainBikeLogo?: any;
  desc: string;
  video?: string;
  image?: string;
};

const PageHeroSection = ({
  title,
  mainBikeLogo,
  desc,
  video,
  image,
}: PageHeroSectionProps) => {
  return (
    <section className="bg-neutral-800 flex justify-between pl-8">
      <div className="flex basis-1/2 flex-col justify-center py-10 text-white">
        <div className="pr-40">
          <PageTitle text={title} />
          {mainBikeLogo && (
            <Image
              className="mb-3"
              src={`/images/${mainBikeLogo.url}`}
              alt={mainBikeLogo.alt}
              width={110}
              height={35}
            />
          )}
          <p className="text-base mb-20 ">{desc}</p>
          <div className="text-white pb-10">
            <p className="text-xs font-semibold">DISCOVER MORE</p>
          </div>
        </div>
      </div>

      <div className="flex basis-1/2 justify-center text-white">
        <video autoPlay muted loop>
          <source src={`/images/${video}`} type="video/mp4"/>
        </video>
      </div>
    </section>
  );
};

export default PageHeroSection;
