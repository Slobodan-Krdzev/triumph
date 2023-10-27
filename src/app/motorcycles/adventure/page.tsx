import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageHeroSection from "@/app/components/familiySharedComponents/PageHeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import SecondaryNavBar from "@/app/components/whiteSecondaryNavBar/SecondaryNavBar";
import { BIKES, FAMILIES } from "@/app/constants/constants";

const AdventurePage = async () => {
  const familyRes = await fetch(`${FAMILIES}?type=adventure`, {
    cache: "no-store",
  });
  const familyData = await familyRes.json();

  const bikesRes = await fetch(`${BIKES}?type=adventure`);
  const bikes = await bikesRes.json();

  return (
    <main className="relative">
      <SecondaryNavBar items={bikes} />
      <PageHeroSection
        title={familyData[0].type}
        mainBikeLogo={familyData[0].mainBikeLogoImage}
        desc={familyData[0].familyPageBannerDesc}
        video={familyData[0].familyPageBannerVideo}
      />

      <section className="py-32">
        <div className="flex flex-col justify-items-center items-center w-2/4 m-auto text-center">
          <SectionTitleH2 text="THE ULTIMATE RANGE OF ADVENTURE MOTORCYCLES" />
          <PageParagraph
            marginBot={true}
            text="Open up a world of adventure, with motorcycles built to go the distance."
          />
          <PageParagraph text="No matter how far the ride, no matter how epic the journey, the Tiger generation is ready to go anywhere and face anything." />
        </div>
      </section>

      <TextAndImageFlexSection
        title={familyData[0].topSectionInfo.title}
        textMain={familyData[0].topSectionInfo.desc1}
        textSecondary={familyData[0].topSectionInfo.desc2}
        image={familyData[0].topSectionInfo.image}
      />

      <BikeInfoTextImageBtn
        title={"TIGER 1200 GT, GT PRO AND GT EXPLORER"}
        desc={
          "Врвна авантуристичка серија фокусирана на патишта, со можности и удобност за интерконтинентално патување."
        }
        ctaBtn={{
          text: "Детали",
          link: "/motorcycles/adventure/Tiger 800",
        }}
        image={{
          src: "/images/adventure/tiger1200Gt955x537.avif",
          alt: "Tiger 1200 GT",
        }}
        blackBtn={false}
      />

      <BikeInfoTextImageBtn
        imageOnTheLeft={true}
        title={"TIGER 1200 RALLY PRO AND RALLY EXPLORER"}
        desc={
          "Теренски карактер и ултра способности, од врвната all-terrain авантуристичка палета."
        }
        ctaBtn={{
          text: "дЕТАЛИ",
          link: "/motorcycles/adventure/Tiger 1200 Rally",
        }}
        image={{
          src: "/images/adventure/tiger1200Rally.avif",
          alt: "Tiger 1200 GT",
        }}
        blackBtn={false}
      />

      <BikeInfoTextImageBtn
        title={"TIGER SPORT 660"}
        desc={
          "Прв во авантуристичката палета, со трицилиндрични перформанси, неверојатен комфор, карактеристики и висока употребливост и со најниски трошоци за работа во класата"
        }
        ctaBtn={{
          text: "дЕТАЛИ",
          link: "/motorcycles/adventure/Tiger 600",
        }}
        image={{
          src: "/images/adventure/tiger660.avif",
          alt: "Tiger 1200 GT",
        }}
        blackBtn={false}
      />

      <BikeInfoTextImageBtn
        title={"TIGER 900 RALLY"}
        desc={
          "Возбудлива 'Tiger' серија дизајнирана за максимална 'off-road' авантура, удобност, контрола и многу способности, врз темелот на најдобрите досегашни перформанси и спецификација на 3-цилиндричниот мотор."
        }
        ctaBtn={{
          text: "Детали",
          link: "/motorcycles/adventure/Tiger 900 Rally",
        }}
        image={{
          src: "/images/adventure/tiger900Rally.avif",
          alt: "Tiger 1200 GT",
        }}
        blackBtn={true}
      />

      <BikeInfoTextImageBtn
        title={"TIGER 1200"}
        desc={"Triumph Tiger 1200: авантуристички 'all-terain' мотор што го освојува светот, усовршен од вас…"}
        ctaBtn={{
          text: "Детали",
          link: "/motorcycles/adventure/Tiger 1200",
        }}
        image={{
          src: "/images/adventure/tiger1200Gif.gif",
          alt: "video/mp4",
        }}
        blackBtn={true}     />
    </main>
  );
};

export default AdventurePage;
