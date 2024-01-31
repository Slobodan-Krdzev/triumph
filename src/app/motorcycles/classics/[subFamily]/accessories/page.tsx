import AccessoriesListing from "@/app/components/SubFamily/ClassicAccesoryPage/AccessoriesListing";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const ClassicsAccesoriesPage = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${subFam}`, {cache: 'no-store'});
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?model=${subFam}`);
    const bikesData = await bikesRes.json();

    console.log(subFamily, subFam);

    return (
      <>
        <SecondaryPagesHeroSection
          bannerImage={subFamily.accessory.banner.image}
          subFamilyTitle={subFam}
          text={`Аксесоари`}
        />

        <main className="px-4 md:px-16 lg:px-40">
          {subFamily.accessory.infoText && 
            <section className="m-auto w-11/12 md:w-6/12 py-4 md:py-8 lg:py-16">
              {subFamily.accessory.infoText.title && <SectionTitleH2 text={subFamily.accessory.infoText.title ?? ""} color={"dark"} />}
              {subFamily.accessory.infoText.desc && <PageParagraph text={subFamily.accessory.infoText.desc ?? ""} />}

            </section>}

          <AccessoriesListing items={subFamily.accessory.accessoryTypes ?? []} />

          {bikesData.map((bike: any) => (
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike.title ?? bike.model}
              desc={bike.subFamilyPromo?.desc ?? `Цени од:€ ${bike.price}.00`}
              ctaBtn={{
                text: "КОнфигурација",
                link: `/configure/bike/${bike.model}`,
              }}
              image={{
                src: bike.gallery.modelImage.src,
                alt: bike.gallery.modelImage.alt,
              }}
              blackBtn={true}
            />
          ))}
        </main>
      </>
    );
  } catch (err) {
    console.log(err);

    return redirect(`/motorcycles/classics/${subFam}`)
  }
};

export default ClassicsAccesoriesPage;
