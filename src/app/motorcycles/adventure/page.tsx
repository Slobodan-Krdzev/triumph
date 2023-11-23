import GrayBand from "@/app/components/GrayBand";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import SecondaryNavBar from "@/app/components/whiteSecondaryNavBar/SecondaryNavBar";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import { PromoDataType } from "@/app/types/HomeTypes/SharedTypes/types";

const AdventurePage = async () => {
  const familyRes = await fetch(`${FAMILIES}?type=adventure`, {
    cache: "no-store",
  });
  const familyData = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?category=adventure`, {
    next: { revalidate: 3000 },
  });
  const bikes = await bikesRes.json();

  console.log(familyData[0].promo[0]);

  return (
    <main className="relative">
      {/* <SecondaryNavBar items={bikes} /> */}
      <PageHeroSection
        title={familyData[0].type}
        mainBikeLogo={familyData[0].mainBikeLogoImage}
        desc={familyData[0].familyPageBannerDesc}
        video={familyData[0].familyPageBannerVideo}
      />

      <section className="py-4 lg:py-10">
        <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
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
      </section>

      <TextAndImageFlexSection
        title={familyData[0].topSectionInfo.title}
        textMain={familyData[0].topSectionInfo.desc1}
        textSecondary={familyData[0].topSectionInfo.desc2}
        image={familyData[0].topSectionInfo.image}
      />

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
        desc={'All-terrain моторцикли кои го освојуваат светот...'}
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
