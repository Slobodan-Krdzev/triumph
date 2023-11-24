import React from "react";
import FamilyPageTitle from "./PageTitle";
import Image from "next/image";
import PageTitle from "./PageTitle";

type PageHeroSectionProps = {
  title: string;
  mainBikeLogo?: any;
  desc?: string;
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
    <section className="bg-neutral-800 flex flex-col lg:flex-row justify-between lg:pl-8">
      <div className="flex flex-col justify-center py-10 text-white lg:basis-1/2 order-2 lg:order-1 px-4 lg:px-0">
        <div className="lg:pr-40">
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
          <p className="lg:text-lg mb-20 lg:w-3/4">{desc}</p>
          <div className="text-white pb-10">
            <p className="text-xs lg:font-semibold">DISCOVER MORE</p>
          </div>
        </div>
      </div>

      <div className="flex lg:basis-1/2 justify-center text-white order-1 lg:order-2">
        <video autoPlay muted loop >
          <source src={`/images/${video}`} type="video/mp4"/>
        </video>
      </div>
    </section>
  );
};

export default PageHeroSection;
