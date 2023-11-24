import React from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import PageParagraph from "../familiySharedComponents/PageParagraph";
import Image from "next/image";
import image from "../../../../public/images/adventure/tigerSport660/tiger660TopSectionBG.avif"

type TopSectionProps = {
  title: string;
  desc: string;
  subtitle: string;
  image: string;
  bgImage: string
};

const TopSection = ({ title, desc, subtitle, image, bgImage }: TopSectionProps) => {
  return (
    <section className="relative pt-16">
      <div className="lg:w-6/12 pb-4 lg:pb-16 lg:px-56 px-4">
        <SectionTitleH2 text={title} color={"dark"} />
        <PageParagraph text={desc} />
      </div>

      <div className="flex flex-col lg:flex-row  items-center xl:px-56 px-4" >
        <Image src={image} alt={subtitle} height={788} width={630} />
        <h2 className="2xl:text-6xl lg:text-3xl text-2xl mt-8 xl:mt-0 font-semibold uppercase xl:pl-20 lg:pl-16 order-1 xl:order-2">{subtitle}</h2>
      </div>

      <div className="w-full xl:-mt-28 mt-8" style={{
        backgroundImage: `url('${bgImage}')`,
        backgroundSize: 'cover',
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat',
        content: '',
        height: '100vh'
      }}>

      </div>
    </section>
  );
};

export default TopSection;
