import GrayBand from "@/app/components/GrayBand";
import HeroSection from "@/app/components/SubFamily/HeroSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { getBikesBySubfamilyCategory } from "@/app/components/helpers/getBikesBySubfamilyCategory";
import { BIKES, FAMILIES } from "@/app/constants/constants";

const SportSubFamilyPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const familyRes = await fetch(`${FAMILIES}?type=sport`, {
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
            mobileImage={family.subFamilies[query].gallery.subFamilyHeroImageMobile.src}
            model={formulateSubFamilyTitleOnBanner(query)}
          />

        <main className="bg-black">
          
          <section className="text-white text-center px-6 py-4 md:py-8 lg:py-16">
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
          </section>

          {hasGrayCaro && <BottomCarousell items={familyData[0].grayCaro} />}
          
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
            <BikeListingNoSlider
              bikes={getBikesBySubfamilyCategory("daytona-660", bikes)}
              configureLink={true}
            />
          </section>
        <GrayBand
          itemOne={{
            text: "Конфигурација",
            url: `/configure`,
            icon: "/icon-configurator.svg",
          }}
          itemTwo={{
            text: "Тест Возење",
            url: "/",
            icon: "/bike.svg",
          }}
        />
      </>
    );
  } catch (error) {
    console.log(error);

    return "err";
  }
};

export default SportSubFamilyPage;
