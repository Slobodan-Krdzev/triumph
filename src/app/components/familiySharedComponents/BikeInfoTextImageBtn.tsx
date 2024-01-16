import React from "react";
import SectionTitleH2 from "./SectionTitleH2";
import PageParagraph from "./PageParagraph";
import MainBtn from "../MainBtn";
import Image from "next/image";

type BikeInfoTextImageBtnProps = {
  title: string;
  desc: string;
  price?: string;
  ctaBtn: {
    text: string;
    link: string;
  };
  image: {
    src: string;
    alt: string;
  };
  video?: {
    src: string;
    type: string;
  };
  imageOnTheLeft?: boolean;
  blackBtn: boolean;
  mobileTextRight?: boolean;
  textWhite? : boolean
};

const BikeInfoTextImageBtn = ({
  title,
  desc,
  price,
  ctaBtn,
  image,
  video,
  imageOnTheLeft,
  blackBtn,
  mobileTextRight,
  textWhite,
}: BikeInfoTextImageBtnProps) => {
  return (
    <section className="flex flex-col lg:flex-row justify-between gap-4 lg:my-14 my-8">
      <div
        className={`lg:basis-4/12 flex items-center ${
          mobileTextRight ? "justify-start" : "lg:items-center justify-center"
        } text-left ${imageOnTheLeft ? "order-2 lg:pl-8" : ""} my-8 lg:mb-0 `}
      >
        <div className="lg:max-w-xs md: max-w-md">
          <SectionTitleH2 text={title} color={textWhite ? "white" : "dark"} />
          <PageParagraph marginBot={true} text={desc} />
          {price && (
            <p className="mb-4">
              Цени од <b>€ {price}.</b>
            </p>
          )}

          <MainBtn
            text={ctaBtn.text}
            link={ctaBtn.link}
            isLink={true}
            bgBlack={blackBtn}
          />
        </div>
      </div>
      <div className="flex justify-start items-center ">
        <Image src={image.src} alt={image.alt} height={955} width={1000} />
      </div>
    </section>
  );
};

export default BikeInfoTextImageBtn;
