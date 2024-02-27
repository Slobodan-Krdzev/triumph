import ReasonsListin from "@/app/components/SubFamily/Reasons/ReasonsListin";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { BIKES, FAMILIES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";
import React from "react";

const ClassicsReasonsToRide = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const subFamilyRes = await fetch(
      `${SUB_FAMILIES}?subFamilyName=${subFam}`,
      {
        cache: "no-store",
      }
    );
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?model=${subFam}`);
    const bikesData = await bikesRes.json();

    return (
      <>
        <SecondaryPagesHeroSection
          bannerImage={subFamily.reasonsToDrive.banner.image ?? ""}
          subFamilyTitle={subFam}
          text={`Детали`}
        />

        <main className="px-4">
          <div className="md:w-10/12 lg:w-6/12 m-auto pt-8">
            <SectionTitleH2
              text={subFamily.reasonsToDrive.infoText.title ?? ""}
              color={"dark"}
            />
            <p className="font-normal md:text-lg text-md">
              {subFamily.reasonsToDrive.infoText.desc ?? ""}
            </p>
          </div>

          {subFamily.reasonsToDrive.reasons && (
            <ReasonsListin reasons={subFamily.reasonsToDrive.reasons} />
          )}

          {bikesData.map((bike: any) => (
            
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike.title ?? bike.title}
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

    return redirect(`/motorcycles/classics/${subFam}`);
  }
};

export default ClassicsReasonsToRide;
