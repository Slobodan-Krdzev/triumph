import MainBtn from "@/app/components/MainBtn";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import TitleWithLineThrough from "@/app/components/TitleWithLineThrough";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import Image from "next/image";
import React from "react";

const WhyBuyGenuinePage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/accessories/wbgHeroBanner.avif"}
        text={`ОРИГИНАЛНИ tRIUMPH АКСЕСОАРИ`}
      />

      <main className="bg-white">
        <YouTubePromo video={"https://www.youtube.com/embed/BtmBOPKDnR4"} />

        <TitleWithLineThrough text="Дизајн" />

        <section className="py-4 md:py-8 lg:py-16 m-auto w-11/12 md:w-8/12">
          <TextAndImageFlexSection
            title="изработени од возачи, за возачи"
            textMain={
              "Triumph моторциклите и аксесоари се изработени од експертски тимови кои се фокусираат да создадат што е можно поквалитетен производ се од првите скица па до финалните фази. Нашите инжињери и дизајнери се исто така возачи - фанатици во оваа област"
            }
            image={{
              src: "/images/accessories/wbgPromo1.avif",
              alt: "Accessories",
            }}
            imageLeft
          />
          <TextAndImageFlexSection
            title="Конструкција"
            textMain={
              "Целосната фаза на изработка на еден мотор може да трае од две до три години. Напоредно во истото времетраење се работи и на аксесоарите кои се тука за да ги придружуваат моторите. Ова значи дека секое парче аксесоар е направено перфектно да се вклопува во линијата, дизајнот и стилот на моторот."
            }
            image={{
              src: "/images/accessories/wbgPromo2.avif",
              alt: "Accessories",
            }}
          />
          <TextAndImageFlexSection
            title="Оригинали"
            textMain={
              "Знаејки го фактот дека секое парче дополнителен аксесоар произлегува од истата куќа од каде произлегува и моторот ние сме уверени дека вие ќе го пронајдете вистинското парче кое ќе донесе уште малку повеќе стил и елеганција."
            }
            image={{
              src: "/images/accessories/wbgPromo3.avif",
              alt: "Accessories",
            }}
            imageLeft
          />
        </section>

        <TitleWithLineThrough text="Дизајн" />
        <section className="py-4 md:py-8 lg:py-16 m-auto w-11/12 md:w-8/12">
          <p className="m-auto w-9/12 md:8/12">
            Кај нас во Triumph пред секој мотор да излезе на пазарот мора истиот
            да помине одредени дизајнерски скици и ригорозни тестови. Но дали
            сте знаеле дека истиот процес го поминуваат и сите оригинални
            Triumph аксесоари? Ова го прави секое парче Triumph аксесоар со
            истиот квалитет како и секој мотор.
          </p>

          <Image
            className="my-4 md:my-8 shadow-xl"
            src={"/images/accessories/wbgBottomimage.avif"}
            alt="Triumph Service"
            width={1410}
            height={793}
          />
        </section>

        <TitleWithLineThrough text="Вашите Аксесоари" />
        <section className="py-4 md:py-8 lg:py-16 m-auto w-11/12 md:w-8/12">
          <TextAndImageFlexSection
            title="Гаранција"
            textMain={
              "Секое ново оригинално парче Triumph аксесоар кое е купено и вградено во официјален Triumph снабдувач добива 24 месечна гаранција без разлика на поминати километри. Ова значи дека вие добивате оригинален аксесоар со ист дизајн и квалитет како и моторот кој го возите кој исто така добива 2 годишна гаранција без разлика на поминати километри."
            }
            image={{
              src: "/images/accessories/wbgBotPromo1.avif",
              alt: "Accessories",
            }}
            imageLeft
          />
          <TextAndImageFlexSection
            title="Додајте ваш белег на вашиот мотор"
            textMain={
              "Само вие можете да го кренете вашиот мотор на едно повисоко ниво. Зошто да не го конфигурирате по ваш стил, без разлика дали сте „Off-Road“ ентузијаст или зависник од големи брзини! Бидете сигурни дека што и да ви е потребно Triumph веќе го има."
            }
            image={{
              src: "/images/accessories/wbgPromo2.avif",
              alt: "Accessories",
            }}
          />
        </section>
        <section className="text-center m-auto w-11/12 md:w-6/12 py-4 md:py-8 lg:py-16">
          <h2 className="text-4xl md:text-6xl font-bold uppercase border-b-4 border-red-600 w-8/12 m-auto pb-4 mb-4">
            Контакт
          </h2>
          <p className="text-xl md:text-1xl font-semibold uppercase mb-8 m-auto w-11/12 md:w-6/12 text-center">
            Контактирајте не и дознајте повеќе.
          </p>
          <MainBtn
            text={"Контакт"}
            bgBlack={false}
            isLink={true}
            link={`/dealer`}
          />
        </section>
      </main>
    </>
  );
};

export default WhyBuyGenuinePage;
