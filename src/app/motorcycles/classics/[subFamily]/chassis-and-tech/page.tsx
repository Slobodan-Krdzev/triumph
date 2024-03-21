import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import React from "react";

const ChassisAndTechPage = () => {
  return (
    <>
      <section>
        <div className="m-auto w-11/12 md:w-6/12 py-4 md:py-8 lg:py-16 text-center">
          <p className="font-semibold md:text-2xl">THRUXTON RS</p>
          <h1 className="text-5xl lg:text-8xl font-bold uppercase my-4 md:my-8 border-y-4 border-red-500">
            Шасија <br /> и <br />
            Технологија
          </h1>
          <p className="font-semibold md:text-2xl">
            Уште од привиот нацрт, целта беше да се нацрта со автентичен модерно спортски роадстер карактер со динамично управување. Возбудливите перформанси на Thruxton RS се подкрепнати од сите технолошки уреди кои заедно ја прават оваа серија да ја доминира својата класа.
          </p>
        </div>
        <div
          className="m-auto w-full md:w-9/12"
          style={{
            backgroundImage: `url("/images/classics/thruxtonRS/thruxtonRSChassisBannerTop.avif")`,
            backgroundPosition: "center center",
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover",
            height: "70vh",
          }}
        ></div>
      </section>
      <section className="m-auto w-11/12 md:w-8/12 lg:w-6/12 py-4 md:py-8 lg:py-16">
        <SectionTitleH2 text={"Контрола"} color={"dark"} />
        <div className="flex flex-col gap-4">
          <PageParagraph
            text={
              "Клучен детал за успехот на Thruxton RS е неговата управливост и контрола. Сепак ова е моторцикл кој беше изработен за тркање на патеките а тоа значи дека возачот мора да има одлична контрола врз моторот во секое време."
            }
          />
          <PageParagraph
            text={
              "Комбинацијата од новата спортска шасија, високо перформантната суспенција и Brembo сопирачките како и тркачки спремните пневматици даде одлични резултат, со намалување на вкупната тежина за 6 килограми."
            }
          />
          <PageParagraph
            text={
              "Новиот Thruxton RS на себе го носи Brembo M50 сопирачкиот систем со 4 клипни клешти и 320 милиметарски дискови и самостојна Brembo пумпа за течност за уште подобри перформанси при сопирање, контрола и чувство, како и одлична тракција додека запирате. Како и што очекувавте суспензијата е специјално тунирана за да испорача одлична контрола на патеката и на патиштата. Предната Showa вилишка и задната Ohlins суспензија даваат одличен одговор за ситуацијата на подлогата и одличен комодитет."
            }
          />
          <PageParagraph
            text={
              "Како додаток на сево ова се Metzeller Racetec RR пневматиците - напред 120/70 ZR17 и назад 160/60 ZR17 истите намонтирани на 32 жични тркала."
            }
          />
        </div>
      </section>
      <section className="flex flex-col justify-between items-center m-auto w-11/12 md:w-8/12 py-4 md:py-8 lg:py-16">
        <TextAndImageFlexSection
          title="Технологија"
          textMain={
            "Без никакви предрасуди, ова е модерен мотор со целосно модерна технологија која ви е потребна за квалитетно патување и авантури. "
          }
          image={{
            src: "/images/classics/thruxtonRS/thruxtonRSChassisPromo1.avif",
            alt: "Thruxton RS",
          }}
        />
        <TextAndImageFlexSection
            title="Автентичен Thruxton RS карактер"
          textMain={
            "Никој мотор го нема тој автентичен и динамичен cafe-racer карактер како Thruxton RS."
          }
          image={{
            src: "/images/classics/thruxtonRS/thruxtonRSChassisPromo2.avif",
            alt: "Thruxton RS",
          }}
          imageLeft
        />
      </section>
    </>
  );
};

export default ChassisAndTechPage;
