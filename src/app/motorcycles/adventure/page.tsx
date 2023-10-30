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
      {/* <SecondaryNavBar items={bikes} /> */}
      <PageHeroSection
        title={familyData[0].type}
        mainBikeLogo={familyData[0].mainBikeLogoImage}
        desc={familyData[0].familyPageBannerDesc}
        video={familyData[0].familyPageBannerVideo}
      />

      <section className="py-16 lg:py-32">
        <div className="flex flex-col justify-items-center items-center lg:w-2/4 w-11/12 m-auto text-center">
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

      {familyData[0].bikesInfo.map((bike: any) => (
        <BikeInfoTextImageBtn
          key={bike.title}
          title={bike.title}
          desc={bike.desc}
          ctaBtn={{
            text: bike.link.text,
            link: bike.link.link,
          }}
          image={{
            src: bike.image.src,
            alt: bike.image.alt,
          }}
          blackBtn={bike.blackBtn}
          imageOnTheLeft={bike.imageOnTheLeft}
          mobileTextRight={bike.mobileTextRight}
        />
      ))}

      
    </main>
  );
};

export default AdventurePage;
