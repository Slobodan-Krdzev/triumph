import HeroSection from "@/app/components/SubFamily/HeroSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { getBikesBySubfamilyCategory } from "@/app/components/helpers/getBikesBySubfamilyCategory";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const SportSubFamilyPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${query}`, {
      next: { revalidate: 3000 },
    });
    const subfamilyData = await subFamilyRes.json();
    const subFamily = subfamilyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${query}`, {
      next: { revalidate: 3000 },
    });
    const bikes = await bikesRes.json();

    const hasGrayCaro =
      subFamily.hasOwnProperty("grayCarousell");

    const hasYoutubeVid =
      subFamily.hasOwnProperty("youtubeVideo");

    return (
      <>
        <HeroSection
          video={subFamily.gallery.subFamilyHeroVideo.src}
          mobileImage={subFamily.gallery.subFamilyHeroImageMobile.src}
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
              <YouTubePromo
                video={subFamily.youtubeVideo ?? ""}
              />
            )}
          </section>

          {hasGrayCaro && (
            <BottomCarousell
              items={subFamily.grayCarousell}
            />
          )}
        </main>
        <section className="px-4 lg:px-20 xl:px-40">
          {bikes.map((bike: any) => (
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike.subFamilyPromo.title ?? bike.title}
              desc={bike.subFamilyPromo?.desc ?? ""}
              desc2={bike.price && `Цени од: €${bike.price}.00`}

              ctaBtn={{
                text: "Детали",
                link: `/motorcycles/${subFamily.familyType}/${query}/${bike.model}`,
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
      </>
    );
  } catch (error) {
    return redirect('/motorcycles/sport')
  }
};

export default SportSubFamilyPage;
