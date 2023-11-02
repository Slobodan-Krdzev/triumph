import GrayBand from "@/app/components/GrayBand";
import StelthCarousell from "@/app/components/classicsPageComp/StelthCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import CardLinkItem from "@/app/components/homePageComponents/CardLinkItem";
import DiscoverThriumphCard from "@/app/components/homePageComponents/DiscoverThriumphCard";
import { FAMILIES, BIKES } from "@/app/constants/constants";
import React from "react";

const ClassicPage = async () => {
  const familyRes = await fetch(`${FAMILIES}?type=classics`, {
    cache: "no-store",
  });
  const familyData = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?type=classics`);
  const bikes = await bikesRes.json();

  const getBikesBySubFamCategory = (cat: string) => {
    const allBikes = bikes;

    // type treba da e bike
    const filteredBikes = allBikes.filter(
      (bike: any) => bike.subFamilyCategory === cat
    );

    return filteredBikes;
  };

  const getBikesBySpecialEdition = (edition: string) => {
    const allBikes = bikes;

    // type treba da e bike
    const filteredBikes = allBikes.filter(
      (bike: any) => bike.specialEdition === edition
    );

    console.log("ovde", allBikes);

    return filteredBikes;
  };

  return (
    <>
      <PageHeroSection
        title={`modern  ${familyData[0].type}`}
        video={familyData[0].familyPageBannerVideo}
      />

      <section className="pt-16 lg:pt-32">
        <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
          <SectionTitleH2 text="400cc engine" color="dark" />
          <PageParagraph
            marginBot={true}
            text='"Speed ​​400" и "Scrambler 400 X", два сосема нови моторцикли доаѓаат во иконската палета на модерни класици на Triumph. Со карактерот и одзивот на новиот мотор од 400 кубици, прифатлива ергономија и високи спецификации, овие нови машини нудат врвни перформанси и самоуверено, агилно ракување.'
          />
        </div>
      </section>

      <section>
        {/* type treba da e bike */}
        {getBikesBySubFamCategory("400cc").map((bike: any) => (
          <BikeInfoTextImageBtn
            key={bike.bikeId}
            title={bike.familyPageInfo.title}
            desc={bike.familyPageInfo.desc}
            ctaBtn={{
              text: bike.familyPageInfo.link.text,
              link: bike.familyPageInfo.link.url,
            }}
            image={{
              src: bike.familyPageInfo.image.src,
              alt: bike.familyPageInfo.image.alt,
            }}
            blackBtn={bike.familyPageInfo.blackBtn}
          />
        ))}
      </section>

      <section className="pt-16 lg:pt-32">
        <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
          <SectionTitleH2 text="900cc engine" color="dark" />
          <PageParagraph
            marginBot={true}
            text='"Modern Classic 900 cc" серијата на Triumph обезбедува возбудливи перформанси и управување што инспирира самодоверба.'
          />
        </div>
      </section>

      <section className="flex flex-col md:flex-row md:px-8 px-4 md:gap-4">
        {getBikesBySubFamCategory("900cc").map((bike: any) => (
          <CardLinkItem
            key={bike.bikeId}
            title={bike.familyPageInfo.title}
            image={bike.familyPageInfo.image.src}
            text={"Детали"}
            url={bike.familyPageInfo.link.url}
            desc={bike.familyPageInfo.desc}
          />
        ))}
      </section>

      <section className="pt-16 lg:pt-32">
        <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
          <SectionTitleH2 text="1200cc engine" color="dark" />
          <PageParagraph
            marginBot={true}
            text="Уникатни двоцилиндрични, линиски мотоцикли со мотор од 1200 кубика од Triumph имаат свој уникатен, автентичен карактер и стил."
          />
        </div>
      </section>

      <section className="flex flex-wrap px-8">
        {getBikesBySubFamCategory("1200cc").map((bike: any) => (
          <DiscoverThriumphCard
            key={bike.bikeId}
            desc={bike.familyPageInfo.desc}
            image={bike.familyPageInfo.image.src}
            title={bike.familyPageInfo.title}
            url={bike.familyPageInfo.link.url}
            btnText={"Детали"}
          />
        ))}
      </section>

      <section>
        {familyData[0].specialEditions.map((edition: any) => (
          <BikeInfoTextImageBtn
            key={edition.title}
            title={edition.title}
            desc={edition.desc}
            ctaBtn={{
              text: edition.link.text,
              link: edition.link.url,
            }}
            image={{
              src: edition.image.src,
              alt: edition.image.alt,
            }}
            blackBtn={edition.blackBtn}
          />
        ))}
      </section>

      <section className="lg:py-16 lg:px-8 flex flex-col ">
        <div className="text-center">
          <SectionTitleH2 text="Новата Stealth Серија" color="dark" />
        </div>

        <StelthCarousell bikes={getBikesBySpecialEdition("stealth")} />
      </section>

      <section>
        <div className="text-center lg:w-2/4 w-full px-4 lg:px-0 m-auto">
          <SectionTitleH2 text="Chrome Колекција" color="dark" />
          <PageParagraph
            marginBot={true}
            text="Десет иконски мотори, секој од нив со прекрасен и уникатен нов хромиран дизајн, инспириран од класичниот изглед, прекрасно изведен од тимовите за дизајн и производство на Triumph. Оваа едноставно неверојатна палета од десет иконски мотоцикли Triumph во хром е прослава на рачно изработениот стил и традиција."
          />
          <SectionTitleH2
            text="Специјални. Рачно изработени. Прекрасни."
            color="dark"
          />
        </div>

        <BikeListingNoSlider bikes={getBikesBySpecialEdition('chrome')}/>
      </section>

      <GrayBand
        itemOne={{
          text: "Контакт",
          url: "/",
          icon: "/point.svg",
        }}
        itemTwo={{
          text: "Конфигурација",
          url: "/configure",
          icon: "/icon-configurator.svg",
        }}
      />
    </>
  );
};

export default ClassicPage;
