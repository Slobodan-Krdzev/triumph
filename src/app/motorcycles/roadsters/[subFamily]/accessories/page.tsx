import AccessoriesListing from "@/app/components/SubFamily/ClassicAccesoryPage/AccessoriesListing";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";
import React from "react";

const AccessoriesPageRoadsters = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const subFamilyRes = await fetch(
      `${SUB_FAMILIES}?subFamilyName=${subFam}`,
      { cache: "no-store" }
    );
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${subFam}`);
    const bikesData = await bikesRes.json();

    return (
      <>
        <SecondaryPagesHeroSection
          bannerImage={subFamily.accessory.banner.image}
          subFamilyTitle={subFam.toUpperCase()}
          text={`Аксесоари`}
        />

        <main className="px-4 md:px-16 lg:px-40">
          {subFamily.accessory.infoText && (
            <div className="md:w-10/12 lg:w-6/12 m-auto pt-8">
              <SectionTitleH2
                text={subFamily.accessory.infoText?.title ?? ""}
                color={"dark"}
              />
              <p className="font-normal md:text-lg text-md">
                {subFamily.accessory.infoText?.desc ?? ""}
              </p>
            </div>
          )}

          <AccessoriesListing items={subFamily.accessory.accessoryTypes} />

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
    return redirect(`/motorcycles/roadsters/${subFam}`)
  }
};

export default AccessoriesPageRoadsters;
