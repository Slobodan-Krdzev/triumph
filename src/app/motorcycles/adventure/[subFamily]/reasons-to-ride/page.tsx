import Breadcrumbs from "@/app/components/Breadcrumbs/Breadcrumbs";
import ReasonsListin from "@/app/components/SubFamily/Reasons/ReasonsListin";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
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

    const bikesRes = await fetch(`${BIKES}?model=${subFam}`,{
      next: { revalidate: 3000 },
    });
    const bikesData = await bikesRes.json();

    return (
      <>
        <section
        className="relative"
          style={{
            backgroundImage: `url("${subFamily?.reasonsToDrive?.banner?.image ?? "/images/triumphLogo.png"}")`,
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
              <h1 className="md:text-3xl text-sm border-b-4 border-white font-semibold capitalize pb-2">
                {formulateSubFamilyTitleOnBanner(subFam)}
              </h1>
              <p className="md:text-5xl text-xl uppercase font-semibold tracking-tighter text-center">
                Детали
              </p>
            </div>
          </div>
        </section>
        <main className="px-4">
          {subFamily?.reasonsToDrive.infoText && (
            <div className="md:w-10/12 lg:w-6/12 m-auto md:py-16 py-8 text-center">
              <SectionTitleH2
                text={subFamily?.reasonsToDrive?.infoText?.title ?? "Зошто баш Triumph?"}
                color={"dark"}
              />
              <p className="font-normal md:text-lg text-md">
                {subFamily?.reasonsToDrive?.infoText?.desc ?? ""}
              </p>
            </div>
          )}

          {subFamily?.reasonsToDrive?.reasons && <ReasonsListin reasons={subFamily.reasonsToDrive.reasons ?? []} />}
          

          {bikesData.map((bike: any) => (
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike?.title ?? "Triumph"}
              desc={bike?.subFamilyPromo.desc ?? "Triumph"}
              ctaBtn={{
                text: "КОнфигурација",
                link: `/configure/bike/${bike.model}`,
              }}
              image={{
                src: bike?.gallery?.modelImage?.src ?? "/images/triumphLogo.png",
                alt: bike?.gallery?.modelImage?.alt ?? "Triumph",
              }}
              blackBtn={true}
            />
          ))}
        </main>
      </>
    );
  } catch (err) {
    return redirect(`/motorcycles/adventure/${subFam}`);
  }
};

export default SubFamReasonsToRidePage;
