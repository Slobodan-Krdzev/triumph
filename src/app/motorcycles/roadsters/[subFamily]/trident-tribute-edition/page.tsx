import BanerAndCTASection from "@/app/components/BanerAndCTASection";
import BottomCarousell from "@/app/components/classicsPageComp/BottomCarousell";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import LatestModelsCarousellSection from "@/app/components/homePageComponents/LatestModelsCarousellSection";
import HeroSection from "@/app/components/SubFamily/HeroSection";
import Image from "next/image";
import React from "react";

const grayCaroItems = [
  {
    id: "carouselItem1",
    title: "Тркачки Графици",
    desc: "Инспирирани од три-цилиндричниот мотор на Slippery Sam, иконскиот бело, сино - црвен дизајн комбинира модерен дизајн со оригинална Triumph историја.",
    image: "/images/roadsters/tridentTribute/grayCaroItem1.avif",
  },
  {
    id: "carouselItem2",
    title: "Тркачки Број",
    desc: "Динамичниот тркачки број - '67', го слави успехот на пет-кратниот Isle of Mann TT Production победник - Slippery Sam.",
    image: "/images/roadsters/tridentTribute/grayCaroItem2.avif",
  },
  {
    id: "carouselItem3",
    title: "Финални Детали",
    desc: "Предната маска како и заедниот крај се обоени во исти бои и додаваат уште повисоко ниво на стил на оваа специјална серија.",
    image: "/images/roadsters/tridentTribute/grayCaroItem3.avif",
  },
  {
    id: "carouselItem4",
    title: "Дизајн",
    desc: "Оваа Trident Tribute серија го носи истиот стил и присуство на стандардниот Trident 660 кој воедно е лидер во оваа класа со минималистички линии, препознатлив дизајн и одлични финиши.",
    image: "/images/roadsters/tridentTribute/grayCaroItem4.avif",
  },
];

const latestCaroItems = [
  {
    title: "Најдоброто од сите светови",
    desc: "Три-Цилиндричниот 660cc мотор е перфектен баланс помеѓу вртежен момент при ниски револуции на моторот и возбудлива моќност при високи вртежи на моторот со цел да се изработи една оптимизација помеѓу перформанси и респонзивност.",
    image: "/images/roadsters/tridentTribute/latestCaro1.avif",
  },
  {
    title: "Одлично Управување",
    desc: "Одличната шасија и елементи од високи спецификации како премиум Showa суспензијата и Nissin сопирачките нудат одлична агилност и уште подобра контрола врз моторот.",
    image: "/images/roadsters/tridentTribute/latestCaro2.avif",
  },
  {
    title: "TFT Екран",
    desc: "Новиот Triumph TFT екран одлично ги испорачува сите потребни информации и одлично се справува со сите интеракции на возачот.",
    image: "/images/roadsters/tridentTribute/latestCaro3.avif",
  },
  {
    title: "Високо Ниво на Технологија",
    desc: "За максимална сигурност и уживање на возачот, Trident Triple Tribute серијата насебе носи технологија од највисоко ниво како два мода на работа (Road & Rain) како и систем за пролизгување кој се оптимизира според вашите потреби. Како стандард го добидаве и Triumph Shift Assist квачилото за брзо и лесно како и промена на степенеот на пренос без употреба на рачката на квачолото.",
    image: "/images/roadsters/tridentTribute/latestCaro4.avif",
  },
  {
    title: "LED Осветлување",
    desc: "За максимална сигурност и перформанси целосната расвета на Trident серијата почнувајки од предното главно светло па се до задното и трепкачите се LED светла.",
    image: "/images/roadsters/tridentTribute/latestCaro5.avif",
  },
  {
    title: "Достапност",
    desc: "Со тенок струк, перфектно позиционирани стапки за нозе, ниско седиште од 805 милиметри, подесувачки рачки за кочење и асистирачко квачило, Triumph испорачува и нуди комфортно возење и самодоверба - секој ден.",
    image: "/images/roadsters/tridentTribute/latestCaro6.avif",
  },
  {
    title: "Компатибилен со А2 возачка дозвола",
    desc: "За да овој Triumph мотор биде уште подостапен, додатен А2 сет може да биде вграден во моторот. Истиот ја намалува јачината на моторот со што го прави моторот компатибилен со А2 возачка дозвола. Истиот сет може да биде одстранет во било кој Triumph сервис и тоа за само неколку минути.",
    image: "/images/roadsters/tridentTribute/latestCaro7.avif",
  },
  {
    title: "Аксесоари",
    desc: "Персонализирајте го вашиот Triumph Trident 660 Triple Tribute Edition со палета од оргинални Triumph аксесоари.",
    image: "/images/roadsters/tridentTribute/latestCaro8.avif",
  },
  {
    title: "16,000км Сервисен Интервал",
    desc: "Со одлични цена и со неверојатен сервисен интервал од 16,000 километри, Trident 660 серијата е одлична вредност да се има во својоата гаража.",
    image: "/images/roadsters/tridentTribute/latestCaro9.avif",
  },
];

