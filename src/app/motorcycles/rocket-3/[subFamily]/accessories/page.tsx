import Rocket3Accessories from "@/app/components/SubFamily/Accessory/Rocket3Accessories";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const RocketAccessoryPage = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const familyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=rocket-3`, {
      next: { revalidate: 3000 },
    });
    const familyData = await familyRes.json();
    const subFamily = familyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${subFam}`, {
      next: { revalidate: 3000 },
    });
    const bikesData = await bikesRes.json();

    return (
      <>
        <SecondaryPagesHeroSection
          bannerImage={subFamily.accessory.banner.image}
          subFamilyTitle={subFam.toUpperCase()}
          text={`Аксесоари`}
        />

        <section className="gray-bg">
          {subFamily.accessory.infoText && (
            <>
              <div className="px-4 text-center w-full md:w-10/12 lg:w-6/12 m-auto py-4 md:py-8 lg:py-16 text-white">
                <SectionTitleH2
                  text={subFamily.accessory.infoText.title}
                  color={"white"}
                />
                <PageParagraph text={subFamily.accessory.infoText.desc} />
              </div>
            </>
          )}

          <Rocket3Accessories items={subFamily.accessory.accessoryTypes} />
        </section>

        <main className="px-4 md:px-16 lg:px-40">
          {/* <AccessoriesListing items={subFamily.accessory.accessoryTypes} /> */}

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

    return redirect(`/motorcycles/rocket-3/${subFam}`)
  }
};

export default RocketAccessoryPage;
