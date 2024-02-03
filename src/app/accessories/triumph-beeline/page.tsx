import MainBtn from "@/app/components/MainBtn";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import ListAndImageFlexSection from "@/app/components/familiySharedComponents/ListAndImageFlexSection";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import LatestModelsCarousellSection, {
  LatestModelsCarousellItemType,
} from "@/app/components/homePageComponents/LatestModelsCarousellSection";
import { faHeartPulse } from "@fortawesome/free-solid-svg-icons";
import React from "react";

const latestCaroitems: LatestModelsCarousellItemType[] = [
  {
    title: "Елегантен Дизајн",
    desc: "Пакетот е вклопен во машински изработено кукиште од високо-квалитетна алуминиумска кое ги штите внатрешните елементи од удари и вода, со луксузно ласерско Triumph гравирање на истото.",
    image: "/images/accessories/triumphBeelineCaro1.avif",
  },
  {
    title: "Лесно за инсталирање",
    desc: "Уредот се прицврстува за моторот за момент и исто толку брзо се одстранува благодарејки на специјална брава за брзо и лесно отклучување и заклучување.",
    image: "/images/accessories/triumphBeelineCaro2.avif",
  },
  {
    title: "Лесно за конфигурирање и употреба",
    desc: "Само спуштете ја Beeline апликацијата, поврзете го уредот со истата, одберете дестинација и спремни сте за патување. Дизајнот се состои и од копчиња кои се лесни за користење и со ракавици.",
    image: "/images/accessories/triumphBeelineCaro3.avif",
  },
  {
    title: "Едноставно и Брзо Мени",
    desc: "Скоро цела предна страна на уредот е покриена со дисплеј кој обезбедува максимална видливост во разните скали на осветлување и нуди две опции за навигација - преку мапа или компас.",
    image: "/images/accessories/triumphBeelineCaro4.avif",
  },
  {
    title: "Интернационална Покриеност",
    desc: "Велика Британија, Европа, Северна Америка, Австралија, Нов Зеланд или Јапонија - вие само возете за другото ќе бидете покриени.",
    image: "/images/accessories/triumphBeelineCaro5.avif",
  },
];

const TriumphBeelinePage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/accessories/triumphBeelineHeroBanner.avif"}
        text={`TRIUMPH BEELINE`}
        subText="Систем за Навигација"
      />

      <section className="bg-white">
        <p className="py-8 md:py-16 m-auto w-11/12 md:w-6/12">
          Во партнерство помеѓу Triumph и светски познатион и многупати
          наградуван бренд Beeline, се роди ексклузивниот Beeline систем за
          навигација во уникатен Triumph пакет. Дизајниран за да им овозможи
          лесна употраба и стилизирана навигација на сите Triumph возачи, овој
          систем нуди минималистичен, елегантен и цврст алуминиумски дизајн.
          Идеален за сите Triumph мотори посебно за класичната Bonneville
          серија.
        </p>

        <div className="text-center m-auto w-11/12 md:w-6/12">
          <SectionTitleH2
            text={"Погледните ги главните карактеристики"}
            color={"dark"}
          />
        </div>

        <LatestModelsCarousellSection
          items={latestCaroitems}
          showTitle={false}
        />
      </section>

      <section className="bg-white ">
        <div className="m-auto w-10/12 md:w-8/12">
          <ListAndImageFlexSection
            title="Издржлив, Практичен и Достапен за Секого"
            listItems={[
              "Батерија со капацитет до 30 часа",
              "Две години гаранција",
              "Бесплатна апликација и надоградувања",
              "USB кабел за полнење",
              "Еластична стега и брошура вклучено во пакетот",
            ]}
            image={{
              src: "/images/accessories/triumphBeelinePromo1.avif",
              alt: "Triumph Beeline Navi",
            }}
            imageLeft
          />

          <ListAndImageFlexSection
            title="Многу Дополнителни Можности"
            listItems={[
              "Брзинометар, часовник и „Trip“ Компјутер",
              "Следење и Споделување на Вашата Рута",
              "Информации на метричен и империјален систем",
              "Опција за воведување на GPS рута",
            ]}
            image={{
              src: "/images/accessories/triumphBeelinePromo2.avif",
              alt: "Triumph Beeline Navi",
            }}
            imageLeft={false}
          />
        </div>
      </section>

      <section
        style={{
          backgroundImage:
            "url('/images/accessories/beelineBottomBanner.avif')",
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
          backgroundPosition: "center center",
          height: "100vh",
        }}
      >
        <div className="h-full w-full flex justify-center items-center overlay-darken">
          <div className="m-auto w-4/12 text-center text-white ">
            <h3 className="text-2xl md:text-4xl font-semibold uppercase mb-4">Достапно Сега</h3>
            <p className="text-lg md:text-lg m-auto mb-4">
              Контактирајте го вашиот локален Triumph центар и веднаш нарачајте
              го вашиот Triumph Beeline навигациски систем.
            </p>
            <MainBtn text={"Контакт"} bgBlack isLink link="/dealer" />
          </div>
        </div>
      </section>
    </>
  );
};

export default TriumphBeelinePage;
