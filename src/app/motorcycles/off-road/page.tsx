import GrayBand from "@/app/components/GrayBand";
import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import HeroSection from "@/app/components/SubFamily/HeroSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import { createSubFamLinksForSecondary } from "@/app/components/helpers/createSubFamLinksForSecondary";
import {
  BIKES,
  FAMILIES,
  PROMOS,
  SUB_FAMILIES,
} from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";

const OffRoadFamilyPage = async () => {
  const familyRes = await fetch(`${FAMILIES}?type=off-road`, {
    cache: "no-store",
  });
  const familyData = await familyRes.json();

  const subFamiliesRes = await fetch(`${SUB_FAMILIES}?familyType=off-road`);
  const subFamilies = await subFamiliesRes.json();

  const bikesRes = await fetch(`${BIKES}?category=off-road`, {
    cache: "no-store",
  });
  const bikes = await bikesRes.json();

  const promosRes = await fetch(`${PROMOS}?category=off-road`);
  const promos = await promosRes.json();

  const hasYoutubeVideo = familyData[0].hasOwnProperty("youtubeVideo");

  return (
    <main className="bg-black">
      <SecondaryNavFamily
        items={createSubFamLinksForSecondary(subFamilies)}
        title={"Off Road"}
        configLink={"/configure"}
      />

      <HeroSection
        video={familyData[0].familyPageBannerVideo}
        mobileImage={"/images/offRoad/offRoadConfigBanner.avif"}
        bigTitle="Off-Road"
        slogans={["Фокусирана", "Тркачка", "Серија"]}
      />

      <div className="py-8 md:py-16 px-4 md:px-12 lg:px-20">
        <TextAndImageFlexSection
          textWhite
          textCenter
          imageLeft
          title={"Мотокрос"}
          textMain={
            "Серија развиена од врвни Triumph инжињери и мотокрос шампиони."
          }
          textSecondary={"Најновата Off-Road серија е креирана за да победува."}
          image={{
            src: "/images/offRoad/offRoadFirstSection.avif",
            alt: "Off-Road Bikes",
          }}
        />
      </div>

      {familyData[0].youtubeVideo !== null ? (
        <YouTubePromo video={familyData[0].youtubeVideo ?? ""} />
      ) : (
        ""
      )}

      <div className="py-8 md:py-16 px-4 md:px-12 lg:px-20">
        <TextAndImageFlexSection
          textWhite
          textCenter
          imageLeft
          title={
            "„Оваа серија на мотори е направена за победи...Најдоброто од се вклопено во еден пакет кој ги носи перформансите на повисоко ниво.“"
          }
          textMain={" - Рики Кармајкл (The Goat)"}
          image={{
            src: "/images/offRoad/rickyPromo.avif",
            alt: "Ricky Carmichael",
          }}
        />
      </div>

      <section className="text-white px-4">
        {promos.map((promo: PromoDataType, idx: number) => (
          <BikeInfoTextImageBtn
            key={`${promo.title},${idx}`}
            title={promo.title}
            desc={promo.desc}
            ctaBtn={{
              text: "Детали",
              link: `/motorcycles/off-road/${promo.subFamilyType}`,
            }}
            image={{
              src: `${promo.image}`,
              alt: `${promo.title}`,
            }}
            blackBtn={promo.btnBlack}
            textWhite={true}
            imageOnTheLeft={idx % 2 !== 0 ? true : false}
            mobileTextRight={idx % 2 !== 0 ? true : false}
          />
        ))}
      </section>

      <section className="bg-white py-8 text-center px-4">
        <SectionTitleH2 text={"Новата Off-Road Серија"} color={"dark"} />
        <BikeListingNoSlider bikes={bikes} configureLink={true} />
      </section>

      <GrayBand
        itemOne={{
          text: "Контакт",
          url: "/",
          icon: "/point.svg",
        }}
        itemTwo={{
          text: "Тест Возење",
          url: "/",
          icon: "/bike.svg",
        }}
      />
    </main>
  );
};

export default OffRoadFamilyPage;
