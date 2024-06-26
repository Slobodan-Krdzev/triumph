import React from "react";
import FamilySloganAnimation from "./FamilySloganAnimation";
import Image from "next/image";
import Breadcrumbs from "../Breadcrumbs/Breadcrumbs";

type HeroSectionProps = {
  video?: string;
  model?: string;
  slogans?: any[];
  image?: string;
  desc?: string;
  logo?: string;
  bigTitle?: string;
  mobileImage?: string;
  textLeftSide?: boolean;
};

const HeroSection = ({
  video,
  model,
  slogans = [],
  image,
  desc,
  logo,
  bigTitle,
  mobileImage,
  textLeftSide,
}: HeroSectionProps) => {
  const doesItContainOffRoad = Boolean(
    image?.split("/").find((item) => item === "offRoad")
  );

  if (video) {
    return (
      <section className="relative">
        <Breadcrumbs />
        <video
          autoPlay
          muted
          loop
          className="w-full hidden lg:block"
          src={video}
          playsInline
          style={{
            filter: "brightness(65%)",
          }}
        ></video>

        <Image
          style={{ filter: "brightness(70%)" }}
          className="block lg:hidden"
          src={mobileImage ?? "/images/triumphLogo.png"}
          alt={model ?? "Hero Image"}
          width={1000}
          height={425}
          loading="lazy"
        />
        <div
          className="absolute text-white flex flex-col items-center w-full"
          style={{
            top: "40%",
            left: "50%",
            transform: "translate(-50%, -50%)",
          }}
        >
          {slogans && (
            <>
              <p
                className={` text-2xl md:text-5xl text-center font-medium uppercase border-b-4 ${
                  doesItContainOffRoad ? "border-quartal" : "border-red-600"
                } pb-4 inline`}
              >
                {model}
              </p>

              <FamilySloganAnimation slogans={slogans} />
            </>
          )}

          {bigTitle && (
            <p
              className={`${
                slogans.length > 0 ? "hidden" : "block"
              } xl:text-8xl lg:text-6xl text-4xl font-bold text-center uppercase`}
            >
              {bigTitle}
            </p>
          )}

          {desc && (
            <>
              <p className="text-2xl md:text-4xl text-center mb-4 font-semibold">
                {desc}
              </p>
              <Image src={logo ?? ""} alt="Model" width={160} height={90} />
            </>
          )}
        </div>
      </section>
    );
  }

  if (image) {
    return (
      <section
        
        style={{
          backgroundImage: `url("${image}")`,
          backgroundPosition: "center",
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
          height: "90vh",
        }}
      >
        <div className="flex justify-center items-center relative w-full h-full overlay-darken">
          <Breadcrumbs />
          <div
            className={` text-white flex flex-col ${
              textLeftSide ? "items-start" : "items-center"
            } w-11/12`}
          >
            <p
              className={` text-3xl font-medium uppercase border-b-4 ${
                doesItContainOffRoad ? "border-quartal" : "border-red-600"
              }  pb-4 inline`}
            >
              {model}
            </p>
            {slogans && <FamilySloganAnimation slogans={slogans} />}

            {bigTitle && (
              <h1
                className={`${
                  slogans.length > 0 ? "hidden" : "block"
                } xl:text-8xl lg:text-6xl text-4xl font-bold text-center uppercase text-white`}
              >
                {bigTitle}
              </h1>
            )}
          </div>
        </div>
      </section>
    );
  }
};

export default HeroSection;
