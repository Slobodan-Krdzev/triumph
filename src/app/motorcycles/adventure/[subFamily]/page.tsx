import MainBtn from "@/app/components/MainBtn";
import HeroSection from "@/app/components/SubFamily/HeroSection";
import NumbersSection from "@/app/components/SubFamily/NumbersSection";
import TopSection from "@/app/components/SubFamily/TopSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import BikeListingNoSlider from "@/app/components/familiySharedComponents/BikeListingNoSlider";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import { formulateSubFamilyTitleOnBanner } from "@/app/components/helpers/formulateSubFamilyTilteOnBanner";
import AudioSection from "@/app/components/roadstersUniqueComp/AudioSection";
import { BIKES, SUB_FAMILIES } from "@/app/constants/constants";

const SubFamilyPage = async ({ params }: any) => {
  const query = params.subFamily;

  try {
    const subFamilyRes = await fetch(`${SUB_FAMILIES}?subFamilyName=${query}`, {
      cache: "no-store",
    });
    const subFamilyData = await subFamilyRes.json();
    const subFamily = subFamilyData[0];

    const bikesRes = await fetch(`${BIKES}?subFamilyCategory=${query}`);
    const bikes = await bikesRes.json();

    const hasGrayCaro =
      subFamily.subFamilyPageInfo.hasOwnProperty("grayCarousell");

    const hasYoutubeVid =
      subFamily.subFamilyPageInfo.hasOwnProperty("youtubeVideo");

    const hasAudio = subFamily.subFamilyPageInfo.hasOwnProperty("audioSection");

    const hasTopSection =
      subFamily.subFamilyPageInfo.hasOwnProperty("topSection");

    return (
      <>
        <HeroSection
          video={subFamily.gallery.subFamilyHeroVideo.src}
          mobileImage={subFamily.gallery.subFamilyHeroImageMobile?.src ?? "/"}
          model={formulateSubFamilyTitleOnBanner(query)}
          slogans={subFamily.subFamilyPageInfo.heroSlogans ?? []}
        />

        <main className="bg-white">
          {subFamily.subFamilyName === "tiger-900" && (
            <section className="bg-secondary m-auto w-11/12 md:w-10/12 lg:w-7/12 py-4 md:py-8 lg:py-16 text-center">
              <h1 className="text-3xl md:text-6xl font-semibold uppercase mb-4 md:mb-8">
                Новата Τiger 900 Серија
              </h1>
              <SectionTitleH2
                text={"Дознајте Повеќе за Tiger 900!"}
                color={"dark"}
              />
              <div className="m-auto w-11/12 md:w-7/12 flex flex-col gap-4">
                <PageParagraph
                  text={
                    "Tiger 900 серијата е созададена за најтешките патеки и предизвикувачки авантури. Новата Tiger 900 серија е созададена комбинирајки перформанси, можности, комфорт и карактер."
                  }
                />
                <PageParagraph
                  text={
                    "Tiger 900 серијата повторно ги подигнува стандардите во својата категорија додавајки уште повеќе спецификации."
                  }
                />
              </div>
            </section>
          )}

          {subFamily.subFamilyName === "tiger-900" && (
            <section className="text-center">
              <SectionTitleH2 color="dark" text="Одберете го вашиот фаворит!" />
              <BikeListingNoSlider bikes={bikes} configureLink={true} />
            </section>
          )}

          {hasTopSection && (
            <TopSection
              title={subFamily.subFamilyPageInfo.topSection.title}
              desc={subFamily.subFamilyPageInfo.topSection.desc}
              subtitle={subFamily.subFamilyPageInfo.topSection.subtitle}
              image={subFamily.gallery.subFamilyTopSectionImage.src}
              bgImage={subFamily.gallery.subFamilyTopSectionBGImage.src}
            />
          )}

          {Boolean(
            subFamily.subFamilyName === "tiger-1200-rally" ||
              subFamily.subFamilyName === "tiger-1200-gt"
          ) && (
            <section
              className={`flex flex-col lg:flex-row justify-between items-center lg:gap-8 gap-4 py-4 md:py-8 lg:py-16`}
            >
              <div className={`basis-1/2 `}>
                <video muted loop>
                  <source
                    src="https://www.youtube.com/embed/1_NEKTuBbMQ"
                    type="video/mp4"
                  />
                </video>
              </div>
              <div className="basis-1/2">
                <div className={`lg:w-5/6 text-center md:text-left`}>
                  <SectionTitleH2
                    text={"НОВО - Tiger 1200 Upgrade"}
                    color={"dark"}
                  />
                  <PageParagraph
                    marginBot={true}
                    text={
                      "Новата Tiger 1200 серија доаѓа со уште поунапредена „Showa...Semi-Active“ суспензија која на возачот му понудува уште повеќе самодоверба и леснотија при модифицирање на суспензијата. Нова активна суспензија се грижи тоа како функционира суспензијата на моторите од оваа серија со посебно внимание при кочењето на моторот и наглите нагиби напред при сопирање."
                    }
                  />

                  <PageParagraph
                    text={
                      "Оваа карактеристика е лесно достапна со лесно држење од 1 секунда на „Home“ копчето на воланот"
                    }
                  />
                </div>
              </div>
            </section>
          )}

          {subFamily.subFamilyName !== "tiger-900" && (
            <section className="px-4 lg:px-20 xl:px-40">
              {bikes.map((bike: any) => (
                <BikeInfoTextImageBtn
                  key={bike.id}
                  title={bike.subFamilyPromo.title}
                  desc={bike.subFamilyPromo.desc}
                  ctaBtn={{
                    text: "Детали",
                    link: `/motorcycles/adventure/${query}/${bike.model}`,
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
          )}
        </main>

        {hasYoutubeVid && (
          <YouTubePromo video={subFamily.subFamilyPageInfo.youtubeVideo} />
        )}

        {hasGrayCaro && (
          <BottomCarousell items={subFamily.subFamilyPageInfo.grayCarousell} />
        )}

        {subFamily.subFamilyName === "tiger-900" && (
          <section className="gray-bg py-4 md:py-8 lg:py-16 text-center text-white">
            <p className="m-auto w-3/12 text-xl uppercase pb-4 mb-4 border-b-2 border-white">
              Tiger 900 - Лидер во Класата
            </p>
            <SectionTitleH2
              text="Започнете ја вашата авантура!"
              color="white"
            />
            <div className="flex justify-between items-center m-auto w-10/12 md:w-2/12">
              <MainBtn
                text={"Конфигурација"}
                bgBlack={false}
                isLink
                link="/configure/bikes/tiger-900"
              />
              <MainBtn
                text={"Контакт"}
                bgBlack={true}
                isLink
                link="/dealers/dealer-search"
              />
            </div>
          </section>
        )}

        <NumbersSection
          model={query}
          specNumbers={subFamily.subFamilyPageInfo.specNumbers}
        />

        {hasAudio && (
          <AudioSection
            audio={subFamily.subFamilyPageInfo.audioSection.audio}
            title={subFamily.subFamilyPageInfo.audioSection.title}
            desc={subFamily.subFamilyPageInfo.audioSection.desc}
            model={formulateSubFamilyTitleOnBanner(query)}
          />
        )}
      </>
    );
  } catch (error) {
    console.log(error);

    return "err";
  }
};

export default SubFamilyPage;
