import MainBtn from "@/app/components/MainBtn";
import ReasonsListin from "@/app/components/SubFamily/Reasons/ReasonsListin";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const ReasonsRocketPage = async () => {
  try {
    const familyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=rocket-3`, {
      next: { revalidate: 3000 },
    });
    const familyData = await familyRes.json();
    const subFamily = familyData[0];

    const bikesRes = await fetch(`${BIKES}?model=${"rocket-3"}`, {
      next: { revalidate: 3000 },
    });
    const bikesData = await bikesRes.json();

    return (
      <>
        <SecondaryPagesHeroSection
          bannerImage={subFamily.reasonsToDrive.banner.image}
          subFamilyTitle={"rocket-3"}
          text={`Детали`}
        />

        <main className="px-4">
          <div className="md:w-10/12 lg:w-6/12 m-auto pt-8">
            <SectionTitleH2
              text={subFamily.reasonsToDrive.infoText.title}
              color={"dark"}
            />
            <p className="font-normal md:text-lg text-md">
              {subFamily.reasonsToDrive.infoText.desc}
            </p>
          </div>

          <ReasonsListin reasons={subFamily.reasonsToDrive.reasons} />

          <YouTubePromo
            video={ subFamily.subFamilyPageInfo.youtubeVideo}
          />

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

        <section className="text-center py-4 md:py-32"> 
            <h2 className="text-4xl md:text-6xl font-bold uppercase border-b-4 border-red-600 w-1/4 m-auto pb-4 mb-4">Rocket 3</h2>
            <p className="text-2xl md:text-4xl font-semibold uppercase mb-8">Раѓање на Нова Легенда</p>
            <MainBtn text={"Откријте Повеќе"} bgBlack={false} isLink={true} link={'/motorcycles/rocket-3/rocket-3/models'}/>
        </section>
          
        </main>
      </>
    );
  } catch (err) {
    return redirect(`/motorcycles/rocket-3`)

  }
};

export default ReasonsRocketPage;
