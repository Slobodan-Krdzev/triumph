import BikeTitle from "@/app/components/BikePageComponents/BikeTitle";
import BikePageCarousell from "@/app/components/BikePageComponents/Carousell/BikePageCarousell";
import ColorNamePreviewer from "@/app/components/BikePageComponents/ColorNamePreviewer";
import CustomizationColorsListing from "@/app/components/BikePageComponents/CustomizationColorsListing";
import ImagePreview from "@/app/components/BikePageComponents/ImagePreview";
import PricePriviewer from "@/app/components/BikePageComponents/PricePriviewer";
import PromoBikeYoutubeVideo from "@/app/components/BikePageComponents/PromoBikeYoutubeVideo";
import GrayBand from "@/app/components/GrayBand";
import MainBtn from "@/app/components/MainBtn";
import SpecTableListi from "@/app/components/SubFamily/Specification/SpecTableListi";
import SpecsTable from "@/app/components/SubFamily/Specification/SpecsTable";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import React from "react";

const ClassicsBikePage = async ({ params }: any) => {
  const bikeModel = params.bike;
  const subFamQuery = params.subFamily

  try {
    const bikeRes = await fetch(`${BIKES}?model=${params.bike}`, {
      cache: "no-store",
    });
    const bikeData = await bikeRes.json();
    const bike = bikeData[0];

    const subFamRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${subFamQuery}`);
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
        <section className="py-4 md:py-1">
          <h2 className="uppercase text-2xl md:text-5xl font-semibold text-center mb-4 md:mb-8">
            Спецификација
          </h2>
          <div className="px-4">
            <SpecTableListi
              items={[{ title: "Цена", desc: `${bike.price ? `€ ${bike.price}.00` : "Наскоро"}` }]}
              title={"Цена"}
              isOpen={true}
            />
          </div>
          <SpecsTable specs={subFam.subFamilyPageInfo.fullSpecs} />
        </section>

        {bike.gallery.promoYoutubeVideo && (
          <PromoBikeYoutubeVideo
            video={bike.gallery.promoYoutubeVideo.src}
            alt={bike.gallery.promoYoutubeVideo.alt}
          />
        )}

        {bike.features && (
          <section className="px-4">
            <SpecTableListi
              items={bike.features}
              title={"Карактеристики"}
              isOpen={true}
            />
          </section>
        )}

        {bike.bikePageCarousell && (
          <BikePageCarousell items={bike.bikePageCarousell} />
        )}

        {bike.bikePagePromo && (
          <section className="m-auto w-full md:w-10/12 px-4 md:px-24 py-4 md:py-16">
            {bike.bikePagePromo.map((promo: any, idx: number) => (
              <TextAndImageFlexSection
                key={promo.title}
                title={promo.title}
                textMain={promo.desc}
                imageLeft={idx % 2 !== 0 ? true : false}
                image={{
                  src: promo.image,
                  alt: bike.model,
                }}
              />
            ))}
          </section>
        )}

        <GrayBand
          itemOne={{
            text: "Контакт",
            url: "/dealers/dealer-search",
            icon: "/pin.svg",
          }}
          itemTwo={{
            text: "КОНФИГУРАЦИЈА",
            url: `/configure/families/classics`,
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

export default ClassicsBikePage;
