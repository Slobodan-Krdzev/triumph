import AccessoriesListing from "@/app/components/SubFamily/ClassicAccesoryPage/AccessoriesListing";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const ClassicsAccesoriesPage = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${subFam}`);
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
          <AccessoriesListing items={subFamily.accessory.accessoryTypes ?? []} />

          {bikesData.map((bike: any) => (
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike.title}
              desc={bike.subFamilyPromo.desc}
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
