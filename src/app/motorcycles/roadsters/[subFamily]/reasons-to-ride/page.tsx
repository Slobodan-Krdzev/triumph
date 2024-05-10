import ReasonsListin from "@/app/components/SubFamily/Reasons/ReasonsListin";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const ReasonsRoadstersPage = async ({ params }: any) => {
  const subFam = params.subFamily;

  try {
    const subFamilyRes = await fetch(
      `${SUB_FAMILIES}?subFamilyName=${subFam}`,
      {
        next: { revalidate: 3000 },
      }
    );
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?model=${subFam}`, {
      next: { revalidate: 3000 },
    });
    const bikesData = await bikesRes.json();

    return (
      <>
        <section
          style={{
            backgroundImage: `url("${subFamily?.reasonsToDrive?.banner?.image ?? "/images/triumphLogo.png"}")`,
            backgroundSize: "cover",
            backgroundPosition: "center",
            backgroundRepeat: "no-repeat",
            height: "70vh",
            overflow: "hidden",
          }}
        >
          <div className="flex justify-center items-center w-full h-full overlay">
            <div className="w-6/12 m-auto flex flex-col justify-center items-center text-white gap-6">
              <h1 className="md:text-xl text-sm border-b-4 border-white capitalize pb-2">
                {formulateSubFamilyTitleOnBanner(subFam.toUpperCase()) ?? "Triumph Roadster"}
              </h1>
              <p className="md:text-5xl text-xl uppercase font-semibold tracking-tighter text-center">
                детали
              </p>
            </div>
          </div>
        </section>
        <main className="px-4">
          {subFamily?.reasonsToDrive?.infoText && (
            <div className="md:w-10/12 lg:w-6/12 m-auto pt-8">
              {subFamily?.reasonsToDrive?.infoText?.title && (
                <SectionTitleH2
                  text={subFamily?.reasonsToDrive?.infoTex?.title ?? "Triumph"}
                  color={"dark"}
                />
              )}

              {subFamily?.reasonsToDrive?.infoText?.desc && (
                <p className="font-normal md:text-lg text-md">
                  {subFamily?.reasonsToDrive?.infoText?.desc ?? "Triumph Roadsters"}
                </p>
              )}
            </div>
          )}

          <ReasonsListin reasons={subFamily?.reasonsToDrive?.reasons ?? []} />

          {bikesData?.map((bike: any) => (
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike?.title ?? "Triumph"}
              desc={bike?.subFamilyPromo?.desc ?? ""}
              ctaBtn={{
                text: "Кoнфигурација",
                link: `/configure/bike/${bike.model}`,
              }}
              image={{
<<<<<<< HEAD
                src: bike.gallery?.modelImage?.src ?? "",
                alt: bike.gallery?.modelImage?.alt ?? "",
=======
                src: bike?.gallery?.modelImage?.src ?? "/images/triumphLogo.png",
                alt: bike?.gallery?.modelImage?.alt ?? "Triumph",
>>>>>>> 07b969689c18fbab99e2ccde41273fdafd736d47
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

export default ReasonsRoadstersPage;
