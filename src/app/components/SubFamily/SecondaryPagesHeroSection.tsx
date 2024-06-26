import React from "react";
import Breadcrumbs from "../Breadcrumbs/Breadcrumbs";
import { formulateSubFamilyTitleOnBanner } from "../helpers/formulateSubFamilyTilteOnBanner";

type SecondaryPagesHeroSectionProps = {
  bannerImage: string;
  subFamilyTitle?: string;
  text: string;
  subFamily?: any;
  subText?: string;
};

const SecondaryPagesHeroSection = ({
  bannerImage,
  subFamilyTitle,
  text,
  subFamily,
  subText,
}: SecondaryPagesHeroSectionProps) => {
  const isOfRoad = Boolean(subFamily?.url.split("/")[2] ?? "");

  console.log(subFamilyTitle, 'TUKA');
  

  return (
    <section
      className="relative"
      style={{
        backgroundImage: `url("${bannerImage}")`,
        backgroundSize: "cover",
        backgroundPosition: "center",
        backgroundRepeat: "no-repeat",
        height: "85vh",
        overflow: "hidden",
      }}
    >
      <Breadcrumbs />
      <div className="flex justify-center items-center w-full h-full overlay">
        <div className="lg:w-6/12 md:w-9/12 w-full px-4 m-auto flex flex-col justify-center items-center text-white">
          <h1
            className={`font-semibold text-2xl uppercase border-b-4 ${
              isOfRoad ? "border-quartal" : "border-red-600"
            } pb-2`}
          >
            {subFamilyTitle ? formulateSubFamilyTitleOnBanner(subFamilyTitle!) : subFamilyTitle}
          </h1>
          <p className="md:text-7xl text-4xl uppercase font-bold tracking-tighter text-center w-full pt-2">
            {text}
          </p>
          <p
            className={`md:text-xl py-4 font-semibold text-md text-center w-full ${
              subText ? "border-t-4" : ""
            } ${isOfRoad ? "border-quartal" : "border-red-600"}`}
          >
            {subText}
          </p>
        </div>
      </div>
    </section>
  );
};

export default SecondaryPagesHeroSection;
