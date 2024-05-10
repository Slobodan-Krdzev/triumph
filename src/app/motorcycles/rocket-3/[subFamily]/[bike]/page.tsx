import BikeGalleyCarousell from "@/app/components/BikePageComponents/BikeGalleyCarousell";
import BikeTitle from "@/app/components/BikePageComponents/BikeTitle";
import BikeTopInfo from "@/app/components/BikePageComponents/BikeTopInfo";
import BikePageCarousell from "@/app/components/BikePageComponents/Carousell/BikePageCarousell";
import ColorNamePreviewer from "@/app/components/BikePageComponents/ColorNamePreviewer";
import CustomizationColorsListing from "@/app/components/BikePageComponents/CustomizationColorsListing";
import ImagePreview from "@/app/components/BikePageComponents/ImagePreview";
import PricePriviewer from "@/app/components/BikePageComponents/PricePriviewer";
import PromoBikeYoutubeVideo from "@/app/components/BikePageComponents/PromoBikeYoutubeVideo";
import Rocket3TopDesc from "@/app/components/BikePageComponents/Rocket3Components/Rocket3TopDesc";
import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import GrayBand from "@/app/components/GrayBand";
import MainBtn from "@/app/components/MainBtn";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import SpecTableListi from "@/app/components/SubFamily/Specification/SpecTableListi";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import AudioSection from "@/app/components/roadstersUniqueComp/AudioSection";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const RocketBikePage = async ({ params }: any) => {
  const bikeModel = params.bike;

  try {
    const bikeRes = await fetch(`${BIKES}?model=${params.bike}`, {
      next: {revalidate: 3000}
    });
    const bikeData = await bikeRes.json();
    const bike = bikeData[0];

    const subFamRes = await fetch(`${SUB_FAMILIES}?subFamilyName=rocket-3`, {
      next: {revalidate: 3000}

    });
    const subFamData = await subFamRes.json();
    const subFam = subFamData[0];

    return (
      <main className="bg-white relative">
          <Breadcrumbs dark />
          <BikeTopInfo bike={bike}/>

        {bike?.bikePageInfo && (
          <Rocket3TopDesc info={bike?.bikePageInfo?.topDesc ?? ""} />
        )}

        {subFam?.specNumbers && (
          <NumbersSection
            model={bikeModel ?? "Triumph Rocket-3"}
            specNumbers={subFam?.specNumbers ?? []}
            bgBlack={true}
          />
        )}

        {bike?.gallery?.promoYoutubeVideo && (
          <PromoBikeYoutubeVideo
            video={bike?.gallery?.promoYoutubeVideo?.src ?? ""}
            alt={bike?.gallery?.promoYoutubeVideo?.alt ?? ""}
          />
        )}

        {bike?.features && (
          <section className="px-4 py-4 md:py-8 lg:py-16">
            <div className="text-center md:mb-8">
              <SectionTitleH2 text={"Карактеристики"} color={"dark"} />
            </div>
            <SpecTableListi
              items={bike?.features ?? []}
              title={"Карактеристики"}
              isOpen={true}
            />
          </section>
        )}

        {bike?.bikePageCarousell && (
          <BikePageCarousell items={bike?.bikePageCarousell ?? []} />
        )}

        {bike?.bikePagePromo && (
          <section className="px-4 md:px-24 py-4 md:py-16 m-auto w-11/12 md:w-9/12">
            {bike?.bikePagePromo.map((promo: any, idx: number) => (
              <TextAndImageFlexSection
                key={promo?.title ?? idx}
                title={promo?.title ?? "Triumph Rocket-3"}
                textMain={promo?.desc ?? ""}
                imageLeft={idx % 2 !== 0 ? true : false}
                image={{
                  src: promo?.image ?? "/images/triumphLogo.png",
                  alt: bike?.model,
                }}
              />
            ))}
          </section>
        )}

        {subFam?.subFamilyPageInfo.soundSection && (
          <AudioSection
            audio={subFam?.subFamilyPageInfo?.soundSection?.audio ?? ""}
            title={subFam?.subFamilyPageInfo?.soundSection?.title ?? "Rocket-3"}
            desc={subFam?.subFamilyPageInfo?.soundSection?.desc ?? "Triumph Rocket-3 "}
            logo={subFam?.subFamilyPageInfo?.soundSection?.logo}
            model={subFam?.title ?? "Rocket-3"}
          />
        )}

        {bike?.bikePageImageGallery && (
          <BikeGalleyCarousell images={bike?.bikePageImageGallery ?? []} />
        )}

        <section className="text-center py-4 md:py-32">
          <h2 className="text-4xl md:text-6xl font-bold uppercase border-b-4 border-red-600 w-4/4 m-auto pb-4 mb-4">
            Rocket 3
          </h2>
          <p className="text-2xl md:text-4xl font-semibold uppercase mb-8">
            Раѓање на Нова Легенда
          </p>
          <MainBtn
            text={"Откријте Повеќе"}
            bgBlack={false}
            isLink={true}
            link={`/configure/bike/${bike?.model}`}
          />
        </section>
      </main>
    );
  } catch (err) {
    return redirect(`/motorcycles/rocket-3/${bikeModel}`)
  }
};

export default RocketBikePage;
