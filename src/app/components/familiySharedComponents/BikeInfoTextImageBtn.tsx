import React from "react";
import SectionTitleH2 from "./SectionTitleH2";
import PageParagraph from "./PageParagraph";
import MainBtn from "../MainBtn";
import Image from "next/image";

type BikeInfoTextImageBtnProps = {
  title?: string;
  desc: string;
  desc2?: string;
  price?: string;
  ctaBtn: {
    text: string;
    link: string;
  };
  ctaBtn2?: {
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
  textWhite?: boolean;
};

const BikeInfoTextImageBtn = ({
  title,
  desc,
  desc2,
  price,
  ctaBtn,
  ctaBtn2,
  image,
  video,
  imageOnTheLeft,
  blackBtn,
  mobileTextRight,
  textWhite,
}: BikeInfoTextImageBtnProps) => {
  return (
    <section className="flex flex-col lg:flex-row justify-between gap-4 lg:my-14 my-8 lg:px-20 md:px-12 px-0">
      <div
        className={`lg:basis-4/12 flex items-center ${
          mobileTextRight ? "justify-start" : "lg:items-center justify-center"
        } text-left ${imageOnTheLeft ? "order-2 lg:pl-8" : ""} my-8 lg:mb-0 `}
      >
        <div className="lg:max-w-xs md: max-w-md">
          <SectionTitleH2
            text={title ?? "Triumph"}
            color={textWhite ? "white" : "dark"}
          />
          <PageParagraph marginBot={true} text={desc ?? "Triumph"} />
          {desc2 && <PageParagraph marginBot={true} text={desc2 ?? "Triumph"} />}
          {price && (
            <p className="mb-4">
              Цени од <b>€ {price}.</b>
            </p>
          )}

          <div className="flex flex-row md:flex-col  items-start gap-4">
            <MainBtn
              text={ctaBtn.text}
              link={ctaBtn.link}
              isLink={true}
              bgBlack={blackBtn}
            />

            {ctaBtn2 && (
              <MainBtn
                text={ctaBtn2.text}
                link={ctaBtn2.link}
                isLink={true}
                bgBlack={true}
              />
            )}
          </div>
        </div>
      </div>
      <div className="flex justify-start items-center ">
        <Image src={image?.src ?? "/images/triumphLogo.png"} alt={image?.alt ?? 'Triumph'} height={955} width={1000} />
      </div>
    </section>
  );
};

export default BikeInfoTextImageBtn;
