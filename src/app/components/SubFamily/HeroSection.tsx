import React from "react";
import FamilySloganAnimation from "./FamilySloganAnimation";
import Image from "next/image";

type HeroSectionProps = {
  video?: string;
  model?: string;
  slogans?: any[];
  image?: string;
  desc?: string;
  logo?: string;
  bigTitle?: string
  mobileImage?: string
};

const HeroSection = ({
  video,
  model,
  slogans = [],
  image,
  desc,
  logo,
  bigTitle,
  mobileImage
}: HeroSectionProps) => {

  console.log(mobileImage, 'ovdeka');
  

  if (video) {
    return (
      <section className="relative">
        <video autoPlay muted loop className="w-full hidden lg:block " src={video} playsInline></video>
        <Image className="block lg:hidden " src={mobileImage ?? ""} alt={model!} width={425} height={425} loading="lazy"/>
        <div
          className="absolute text-white flex flex-col items-center"
          style={{
            top: "40%",
            left: "50%",
            transform: "translate(-50%, -50%)",
          }}
        >
          {slogans && (
            <>
              <p className="text-3xl text-center font-medium uppercase border-b-4 border-red-600 pb-4 inline">
                {model}
              </p>

              <FamilySloganAnimation slogans={slogans} />
            </>
          )}

          {bigTitle && <h1 className="xl:text-8xl lg:text-6xl text-4xl font-bold text-center uppercase">{bigTitle}</h1>}

          {desc && <>
            <p className="text-2xl md:text-4xl text-center mb-4 font-semibold">{desc}</p>
            <Image src={logo ?? ''} alt="Model" width={160} height={90}/>
          </>}
        </div>
      </section>
    );
  }

  if (image) {
    return (
      <section
        className="relative"
        style={{
          backgroundImage: `url("${image}")`,
          backgroundPosition: "center",
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
          height: "90vh",
        }}
      >
        <div
          className="absolute text-white flex flex-col items-center w-11/12"
          style={{
            top: "40%",
            left: "50%",
            right: 0,
            transform: "translate(-50%, -50%)",
          }}
        >
          <p className="text-3xl font-medium uppercase border-b-4 border-red-600 pb-4 inline">
            {model}
          </p>
          <FamilySloganAnimation slogans={slogans} />
        </div>
      </section>
    );
  }
};

export default HeroSection;
