import React from "react";
import MainBtn from "./MainBtn";
import SectionTitleH2 from "./familiySharedComponents/SectionTitleH2";

type BannerAndCTASectionProps = {
  text: string;
  image: string;
  link: string;
  btnText: string;
};

const BanerAndCTASection = ({
  text,
  image,
  link,
  btnText,
}: BannerAndCTASectionProps) => {
  return (
    <section
      style={{
        backgroundImage: `url('${image}')`,
        backgroundRepeat: "no-repeat",
        backgroundPosition: "center",
        backgroundSize: "cover",
      }}
      className="flex justify-center items-center lg:py-64 py-40 text-white"
    >
      <div className="text-center px-4 md:px-0">
        <SectionTitleH2 text={text} color={"white"}/>
        <MainBtn text={btnText} bgBlack={true} isLink={true} link={link} fullWidth={true}/>
      </div>
    </section>
  );
};

export default BanerAndCTASection;
