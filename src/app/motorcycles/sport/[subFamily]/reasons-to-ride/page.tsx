import ReasonsListin from "@/app/components/SubFamily/Reasons/ReasonsListin";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { BIKES, FAMILIES } from "@/app/constants/constants";
import React from "react";

const SubFamReasonsToRidePage = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const familyRes = await fetch(`${FAMILIES}?type=sport`, {
      cache: "no-store",
    });
    const familyData = await familyRes.json();
    const subFamily = familyData[0].subFamilies[subFam];

    const bikesRes = await fetch(`${BIKES}?model=${subFam}`);
    const bikesData = await bikesRes.json();


    return (
      <>
        <section
          style={{
            backgroundImage: `url("${subFamily.reasonsToDrive.banner.image}")`,
            backgroundSize: "cover",
            backgroundPosition: "center",
            backgroundRepeat: "no-repeat",
            height: "60vh",
            overflow: "hidden",
          }}
        >
          <div className="flex justify-center items-center w-full h-full overlay">
            <div className="w-6/12 m-auto flex flex-col justify-center items-center text-white gap-6">
              <h1 className="md:text-xl lg:text-2xl text-sm border-b-4 border-white capitalize pb-2">
                {formulateSubFamilyTitleOnBanner(subFam)}
              </h1>
              <p className="md:text-5xl text-xl uppercase font-semibold tracking-tighter text-center">
                Детали
              </p>
            </div>
          </div>
        </section>
        <main className="px-4 bg-black">
          <div className="md:w-10/12 lg:w-5/12 m-auto md:py-16 py-8">
            {subFamily.reasonsToDrive.infoText.title && (
              <SectionTitleH2
                text={
                  subFamily.reasonsToDrive.infoText.title ??
                  formulateSubFamilyTitleOnBanner(subFam)
                }
                color={"white"}
              />
            )}

            {subFamily.reasonsToDrive.infoText.desc && (
              <p className="font-normal text-center md:text-lg text-md text-white">
                {subFamily.reasonsToDrive.infoText.desc}
              </p>
            )}
          </div>

          {subFamily.reasonsToDrive.reasons && (
            <ReasonsListin
              reasons={subFamily.reasonsToDrive.reasons ?? []}
              textWhite
            />
          )}
        </main>
        <section className="m-auto w-11/12 md:w-10/12 lg:w-8/12 text-center">
            <SectionTitleH2 text={formulateSubFamilyTitleOnBanner(subFam)} color={"dark"}/>
            <BikeListingNoSlider bikes={bikesData} configureLink={true} />
        </section>
      </>
    );
  } catch (err) {
    console.log(err);

    return;
  }
};

export default SubFamReasonsToRidePage;
