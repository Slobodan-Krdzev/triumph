import BanerAndCTASection from "@/app/components/BanerAndCTASection";
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
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

type BikePagePromoType = {
  title: string;
  desc: string;
  image: string;
};

const OffRoadBikePage = async ({ params }: any) => {

  const subFamQuery = params.subFamily

  try {
    const bikeRes = await fetch(`${BIKES}?model=${params.bike}`, {
      next: {revalidate: 2000}
    });
    const bikeData = await bikeRes.json();
    const bike = bikeData[0];

    const subFamRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${subFamQuery}`);
    const subFamData = await subFamRes.json();
    const subFam = subFamData[0];

    return (
      <main className="bg-white relative">
          <Breadcrumbs dark />
          <BikeTopInfo bike={bike}/>
        
        <section className="py-4 md:py-1">
          <h2 className="uppercase text-2xl md:text-5xl font-semibold text-center mb-4 md:mb-8">
            Спецификација
          </h2>
          <div className="px-4">
            <SpecTableListi
              items={[
                {
                  title: "Цена",
                  desc: `${bike?.price ? `€ ${bike.price.toLocaleString('en-EN')}` : "Наскоро"}`,
                },
              ]}
              title={"Цена"}
              isOpen={true}
            />
          </div>
          <SpecsTable specs={subFam} />
        </section>

        <section className="bg-black">
          {bike?.gallery?.promoYoutubeVideo && (
            <PromoBikeYoutubeVideo
              bgBlack
              video={bike?.gallery?.promoYoutubeVideo?.src ?? ""}
              alt={bike?.gallery?.promoYoutubeVideo?.alt ?? "Promo Video"}
            />
          )}

          <BanerAndCTASection
            text={"Конфигурирај"}
            image={"/images/offRoad/tf250X/bikeMidBanner.avif"}
            link={"/configure"}
            btnText={"Конфигурирај"}
          />

          {bike?.features && (
            <SpecTableListi
              items={bike.features ?? []}
              title={"Карактеристики"}
              isOpen={true}
            />
          )}

          {subFam?.specNumbers && (
            <NumbersSection
              model={formulateSubFamilyTitleOnBanner(bike.model) ?? ""}
              specNumbers={subFam.specNumbers ?? []}
              bgBlack={true}
            />
          )}
        </section>

        {bike?.bikePageImageGallery && 
            <BikeGalleyCarousell images={bike?.bikePageImageGallery ?? []} />
          }

        <section
          style={{
            backgroundImage:
              "url('/images/offRoad/tf250X/bikeBottomBanner.avif')",
            backgroundPosition: "center center",
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover",
            height: "75vh",
          }}
        ></section>

        {bike?.bikePageCarousell && (
          <BikePageCarousell items={bike?.bikePageCarousell ?? []} />
        )}

        <section
          style={{
            backgroundImage:
              "url('/images/offRoad/tf250X/bikeLastBanner.avif')",
            backgroundPosition: "center center",
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover",
            height: "75vh",
          }}
        ></section>
      </main>
    );
  } catch (err) {
    return redirect(`/motorcycles/off-road/${subFamQuery}`)
  }
};

export default OffRoadBikePage;
