import HeroSection from "@/app/components/SubFamily/HeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { BIKES, FAMILIES } from "@/app/constants/constants";

const OffRoadSubFamilyPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const familyRes = await fetch(`${FAMILIES}?type=off-road`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const family = familyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${query}`);
    const bikes = await bikesRes.json();

    const hasGrayCaro =
      family.subFamilies[query].subFamilyPageInfo.hasOwnProperty(
        "grayCarousell"
      );

    const hasYoutubeVid =
      family.subFamilies[query].subFamilyPageInfo.hasOwnProperty(
        "youtubeVideo"
      );

    const hasAudio =
      family.subFamilies[query].subFamilyPageInfo.hasOwnProperty(
        "audioSection"
      );

    const hasTopSection =
      family.subFamilies[query].subFamilyPageInfo.hasOwnProperty("topSection");

    return (
      <>
        <HeroSection
          video={family.subFamilies[query].gallery.subFamilyHeroVideo.src}
          mobileImage={
            family.subFamilies[query].gallery.subFamilyHeroImageMobile.src
          }
          model={formulateSubFamilyTitleOnBanner(query)}
          slogans={
            family.subFamilies[query].subFamilyPageInfo.heroSlogans ?? []
          }
        />

        <main className="bg-black">
          
        </main>
        <section className="px-4 lg:px-20 xl:px-40">
          {bikes.map((bike: any) => (
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike.subFamilyPromo.title ?? ""}
              desc={bike.subFamilyPromo.desc ?? ""}
              ctaBtn={{
                text: "Детали",
                link: `/motorcycles/${family.type}/${query}/${bike.model}`,
              }}
              image={{
                src: `${bike.gallery.modelImage.src}`,
                alt: `${bike.gallery.modelImage.alt}`,
              }}
              blackBtn={true}
              imageOnTheLeft={false}
              mobileTextRight={false}
            />
          ))}
        </section>

        <section className="bg-white py-8 text-center px-4">
          <SectionTitleH2 text={"Новата Daytona 660"} color={"dark"} />
          <BikeListingNoSlider bikes={bikes} configureLink={true} />
        </section>
      </>
    );
  } catch (error) {
    console.log(error);

    return "err";
  }
};

export default OffRoadSubFamilyPage;
