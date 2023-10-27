import React from "react";
import SectionTitleH2 from "./SectionTitleH2";
import PageParagraph from "./PageParagraph";
import MainBtn from "../MainBtn";
import Image from "next/image";

type BikeInfoTextImageBtnProps = {
    title: string,
    desc: string,
    price?: string,
    ctaBtn: {
        text: string,
        link: string
    },
    image: {
        src: string,
        alt: string
    },
    imageOnTheLeft?: boolean
}

const BikeInfoTextImageBtn = ({title, desc, price, ctaBtn, image, imageOnTheLeft}: BikeInfoTextImageBtnProps) => {
  return (
    <section className="flex justify-between px-8 my-14">
      <div className={`basis-2/5 flex flex-col justify-center px-20 text-left ${imageOnTheLeft ? 'order-2' : ''}`}>
        <div className="max-w-xs">
        <SectionTitleH2 text={title}/>
        <PageParagraph marginBot={true} text={desc}/>
        {price && <PageParagraph text={`Price From €${price}`}/>  }
        
        <MainBtn text={ctaBtn.text} link={ctaBtn.link} isLink={true}/>
        </div>
        
      </div>
      <div className="basis-3/5 flex justify-center items-center">
        <Image src={image.src} alt={image.alt} height={955} width={1000}/>
      </div>
    </section>
  );
};

export default BikeInfoTextImageBtn;
