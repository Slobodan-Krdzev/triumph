import HeroSection from "@/app/components/SubFamily/HeroSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
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
          {subFamily.topSection && (
            <TopSection
              title={subFamily.topSection.title}
              desc={subFamily.topSection.desc}
              subtitle={subFamily.topSection.subtitle}
              image={subFamily.gallery.subFamilyTopSectionImage.src}
              bgImage={subFamily.gallery.subFamilyTopSectionBGImage.src}
            />
          )}

          {subFamily.subFamilyName === "rocket-3" && (
            <section className="py-4 md:py-8 lg:py-16 text-center w-11/12 lg:w-7/12 m-auto">
              <h1 className="text-4xl lg:text-6xl font-semibold uppercase mb-4 md:mb-8">
                Перфектна Бура...Perfect Storm
              </h1>
              <PageParagraph
                text={
                  "Дополнителен карактер и перформанси кои рушат рекорди - Врвен Мускулест Роадстер."
                }
              />
              <PageParagraph
                text={
                  "Мускулесто присуство со извонреден и неспоредлив стил комбинирано со перформанси од епски размери произведени од првиот продукциски мотор со најголема зафатнина. "
                }
              />
            </section>
          )}

          {subFamily.youtubeVideo && (
            <video
              controls
              autoPlay
              loop
              muted
              width={"70%"}
              style={{
                margin: "0 auto",
                padding: "2rem",
              }}
            >
              <source src={subFamily.youtubeVideo} type="video/webm" />
            </video>
          )}

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

          {subFamily.grayCarousell && <BottomCarousell items={subFamily.grayCarousell} />}
        </main>
      </>
    );
  } catch (err) {
    return redirect("/motorcycles/rocket-3");
  }
};

export default Rocket3SubFamPage;
