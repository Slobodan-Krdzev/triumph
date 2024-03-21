import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import MainBtn from "@/app/components/MainBtn";
import TitleWithLineThrough from "@/app/components/TitleWithLineThrough";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import CardLinkItem from "@/app/components/homePageComponents/CardLinkItem";
import React from "react";

const ManualsPage = () => {
  return (
    <main className="bg-white relative">
          <Breadcrumbs dark />

      <TitleWithLineThrough text={"Упатство за Сопственици"} />
      <div className="m-auto w-11/12 md:w-8/12 lg:w-6/12 py-4 md:py-8 lg:py-16 text-center flex flex-col justify-center items-center gap-8">
        <PageParagraph
          text={
            "Секое упатство во себе ги носи сите потрени информации, одговори и инструкции за се што треба да знаете околу вашиот Triumph мотор."
          }
        />
        <MainBtn
          text={"Пронајдете го вашето упатство"}
          bgBlack={false}
          isLink
          link="https://triumphtechnicalinformation.com/handbooks"
        />
      </div>

      <section
        className="py-4 md:py-8 lg:py-16 m-auto w-11/12 md:w-9/12 flex flex-col md:flex-row justify-center gap-4 
        md:gap-16 lg:gap-24"
      >
        <CardLinkItem
          title={"Препорачани Лубриканти"}
          image={"/images/owners/oilSelector.avif"}
          text={"Откријте Повеќе"}
          url={"/owners/oil-recommendation"}
        />
        <CardLinkItem
          title={"Избор на Пневматици"}
          image={"/images/owners/tyreSelector.avif"}
          text={"Откријте Повеќе"}
          url={
            "https://media.triumphmotorcycles.co.uk/image/upload/f_auto/q_auto/sitecoremedialibrary/media-library/files/central-marketing-team/tyre%20selector/issue%2028/ts_en_28.pdf?_gl=1*1mkhhr7*_ga*Mjk5MzMyMjE0LjE2OTYzNTc2MTE.*_ga_2YJFH6KBX6*MTcwNjU1ODcwMy4xOTQuMS4xNzA2NTYxNTg0LjE4LjAuMA.."
          }
        />
      </section>
    </main>
  );
};

export default ManualsPage;
