import GrayBand from "@/app/components/GrayBand";
import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import HeroSection from "@/app/components/SubFamily/HeroSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formSecondaryNavItems } from "@/app/components/helpers/formSecondaryNavItems";
import { getBikesBySubfamilyCategory } from "@/app/components/helpers/getBikesBySubfamilyCategory";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";

const SportBikePage = async ({params}:any) => {

  const familyRes = await fetch(`${FAMILIES}?type=sport`, {
    cache: "no-store",
  });
  const familyData = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?category=sport`, {
    cache: "no-store",
  });
  const bikes = await bikesRes.json();

  return (
    <main className="bg-black">
      <SecondaryNavFamily
        items={formSecondaryNavItems(familyData[0].subFamilies, 'sport')}
        title={"Новата Daytona 660"}
        configLink={"/configure"}
      />

      <HeroSection
        video={familyData[0].familyPageBannerVideo}
        bigTitle="Потполно Нова Daytona 660"
      />

      <section className="text-white text-center px-6 py-4 md:py-8 lg:py-16">
        <div className="lg:w-5/12 w-10/12 m-auto">
          <SectionTitleH2 text={"Играта Започнува"} color={"white"} />
          <p className="md:text-xl text-md mb-2">
            Динамична ДНК со нов карактер.
          </p>
          <p className="md:text-xl text-md mb-6">
            Агресивни линии, агилност и фокусирано спортско управување,
            подкрепено со возбудлива моќност од трицилиндричниот мотор доставува
            чувство на апсолутно уживање - новата Daytona 660 серија е спремна
            за секаков предизвик.
          </p>

          <h3 className="uppercase font-semibold tracking-tighter text-4xl">
            Вооспоставени Нови Правила!
          </h3>
        </div>

        <YouTubePromo video={familyData[0].youtubeVideo ?? ""} />
      </section>

      {familyData[0].grayCaro && (
        <BottomCarousell items={familyData[0].grayCaro} />
      )}

      <section className="text-white px-4">
        {familyData[0].promo.map((item: PromoDataType, idx: number) => (
          <BikeInfoTextImageBtn
            key={`${item.title},${idx}`}
            title={item.title}
            desc={item.desc}
            ctaBtn={{
              text: "Детали",
              link: `/motorcycles/sport/${item.subFamilyType}`,
            }}
            image={{
              src: `${item.image}`,
              alt: `${item.title}`,
            }}
            blackBtn={item.btnBlack}
            textWhite={true}
            imageOnTheLeft={idx % 2 !== 0 ? true : false}
            mobileTextRight={idx % 2 !== 0 ? true : false}
          />
        ))}
      </section>

      <section className="bg-white py-8 text-center px-4">
        <SectionTitleH2 text={"Новата Daytona 660"} color={"dark"} />
        <BikeListingNoSlider
          bikes={getBikesBySubfamilyCategory("daytona-660", bikes)}
          configureLink={true}
        />
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

export default SportBikePage;
