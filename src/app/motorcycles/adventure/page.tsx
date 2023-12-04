import GrayBand from "@/app/components/GrayBand";
import SecondaryNavFamily from "@/app/components/SecondaryNavFamily";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import { getBikesBySubfamilyCategory } from "@/app/components/helpers/getBikesBySubfamilyCategory";
import { SecondaryNavItemsType } from "@/app/components/whiteSecondaryNavBar/SecondaryNavBar";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";

const AdventurePage = async () => {
  const familyRes = await fetch(`${FAMILIES}?type=adventure`, {
    cache: "no-store",
  });
  const familyData = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?category=adventure`, {
    cache: "no-store",
  });
  const bikes = await bikesRes.json();

  const secondaryNavItems: SecondaryNavItemsType[] = [{
    text: "Tiger 1200 GT",
    link: `/motorcycles/adventure/tiger-1200-gt`,
  },
  {
    text: "Tiger 1200 Rally",
    link: `/motorcycles/adventure/tiger-1200-rally`,
  },
  {
    text: "Tiger Sport 660",
    link: `/motorcycles/adventure/tiger-sport-660`,
  },
  {
    text: "Tiger 850 Sport",
    link: `/motorcycles/adventure/tiger-850-sport`,
  },
  {
    text: "Tiger 900",
    link: `/motorcycles/adventure/tiger-900-2023`,
  }]

  return (
    <main className="relative white-bg">
      {/* <SecondaryNavBar items={secondaryNavItems} title={"Adventure"} configurationLink={"/configure"} /> */}
      <SecondaryNavFamily items={secondaryNavItems} title={"Adventure"} configLink={"/configure"} />
      <PageHeroSection
        title={familyData[0].type}
        mainBikeLogo={familyData[0].mainBikeLogoImage}
        desc={familyData[0].familyPageBannerDesc}
        video={familyData[0].familyPageBannerVideo}
      />

      <section className="p-4 lg:p-28 ">
        <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center my-8 md:mb-16">
          <SectionTitleH2
            text="Најсериозните авантуристички моторцикли"
            color="dark"
          />
          <PageParagraph
            marginBot={true}
            text="Искусете го светот на авантурите, со мотори кои се спремни за долги патувања"
          />
          <PageParagraph text="Без разлика на дистанцата, без разлика на големината на предизвикот, Tiger серијата е спремна за било какви препреки кои стојат до вашата цел." />
        </div>

        <TextAndImageFlexSection
          title={familyData[0].topSectionInfo.title}
          textMain={familyData[0].topSectionInfo.desc1}
          textSecondary={familyData[0].topSectionInfo.desc2}
          image={familyData[0].topSectionInfo.image}
        />

        <section className="py-4 lg:py-10">
          <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
            <SectionTitleH2 text="Tiger 900 Серија" color="dark" />
            <p className="uppercase ">Што би одбрале вие ?</p>
          </div>

          <BikeListingNoSlider
            bikes={getBikesBySubfamilyCategory("tiger-900-range", bikes)}
            configureLink={true}
          />
        </section>

        {familyData[0].promo.map((item: PromoDataType, idx: number) => (
          <BikeInfoTextImageBtn
            key={`${item.title},${idx}`}
            title={item.title}
            desc={item.desc}
            ctaBtn={{
              text: "Детали",
              link: `/motorcycles/adventure/${item.subFamilyType}`,
            }}
            image={{
              src: `${item.image}`,
              alt: `${item.title}`,
            }}
            blackBtn={item.btnBlack}
            imageOnTheLeft={idx % 2 === 0 ? true : false}
            mobileTextRight={idx % 2 === 0 ? true : false}
          />
        ))}

        <BikeInfoTextImageBtn
          title={"TIGER 1200"}
          desc={"All-terrain моторцикли кои го освојуваат светот..."}
          ctaBtn={{
            text: "Детали",
            link: "/configure/families/adventure",
          }}
          image={{
            src: "/images/adventure/adventurePromoTiger1200Gif.gif",
            alt: "slika",
          }}
          blackBtn={true}
          imageOnTheLeft={false}
          mobileTextRight={false}
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

export default AdventurePage;
