import MainBtn from "@/app/components/MainBtn";
import ReasonsListin from "@/app/components/SubFamily/Reasons/ReasonsListin";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const ReasonsRocketPage = async () => {
  try {
    const familyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=rocket-3`, {
      next: { revalidate: 30 },
    });
    const familyData = await familyRes.json();
    const subFamily = familyData[0];

    const bikesRes = await fetch(`${BIKES}?model=${"rocket-3"}`, {
      next: { revalidate: 30 },
    });
    const bikesData = await bikesRes.json();

    return (
      <>
        <SecondaryPagesHeroSection
          bannerImage={subFamily?.reasonsToDrive?.banner?.image ?? "/images/triumphLogo.png"}
          subFamilyTitle={"rocket-3"}
          text={`Детали`}
        />

        <main className="px-4">
          <div className="md:w-10/12 lg:w-5/12 m-auto pt-8">
            <SectionTitleH2
              text={subFamily?.reasonsToDrive?.infoText?.title ?? "Rocket-3"}
              color={"dark"}
            />
            <p className="font-normal md:text-lg text-md">
              {subFamily?.reasonsToDrive?.infoText?.desc ?? "Triumph Rocket-3"}
            </p>
          </div>

          {subFamily?.reasonsToDrive?.reasons && (
            <ReasonsListin reasons={subFamily?.reasonsToDrive?.reasons ?? []} />
          )}

          {bikesData?.map((bike: any) => (
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike?.title ?? "Triumph Rocket-3"}
              desc={bike?.subFamilyPromo?.desc ?? "Triumph Rocket-3"}
              ctaBtn={{
                text: "КОнфигурација",
                link: `/configure/bike/${bike.model}`,
              }}
              image={{
                src: bike?.gallery?.modelImage?.src ?? "/images/triumphLogo.png",
                alt: bike?.gallery?.modelImage?.alt ?? "/images/triumphLogo.png",
              }}
              blackBtn={true}
            />
          ))}

          <section className="text-center py-4 md:py-32">
            <h2 className="text-4xl md:text-6xl font-bold uppercase border-b-4 border-red-600 w-1/4 m-auto pb-4 mb-4">
              Rocket 3
            </h2>
            <p className="text-2xl md:text-4xl font-semibold uppercase mb-8">
              Раѓање на Нова Легенда
            </p>
            <MainBtn
              text={"Откријте Повеќе"}
              bgBlack={false}
              isLink={true}
              link={"/motorcycles/rocket-3/rocket-3/models"}
            />
          </section>
        </main>
      </>
    );
  } catch (err) {
    return redirect(`/motorcycles/rocket-3`);
  }
};

export default ReasonsRocketPage;
