import MainBtn from "@/app/components/MainBtn";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import TitleWithLineThrough from "@/app/components/TitleWithLineThrough";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import React from "react";

const GenuineLugagePage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/accessories/genuineLuggageBanner.avif"}
        text={`Оригинален Triumph Багаж`}
        subText="Однесете го ваште возачко искуство на уште повисоко ниво со широката палета на оригинален Triumph багаж специјално дизајниран за вашиот мотор."
      />

      <main className="bg-white">
        <section className="m-auto w-11/12 md:w-10/12">
          <BikeInfoTextImageBtn
            title={"Возете подалеку"}
            desc={
              "Triumph багажот и аксесоарите се дизајнирани од возачи за возачи. Нашите врвни инжињери обезбедуваат перфектно вклопување на багажот и вашиот мотор, сигурност и компетабилност. Покрај багажот, нашиот веб сајт ја нуди целата палета на аксесоари на располагање. Па така одберете го вашето највкусно парче и нарачајте го преку најблискиот Triumph центар."
            }
            ctaBtn={{
              text: "Контакт",
              link: `/dealer`,
            }}
            image={{
              src: `/images/accessories/promo1Banner.avif`,
              alt: `Triumph Accessories`,
            }}
            blackBtn={false}
            imageOnTheLeft={true}
          />
          <TextAndImageFlexSection
            title={"Зошто да вградите оригинален багаж?"}
            textMain={
              "Целосната палета на Triumph багаж како и сите други аксесоари се ирабатени од нашите експерти на врвно ниво и се претходно тестирани."
            }
            textSecondary={
              "За време на процесот на тестирање, еден аксесоар проаѓа низ специјални тестови кои ја тестираат издржливоста и стабилност на истиот. Како резултат на сета оваа макотрпна работа прозилезе оригиналниот Triumph багаж."
            }
            image={{
              src: "/images/accessories/promo2Banner.avif",
              alt: "triumph Accesories",
            }}
          />
          <BikeInfoTextImageBtn
            title={"Интегриран Страничен Багаж"}
            desc={
              "Со капацитет од 27.6 литри, овие куфери се изработени од кожа и восочно/памучен материјал и овозможуваат тотална водоотпорност. На истите се монтирани и специјални држачи за перфектно вклопување со моторот."
            }
            ctaBtn={{
              text: "Контакт",
              link: `/dealer`,
            }}
            image={{
              src: `/images/accessories/promo3Banner.avif`,
              alt: `Triumph Accessories`,
            }}
            blackBtn={false}
            imageOnTheLeft={true}
          />

          <BikeInfoTextImageBtn
            title={"Стил"}
            desc={
              "Кога од исклучителна важност ни е стилот и изгледот, тогаш нашите дополнителни аксесоари се тука за да дополнат со уште малку стил и убавина."
            }
            ctaBtn={{
              text: "Конфигурирај",
              link: `/configure`,
            }}
            image={{
              src: `/images/accessories/promo5Banner.avif`,
              alt: `Triumph Accessories`,
            }}
            blackBtn={false}
            imageOnTheLeft={false}
          />
        </section>

            <TitleWithLineThrough text="Triumph Препрачува"/>

        <section>
          <BikeInfoTextImageBtn
            title={"Централен Куфер"}
            desc={
              "Издржлив водоотпорен авантуристички куфер со капацитет од 35литри доволно за чувањае на една кацига. Овој куфер има свое задно светло кое се поврзува со моторот за уште повеќе сигурност и е достапен кај Tiger 1200 и Tiger 900 серијата"
            }
            ctaBtn={{
              text: "Контакт",
              link: `/dealer`,
            }}
            image={{
              src: `/images/accessories/promo4Banner.avif`,
              alt: `Triumph Accessories`,
            }}
            blackBtn={true}
            imageOnTheLeft={true}
          />

          <BikeInfoTextImageBtn
            title={
              "Погледни: Систем за Брзо Одстранување - Quick Removal System"
            }
            desc={
              "Овој систем е дизајниран од нашите најдобри инжињери и се монтира на отворот на резервоарот. Овозможува за брзо и лесно одстранување на монтираниот аксесоар со подигање и држење на рачката која го ослободува аксесоарот од лежиштето. Лежиштето никако не попречува во моментот кога ви е потребно да го одстраните капачето на резервоарот."
            }
            ctaBtn={{
              text: "Контакт",
              link: `/dealer`,
            }}
            image={{
              src: `/images/accessories/promo6Banner.avif`,
              alt: `Triumph Accessories`,
            }}
            blackBtn={false}
            imageOnTheLeft={false}
          />
        </section>

        <section className="text-center py-4 md:py-32">
          <h2 className="text-4xl md:text-6xl font-bold uppercase border-b-4 border-red-600 w-8/12 m-auto pb-4 mb-4">
            Triumph Багаж и Аксесоари
          </h2>
          <p className="text-xl md:text-1xl font-semibold uppercase mb-8 m-auto w-11/12 md:w-6/12 text-center">
            Додадете сигурност и стил. За најновите вести и понуди контактирајте
            го вашиот локален Triumph центар.
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

export default GenuineLugagePage;
