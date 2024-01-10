import GrayBand from "@/app/components/GrayBand";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import StelthCarousell from "@/app/components/classicsPageComp/StelthCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { getBikesByEdition } from "@/app/components/helpers/getBikesByEdition";
import CardLinkItem from "@/app/components/homePageComponents/CardLinkItem";
import DiscoverThriumphCard from "@/app/components/homePageComponents/DiscoverThriumphCard";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";
import { getBikesByCC } from "./helpers/getBikesByCC";

const ClassicPage = async () => {
  const familyRes = await fetch(`${FAMILIES}?type=classics`, {
    cache: "no-store",
  });
  const familyData = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?category=classics`, {
    cache: "no-store",
  });
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
        {getBikesByCC("400", bikes).map((bike: any) => (
          <BikeInfoTextImageBtn
            key={bike.id}
            title={bike.title}
            desc={bike.desc}
            ctaBtn={{
              text: "Детали",
              link: `/motorcycles/classics/${bike.subFamilyCategory}/${bike.model}`,
            }}
            image={{
              src: bike.gallery.modelImage.src,
              alt: bike.gallery.modelImage.alt,
            }}
            blackBtn={true}
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
        {getBikesByEdition("900cc", bikes).map((bike: any) => (
          <CardLinkItem
            key={bike.id}
            title={bike.title}
            image={bike.gallery.modelImage.src}
            text={"Детали"}
            url={`/motorcycles/classic/${bike.subFamilyCategory}/${bike.model}`}
            desc={bike.desc}
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
        {familyData[0].promo.map((item: PromoDataType) => (
          <BikeInfoTextImageBtn
            key={item.title}
            title={item.title}
            desc={item.desc}
            ctaBtn={{
              text: "Детали",
              link: `/motorcycles/classics/${item.subFamilyType}`,
            }}
            image={{
              src: item.image,
              alt: item.title,
            }}
            blackBtn={item.btnBlack}
          />
        ))}
      </section>

      <section className="lg:py-16 lg:px-8 flex flex-col ">
        <div className="text-center">
          <SectionTitleH2 text="Новата Stealth Серија" color="dark" />
        </div>

        <StelthCarousell bikes={getBikesByEdition("stealth", bikes)} />
      </section>

      <section className="my-8">
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

        <BikeListingNoSlider bikes={getBikesByEdition("chrome", bikes)} />
      </section>

      {familyData[0].grayCaro && (
        <BottomCarousell items={familyData[0].grayCaro} />
      )}

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
