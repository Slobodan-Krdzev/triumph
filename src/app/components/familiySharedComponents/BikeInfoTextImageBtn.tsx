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
    video?: {
        src: string,
        type: string
    }
    imageOnTheLeft?: boolean,
    blackBtn: boolean,
    mobileTextRight?: boolean
}

const BikeInfoTextImageBtn = ({title, desc, price, ctaBtn, image, video, imageOnTheLeft, blackBtn, mobileTextRight}: BikeInfoTextImageBtnProps) => {
  return (
    <section className="flex flex-col lg:flex-row justify-between lg:px-8 lg:my-14 my-8 px-4">
      <div className={`lg:basis-2/5 flex flex-col justify-center ${mobileTextRight ? 'items-end ' : 'lg:items-center'} lg:px-20 text-left ${imageOnTheLeft ? 'order-2' : ''} my-8 lg:mb-0 lg:pl-0`}>
        <div className="lg:max-w-xs md: max-w-md">
        <SectionTitleH2 text={title}/>
        <PageParagraph marginBot={true} text={desc}/>
        {price && <PageParagraph text={`Price From €${price}`}/>  }
        
        <MainBtn text={ctaBtn.text} link={ctaBtn.link} isLink={true} bgBlack={blackBtn}/>
        </div>
        
      </div>
      <div className="basis-3/5 flex justify-center items-center">
        <Image src={image.src} alt={image.alt} height={955} width={1000}/>
      </div>
    </section>
  );
};

export default BikeInfoTextImageBtn;
