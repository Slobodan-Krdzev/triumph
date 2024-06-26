import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import ReasonsListin from "@/app/components/SubFamily/Reasons/ReasonsListin";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const SubFamReasonsToRidePage = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${subFam}`, {
      next: { revalidate: 3000 },
    });
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?model=${subFam}`, {
      next: { revalidate: 3000 },
    });
    const bikesData = await bikesRes.json();


    return (
      <>
        <section
        className="relative"
          style={{
            backgroundImage: `url("${subFamily?.reasonsToDrive?.banner?.image ?? "/images/triumphLogo.png"} ")`,
            backgroundSize: "cover",
            backgroundPosition: "center",
            backgroundRepeat: "no-repeat",
            height: "60vh",
            overflow: "hidden",
          }}
        >
          <Breadcrumbs />

          <div className="flex justify-center items-center w-full h-full overlay">
            <div className="w-6/12 m-auto flex flex-col justify-center items-center text-white gap-6">
              <h1 className="md:text-xl lg:text-2xl text-sm border-b-4 border-white capitalize pb-2">
                {formulateSubFamilyTitleOnBanner(subFam) ?? "Triumph Sport"}
              </h1>
              <p className="md:text-5xl text-xl uppercase font-semibold tracking-tighter text-center">
                Детали
              </p>
            </div>
          </div>
        </section>
        <main className="px-4 bg-black">
          <div className="md:w-10/12 lg:w-5/12 m-auto md:py-16 py-8">
            {subFamily?.reasonsToDrive?.infoText?.title && (
              <SectionTitleH2
                text={
                  subFamily?.reasonsToDrive?.infoText?.title ??
                  formulateSubFamilyTitleOnBanner(subFam)
                }
                color={"white"}
              />
            )}

            {subFamily?.reasonsToDrive?.infoText?.desc && (
              <p className="font-normal text-center md:text-lg text-md text-white">
                {subFamily?.reasonsToDrive?.infoText?.desc ?? ""}
              </p>
            )}
          </div>

          {subFamily?.reasonsToDrive?.reasons && (
            <ReasonsListin
              reasons={subFamily?.reasonsToDrive?.reasons ?? []}
              textWhite
            />
          )}
        </main>
        <section className="m-auto w-11/12 md:w-10/12 lg:w-8/12 text-center">
            <SectionTitleH2 text={formulateSubFamilyTitleOnBanner(subFam)} color={"dark"}/>
            <BikeListingNoSlider bikes={bikesData ?? []} configureLink={true} />
        </section>
      </>
    );
  } catch (err) {

    return redirect(`/motorcycles/sport/${subFam}`)
  }
};

export default SubFamReasonsToRidePage;
