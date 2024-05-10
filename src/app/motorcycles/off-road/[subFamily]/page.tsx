import HeroSection from "@/app/components/SubFamily/HeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const OffRoadSubFamilyPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${query}`, {
      next: { revalidate: 30 },
    });
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${query}`, {
      next: { revalidate: 30 },
    });
    const bikes = await bikesRes.json();

    return (
      <>
        <HeroSection
          video={subFamily?.gallery?.subFamilyHeroVideo?.src ?? ""}
          mobileImage={subFamily?.gallery?.subFamilyHeroImageMobile?.src ?? "/images/triumphLogo.png"}
          model={formulateSubFamilyTitleOnBanner(query) ?? "Triumph Motocross"}
          slogans={subFamily?.heroSlogans ?? ["Triumph", "Off-Road", "Motocross"]}
        />

        <main className="bg-black"></main>
        <section className="px-4 lg:px-20 xl:px-40">
          {bikes.map((bike: any) => (
            <BikeInfoTextImageBtn
              key={bike.id}
              title={bike?.subFamilyPromo?.title ?? "Triumph Motocross"}
              desc={bike?.subFamilyPromo?.desc ?? ""}
              desc2={bike?.price && `Цени од: €${bike?.price}.00`}
              ctaBtn={{
                text: "Детали",
                link: `/motorcycles/off-road/${query}/${bike?.model}`,
              }}
              image={{
                src: `${bike?.gallery?.modelImage?.src ?? "/images/triumphLogo.png"}`,
                alt: `${bike?.gallery?.modelImage?.alt ?? "Triumph Motocross"}`,
              }}
              blackBtn={true}
              imageOnTheLeft={false}
              mobileTextRight={false}
            />
          ))}
        </section>

        <section className="bg-white py-8 text-center px-4">
          <SectionTitleH2 text={"Новата TF 205-X Off Road Серија"} color={"dark"} />
          <BikeListingNoSlider bikes={bikes ?? []} configureLink={true} />
        </section>
      </>
    );
  } catch (error) {
    console.log(error);

    return redirect(`/motorcycles/off-road`)
  }
};

export default OffRoadSubFamilyPage;
