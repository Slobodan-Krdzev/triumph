import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import React from "react";

const What3WordsPage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/owners/what3wordsHero.avif"}
        text={"What3Words"}
      />
      <main>
        <section className="m-auto w-11/12 md:w-6/12">
          <PageParagraph
            text={
              "Запознајте се со Triumph what3words апликацијата. Апликацијата која ја мапираше целата земијина повржина и ја подели на површини од три квадратни метри и истите ги преименува со три збора. Благодарение на ова можете да внесете само три збора во апликацијата за да дефинирате одредена дестинација или локација."
            }
          />
        </section>

        <YouTubePromo video={"https://www.youtube.com/embed/7H7UYeBfV2A"} />

        <div className="m-auto w-11/12 md:w-6/12 py-4 md:py-8 lg:py-16 text-center">
          <SectionTitleH2 text={"Што е What3Words"} color={"dark"} />
          <PageParagraph
            text={
              "What3Words апликацијата е лесен и прецизен начин за распознавање на една локација. Апликацијата ја подели земијната топка на шема составен од 3 метарски кавдрати и секој од тие квадрати беше именуван со уникатни три збора. Тоа значи дека секоја точка на земјината површина може да биде пронајдена со само три збора."
            }
          />
        </div>

        <div className="m-auto w-11/12 md:w-6/12 py-4 md:py-8 lg:py-16 text-center">
          <SectionTitleH2
            text={"Како да искористам What3Words адреса?"}
            color={"dark"}
          />
          <PageParagraph
            text={
              "Кога додавате или барате адреса, наместо да ја внесете точната адреса, вие ги внесувате тие уникатни 3 збора за таа локација. На пример: доколку внесете rope.before.dive апликацијата ве навигира до квадратчето со тоа име."
            }
          />
        </div>

        <section className="flex flex-col md:flex-row justify-between gap-10 items-center m-auto w-11/12 md:w-7/12">
          <div className="basis-full md:basis-4/12">
            <SectionTitleH2 text="Имате Проблеми?" color="dark" />
            <PageParagraph text="What3Words е одлична за пронаоѓање на тешко достапни и не-мапирани локации. Во случаи на итност преку самата локација можете веднаш и прецизно да бидете лоцирани." />
          </div>

          <video
            autoPlay
            loop
            muted
            height={538}
            width={955}
            className="basis-full md:basis-8/12"
          >
            <source src="/images/owners/w3wPromoVid.webm" />
          </video>
        </section>

        <section>
          <TextAndImageFlexSection
            title="Зошто е важно да поседувате What3Words?"
            textMain={
              "Triumph е првиот бренд со светот кој користи What3Words."
            }
            image={{
              src: "/images/owners/w3wordsPromo1.avif",
              alt: "W3Words",
            }}
            imageLeft
          />

          <TextAndImageFlexSection
            title="Како да пронајдете What3Words адреса?"
            textMain={""}
            image={{
              src: "/images/owners/w3wordsPromo1.avif",
              alt: "W3Words",
            }}
          />
        </section>
      </main>
    </>
  );
};

export default What3WordsPage;