const TridentTributePage = () => {
  return (
    <>
      <HeroSection
        video={"/images/roadsters/tridentTribute/tridentTributeHeroVideo.webm"}
        mobileImage={
          "/images/roadsters/tridentTribute/tridentTributeHeroMobile.avif"
        }
        model={"Trident Tribute Edition"}
        slogans={["Trident 660", "Tribute", "Edition"]}
      />
      <main>
        <section className="flex flex-col justify-center m-auto w-11/12 md:w-7/12 items-center text-center gap-4 pb-4 md:pb-8 lg:pb-16">
          <Image
            src={"/images/roadsters/tridentTribute/tributeLogo.png"}
            alt="Trident Tribute Logo"
            width={600}
            height={300}
          />

          <PageParagraph text="Екслузивно во времетраење од една година, новиот Trident 660 Tribute Edition е тука со цел да се прослави извонредното тркачкото минато на Triumph." />
          <PageParagraph text='Моторот насебе носи динамичен графички дизајн, кој оддава почит до легендарниот пет-кратен (1971 - 1975) Isle Of Man победник - "Slippery Sam".' />
          <PageParagraph text="За уште повеќе да се подобри квалитетон, перформансите и управливоста на Trident 660, новиот Trident 660 Tribute Edition на себе го носи најновото Triumph Shift Assist квачило кој уште повеќе додава тркачко искуство на и така тркачко-инспирираниот роадстер со средна големина на моторот." />
        </section>

        <BanerAndCTASection
          text={"Стартувајте ја вашата авантура"}
          image={
            "/images/roadsters/tridentTribute/tridentTributeMidBanner.avif"
          }
          link={"/configure"}
          btnText={"Конфигурирај"}
        />
        <section className="py-4 md:py-8 lg:py-16">
          <BanerAndCTASection
            text={"Информации"}
            image={"/images/roadsters/tridentTribute/midBanner.avif"}
            link={"/dealer"}
            btnText={"Контакт"}
          />
        </section>

        <div className="text-center py-4 md:py-8 lg:py-16">
          <SectionTitleH2 text="Планирање" color="dark" />
          <PageParagraph text="Новиот Trident 660 Triple Tribute Edition е модерна еволуција на тркачкото наследство на Triumph." />
        </div>

        <BottomCarousell items={grayCaroItems} />

        <div className="text-center py-4 md:py-8 lg:py-16 w-11/12 md:w-8/12 lg:w-5/12 m-auto">
          <SectionTitleH2 text="Опрема" color="dark" />
          <PageParagraph text="Ексклузивно за Triple Tribute серијата, како стандардна опрема добивате Triumph Shift Assist квачило како и исти графици и бои насекаде низ каросеријата." />
        </div>

        <div className="m-auto w-11/12 md:w-9/12 lg:w-8/12 ">
          <TextAndImageFlexSection
            title="Triumph Shift-Assist"
            textMain={
              "За уште повеќе да се подобри нивото на перформанси, Trident 660 Triple Tribute серијата е опремена со најновото Triumph Shift Assist квачило кое овозможува промена на степенот на преност без употреба на рачката на квачилото. Дизајнирано за да го олесни возењето низ град и да го направи возењето на отворен пат подинамично, овозможува брзи и лесни промени на степенот во било кој момент."
            }
            image={{
              src: "/images/roadsters/tridentTribute/promo.avif",
              alt: "Trident 660 Triple Tribute Edition",
            }}
          />
        </div>

        <section className="m-auto w-11/12 md:w-8/12 lg:w-6/12 text-center pt-4 md:pt-8 lg:pt-16">
          <SectionTitleH2 text="Три Цилиндричен Мотор" color="dark" />
          <PageParagraph text="Произведен мулти-класната три-цилиндрична спортко перформансна платформа на Triumph." />
        </section>

        <LatestModelsCarousellSection
          items={latestCaroItems}
          showTitle={false}
        />
      </main>
    </>
  );
};

export default TridentTributePage;
