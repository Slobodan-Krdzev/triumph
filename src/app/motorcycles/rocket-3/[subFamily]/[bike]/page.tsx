import BikeGalleyCarousell from "@/app/components/BikePageComponents/BikeGalleyCarousell";
import BikeTitle from "@/app/components/BikePageComponents/BikeTitle";
import BikePageCarousell from "@/app/components/BikePageComponents/Carousell/BikePageCarousell";
import ColorNamePreviewer from "@/app/components/BikePageComponents/ColorNamePreviewer";
import CustomizationColorsListing from "@/app/components/BikePageComponents/CustomizationColorsListing";
import ImagePreview from "@/app/components/BikePageComponents/ImagePreview";
import PricePriviewer from "@/app/components/BikePageComponents/PricePriviewer";
import PromoBikeYoutubeVideo from "@/app/components/BikePageComponents/PromoBikeYoutubeVideo";
import Rocket3TopDesc from "@/app/components/BikePageComponents/Rocket3Components/Rocket3TopDesc";
import GrayBand from "@/app/components/GrayBand";
import MainBtn from "@/app/components/MainBtn";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import SpecTableListi from "@/app/components/SubFamily/Specification/SpecTableListi";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";

const RocketBikePage = async ({ params }: any) => {
  const bikeModel = params.bike;

  try {
    const bikeRes = await fetch(`${BIKES}?model=${params.bike}`, {
      cache: "no-store",
    });
    const bikeData = await bikeRes.json();
    const bike = bikeData[0];

    const subFamRes = await fetch(`${SUB_FAMILIES}?subFamilyName=rocket-3`, {
      cache: "no-store",
    });
    const subFamData = await subFamRes.json();
    const subFam = subFamData[0];

    return (
      <main className="bg-white">
        <section>
          <div className="flex flex-col justify-end pt-8 md:pt-16 px-4 md:px-8 lg:px-16">
            <BikeTitle text={bike.title} />
            <div className="flex items-center flex-col md:flex-row gap-4 md:gap-0">
              <div className="flex flex-col w-full md:w-2/12 items-start md:justify-center lg:pl-24 md:pl-16 pl-0 order-3 md:order-1">
                {bike.customizationColors && <ColorNamePreviewer bike={bike} />}

                <p className="text-sm font-semibold text-neutral-500">
                  Цени од:
                </p>
                <PricePriviewer bike={bike} />
                <div className="flex flex-col gap-6 text-center">
                  <MainBtn
                    text={"КОНФИГУРАЦИЈА"}
                    bgBlack={false}
                    isLink={true}
                    link={`/configure/bike/${bike.model}`}
                  />
                  <MainBtn
                    text={"КОНТАКТ"}
                    bgBlack={true}
                    isLink={true}
                    link={"/dealers/dealer-search"}
                  />
                </div>
              </div>

              <div className="md:w-8/12 w-full m-auto order-1 md:order-2">
                {bike.bikeCollorPalletteGallery && <ImagePreview bike={bike} />}
              </div>
              <div className="md:w-2/12 w-full order-2 md:order-3">
                {bike.customizationColors && (
                  <CustomizationColorsListing
                    colors={bike.customizationColors}
                  />
                )}
              </div>
            </div>
          </div>
        </section>

        {bike.bikePageInfo && (
          <Rocket3TopDesc info={bike.bikePageInfo.topDesc} />
        )}

        {subFam.subFamilyPageInfo.specNumbers && (
          <NumbersSection
            model={bikeModel}
            specNumbers={subFam.subFamilyPageInfo.specNumbers}
            bgBlack={true}
          />
        )}

        {bike.gallery.promoYoutubeVideo && (
          <PromoBikeYoutubeVideo
            video={bike.gallery.promoYoutubeVideo.src}
            alt={bike.gallery.promoYoutubeVideo.alt}
          />
        )}

        {bike.features && (
          <section className="px-4 py-4 md:py-8 lg:py-16">
            <div className="text-center md:mb-8">
              <SectionTitleH2 text={"Карактеристики"} color={"dark"} />
            </div>
            <SpecTableListi
              items={bike.features}
              title={"Карактеристики"}
              isOpen={true}
            />
          </section>
        )}

        {bike.bikePageImageGallery && (
          <BikeGalleyCarousell images={bike.bikePageImageGallery} />
        )}

        {bike.bikePageCarousell && (
          <BikePageCarousell items={bike.bikePageCarousell} />
        )}

        <section className="text-center py-4 md:py-32">
          <h2 className="text-4xl md:text-6xl font-bold uppercase border-b-4 border-red-600 w-1/4 m-auto pb-4 mb-4">
            Rocket 3
          </h2>
          <p className="text-2xl md:text-4xl font-semibold uppercase mb-8">
            Раѓање на Нова Легенда
          </p>
          <MainBtn
            text={"Откријте Повеќе"}
            bgBlack={false}
            isLink={true}
            link={`/configure/bike/${bike.model}`}
          />
        </section>

        <GrayBand
          itemOne={{
            text: "Контакт",
            url: "/dealers/dealer-search",
            icon: "/pin.svg",
          }}
          itemTwo={{
            text: "КОНФИГУРАЦИЈА",
            url: `/configure/families/rocket-3`,
            icon: "/icon-configurator.svg",
          }}
        />
      </main>
    );
  } catch (err) {
    console.log(err);
    return "err";
  }
};

export default RocketBikePage;
