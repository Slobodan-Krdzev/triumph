import HeroSection from "@/app/components/SubFamily/HeroSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";
import { redirect } from "next/navigation";

const Rocket3SubFamPage = async () => {
  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=rocket-3`, {
      next: { revalidate: 3000 },
    });
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];
    const bikesRes = await fetch(
      `${BIKES}?category=rocket-3&subFamilyCategory=rocket-3`,
      {
        next: { revalidate: 3000 },
      }
    );
    const bikes = await bikesRes.json();

    return (
      <>
        <HeroSection
          video={subFamily.gallery.subFamilyHeroVideo.src}
          mobileImage={subFamily.gallery.subFamilyHeroImageMobile?.src ?? "/"}
          model={"Rocket-3"}
          slogans={subFamily.heroSlogans}
        />

        <main className="bg-white">
          <TopSection
            title={subFamily.topSection.title}
            desc={subFamily.topSection.desc}
            subtitle={subFamily.topSection.subtitle}
            image={subFamily.gallery.subFamilyTopSectionImage.src}
            bgImage={subFamily.gallery.subFamilyTopSectionBGImage.src}
          />

          <section className="px-4 lg:px-20 xl:px-40">
            {bikes.map((bike: any) => (
              <BikeInfoTextImageBtn
                key={bike.id}
                title={bike.subFamilyPromo.title ?? bike.title}
                desc={bike.subFamilyPromo?.desc ?? ""}
                desc2={bike.price && `Цени од: €${bike.price}.00`}
                ctaBtn={{
                  text: "Детали",
                  link: `/motorcycles/rocket-3/rocket-3/${bike.model}`,
                }}
                image={{
                  src: `${bike.gallery.modelImage.src}`,
                  alt: `${bike.gallery.modelImage.alt}`,
                }}
                blackBtn={true}
                imageOnTheLeft={false}
                mobileTextRight={false}
              />
            ))}
          </section>
        </main>
      </>
    );
  } catch (err) {

    return redirect('/motorcycles/rocket-3')
  }
};

export default Rocket3SubFamPage;
