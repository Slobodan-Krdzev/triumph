import AccessoriesListing from "@/app/components/SubFamily/ClassicAccesoryPage/AccessoriesListing";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const SubFamReasonsToRide = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const familyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${subFam}`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const subFamily = familyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${subFam}`);
    const bikes = await bikesRes.json();

    return (
      <>
        <SecondaryPagesHeroSection
          bannerImage={subFamily.accessory.banner.image}
          subFamilyTitle={formulateSubFamilyTitleOnBanner(subFam.toUpperCase())}
          text={`Аксесоари`}
        />

        <main className="px-4 md:px-16 lg:px-40">

          {subFamily.accessory.infoText && 
            <section className="m-auto md:w-6/12 pt-4 md:pt-8 lg:pt-16 text-center">
                <SectionTitleH2 text={subFamily.accessory.infoText.title ?? ""} color="dark"/>
                <PageParagraph text={subFamily.accessory.infoText.desc ?? ""}/>
            </section>
          }
            

          {subFamily.accessory.accessoryTypes && (
            <AccessoriesListing
              items={subFamily.accessory.accessoryTypes ?? []}
            />
          )}

          {subFamily.subFamilyName !== "tiger-900" &&
            bikes.map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike.title}
                desc={bike.subFamilyPromo.desc ?? ""}
                ctaBtn={{
                  text: "Кoнфигурација",
                  link: `/configure/bike/${bike.model}`,
                }}
                image={{
                  src: bike.gallery.modelImage?.src ?? "",
                  alt: bike.gallery.modelImage?.alt ?? "Bike Image",
                }}
                blackBtn={true}
              />
            ))}

          {subFamily.subFamilyName === "tiger-900" && (
            <section className="text-center">
              <SectionTitleH2 color="dark" text="Одберете го вашиот фаворит!" />
              <BikeListingNoSlider bikes={bikes} configureLink={true} />
            </section>
          )}
        </main>
      </>
    );
  } catch (err) {
    return redirect(`/motorcycles/adventure/${subFam}`);
  }
};

export default SubFamReasonsToRide;
