import BikeGalleyCarousell from "@/app/components/BikePageComponents/BikeGalleyCarousell";
import BikeTitle from "@/app/components/BikePageComponents/BikeTitle";
import BikeTopInfo from "@/app/components/BikePageComponents/BikeTopInfo";
import BikePageCarousell from "@/app/components/BikePageComponents/Carousell/BikePageCarousell";
import ColorNamePreviewer from "@/app/components/BikePageComponents/ColorNamePreviewer";
import CustomizationColorsListing from "@/app/components/BikePageComponents/CustomizationColorsListing";
import ImagePreview from "@/app/components/BikePageComponents/ImagePreview";
import PricePriviewer from "@/app/components/BikePageComponents/PricePriviewer";
import PromoBikeYoutubeVideo from "@/app/components/BikePageComponents/PromoBikeYoutubeVideo";
import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import MainBtn from "@/app/components/MainBtn";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import SpecTableListi from "@/app/components/SubFamily/Specification/SpecTableListi";
import SpecsTable from "@/app/components/SubFamily/Specification/SpecsTable";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

type BikePagePromoType = {
  title: string;
  desc: string;
  image: string;
};

const SportBikePage = async ({ params }: any) => {
  const subFamilyType = params.subFamily;

  try {
    const bikeRes = await fetch(`${BIKES}?model=${params.bike}`, {
      cache: "no-store",
    });
    const bikeData = await bikeRes.json();
    const bike = bikeData[0];

    const subFamRes = await fetch(
      `${SUB_FAMILIES}?subFamilyName=${subFamilyType}`
    );
    const subFamData = await subFamRes.json();
    const subFam = subFamData[0];

    return (
      <main className="bg-white relative">
        <Breadcrumbs dark />
        <BikeTopInfo bike={bike} />

        <section className="py-4 md:py-1">
          <h2 className="uppercase text-2xl md:text-5xl font-semibold text-center mb-4 md:mb-8">
            Спецификација
          </h2>
          <div className="px-4">
            <SpecTableListi
              items={[
                {
                  title: "Цена",
                  desc: `${
                    bike?.price
                      ? `€ ${bike?.price.toLocaleString("en-EN")}`
                      : "Наскоро"
                  }`,
                },
              ]}
              title={"Цена"}
              isOpen={true}
            />
          </div>
          <SpecsTable specs={subFam} />
        </section>

        {bike?.gallery?.promoYoutubeVideo && (
          <PromoBikeYoutubeVideo
            video={bike?.gallery?.promoYoutubeVideo.src ?? ""}
            alt={bike?.gallery?.promoYoutubeVideo.alt ?? "Promo Video"}
          />
        )}

        {bike?.features && (
          <SpecTableListi
            items={bike?.features ?? []}
            title={"Карактеристики"}
            isOpen={true}
          />
        )}

        {subFam?.specNumbers && (
          <NumbersSection
            model={formulateSubFamilyTitleOnBanner(bike?.model) ?? "Triumph Sport Section"}
            specNumbers={subFam.specNumbers ?? []}
            bgBlack={false}
          />
        )}

        {bike?.bikePageImageGallery && (
          <BikeGalleyCarousell images={bike?.bikePageImageGallery ?? []} />
        )}

        {bike?.bikePageCarousell && (
          <BikePageCarousell items={bike?.bikePageCarousell ?? []} />
        )}

        {bike?.bikePagePromo && (
          <section className="px-4 md:px-24 py-4 md:py-16">
            {bike?.bikePagePromo?.map((promo: BikePagePromoType, idx: number) => (
              <TextAndImageFlexSection
                key={promo.title}
                title={promo?.title ?? "Triumph Sport"}
                textMain={promo?.desc ?? "Triumph Sport"}
                imageLeft={idx % 2 !== 0 ? true : false}
                image={{
                  src: promo?.image ?? "/images/triumphLogo.png",
                  alt: bike?.model ?? "/images/triumphLogo.png",
                }}
              />
            ))}
          </section>
        )}
      </main>
    );
  } catch (err) {
    return redirect(`/motorcycles/sport/${subFamilyType}`);
  }
};

export default SportBikePage;
