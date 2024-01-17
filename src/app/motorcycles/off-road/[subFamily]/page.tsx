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
          {/* <section className="text-white text-center px-6 py-4 md:py-8 lg:py-16">
            <div className="lg:w-5/12 w-10/12 m-auto">
              <SectionTitleH2 text={"Играта Започнува"} color={"white"} />
              <p className="md:text-xl text-md mb-2">
                Динамична ДНК со нов карактер.
              </p>
              <p className="md:text-xl text-md mb-6">
                Агресивни линии, агилност и фокусирано спортско управување,
                подкрепено со возбудлива моќност од трицилиндричниот мотор
                доставува чувство на апсолутно уживање - новата Daytona 660
                серија е спремна за секаков предизвик.
              </p>

              <h3 className="uppercase font-semibold tracking-tighter text-4xl">
                Вооспоставени Нови Правила!
              </h3>
            </div>
            {hasYoutubeVid && (
              <YouTubePromo video={familyData[0].youtubeVideo ?? ""} />
            )}
          </section> */}

          {/* {hasGrayCaro && <BottomCarousell items={familyData[0].grayCaro} />} */}
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
