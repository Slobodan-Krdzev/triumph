import BikeGalleyCarousell from "@/app/components/BikePageComponents/BikeGalleyCarousell";
import BikeTitle from "@/app/components/BikePageComponents/BikeTitle";
import BikePageCarousell from "@/app/components/BikePageComponents/Carousell/BikePageCarousell";
import ColorNamePreviewer from "@/app/components/BikePageComponents/ColorNamePreviewer";
import CustomizationColorsListing from "@/app/components/BikePageComponents/CustomizationColorsListing";
import ImagePreview from "@/app/components/BikePageComponents/ImagePreview";
import PricePriviewer from "@/app/components/BikePageComponents/PricePriviewer";
import PromoBikeYoutubeVideo from "@/app/components/BikePageComponents/PromoBikeYoutubeVideo";
import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import MainBtn from "@/app/components/MainBtn";
import SpecTableListi from "@/app/components/SubFamily/Specification/SpecTableListi";
import SpecsTable from "@/app/components/SubFamily/Specification/SpecsTable";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";

const ClassicsBikePage = async ({ params }: any) => {
  const bikeModel = params.bike;
  const subFamQuery = params.subFamily;

  try {
    const bikeRes = await fetch(`${BIKES}?model=${bikeModel}`, {
      cache: "no-store",
    });
    const bikeData = await bikeRes.json();
    const bike = bikeData[0];

    const subFamRes = await fetch(
      `${SUB_FAMILIES}?subFamilyName=${subFamQuery}`,
      { cache: "no-store" }
    );
    const subFamData = await subFamRes.json();
    const subFam = subFamData[0];

    return (
      <main className="bg-white relative">
          <Breadcrumbs dark />

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
        <section className="py-8 md:pb-8 lg:py-16">
          <h2 className="uppercase text-2xl md:text-5xl font-semibold text-center mb-4 md:mb-8">
            Спецификација
          </h2>
          <div className="px-4">
            <SpecTableListi
              items={[
                {
                  title: "Цена",
                  desc: `${bike.price ? `€ ${bike.price}.00` : "Наскоро"}`,
                },
              ]}
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

        {bike.bikePageImageGallery && (
          <BikeGalleyCarousell images={bike.bikePageImageGallery} />
        )}

        {bike.bikePageCarousell && (
          <BikePageCarousell items={bike.bikePageCarousell} />
        )}

        {bike.bikePagePromo && (
          <section className="m-auto w-full md:w-10/12 lg:w-9/12 px-4 md:px-24 py-4 md:py-16 flex flex-col gap-6 md:gap-0">
            {bike.bikePagePromo.map((promo: any, idx: number) => (
              <TextAndImageFlexSection
                key={promo.title}
                title={promo.title ?? bike.title}
                textMain={promo.desc ?? ""}
                imageLeft={idx % 2 !== 0 ? true : false}
                image={{
                  src: promo.image,
                  alt: bike.model,
                }}
              />
            ))}
          </section>
        )}

        {subFamQuery === "thruxton-rs" && (
          <section className="m-auto w-full md:w-10/12 px-4 md:px-24 py-4 md:py-16">
            <BikeInfoTextImageBtn
              title="Thruxton RS - Перформанси"
              desc="Новите надграби донесоа уште повеќе јачина на моторот со максимални 105PS при 7,500 rpm и максимален обртен момент од 112 Nm."
              desc2="Така ние во Triumph изработува еден мотор. Си модерни „roadster“ спецификации со автентичен „Cafe-Racer“ стил."
              ctaBtn={{
                text: "Откриј Повеќе",
                link: "/motorcycles/classics/thruxton-rs/engine",
              }}
              image={{
                src: "/images/classics/thruxtonRS/thruxtonRSBikePromo1.avif",
                alt: "Thruxton RS - Перформанси",
              }}
              blackBtn={false}
              imageOnTheLeft
            />
            <BikeInfoTextImageBtn
              title="Thruxton RS - Контрола и Управување"
              desc="Новиот Thruxton RS е полесен за 6 килограми смо многу карактер и е идеален мотор за оние кој бараат спортски карактер со оригинален „Cafe-Racer“ стил."
              desc2="Напредната технологија е фокусирана на возачот и го подигнува нивото на самодоверба кај возачот и го подобрува возачкото искуство."
              ctaBtn={{
                text: "Откриј Повеќе",
                link: "/motorcycles/classics/thruxton-rs/chassis-and-tech",
              }}
              image={{
                src: "/images/classics/thruxtonRS/thruxtonRSBikePromo2.avif",
                alt: "Thruxton RS - Контрола и Управување",
              }}
              blackBtn={false}
            />
            <BikeInfoTextImageBtn
              title="Thruxton RS - Стил"
              desc="Thruxton RS потполна репрезентација како би изгледал оној оригинален cafe-racer со модерни детали и технологија."
              desc2="Новиот „Jet-Black“ изглед и широката палета на стилски и есклузивни детали одлично го презентираат „Cafe-Racer“ изгледот на Thruxton RS серијата."
              ctaBtn={{
                text: "Откриј Повеќе",
                link: "/motorcycles/classic/thruxton-rs/the-original",
              }}
              image={{
                src: "/images/classics/thruxtonRS/thruxtonRSBikePromo3.avif",
                alt: "Thruxton RS - Стил",
              }}
              blackBtn={false}
              imageOnTheLeft
            />
          </section>
        )}
      </main>
    );
  } catch (err) {
    console.log(err);
    return "err";
  }
};

export default ClassicsBikePage;
