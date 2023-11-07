import Link from "next/link";
import React from "react";
import MainBtn from "./MainBtn";

type HeroSectionCTAType = {
  image: string;
  title: string;
  link: {
    text: string;
    url: string;
  };
};

const HeroSectionCTA = ({ image, title, link }: HeroSectionCTAType) => {
  return (
    <section
      style={{
        backgroundImage: `url("${image}")`,
        backgroundSize: "cover",
        backgroundPosition: "center center",
        backgroundRepeat: "no-repeat",
      }}
    >
      <div className="overlay-darken lg:py-40 py-20 px-4 flex justify-center items-center">
        <div className="md:w-3/5  w-4/5 m-auto flex flex-col items-center">
          <h1 className="lg:text-6xl text-2xl uppercase font-bold text-white text-center md:mb-8 mb-4">
            {title}
          </h1>
          <Link
            href={link.url}
            className="bg-white uppercase font-bold px-5 py-3 text-black md:text-base text-sm tracking-tighter hover:bg-gray-200 transition-colors ease-in-out delay-100"
          >
            {link.text}
          </Link>
        </div>
      </div>
    </section>
  );
};

export default HeroSectionCTA;
