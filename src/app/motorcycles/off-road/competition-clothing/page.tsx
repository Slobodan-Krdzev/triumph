import GrayBand from "@/app/components/GrayBand";
import Card from "@/app/components/OffRoadClothingCollectionComp/Card";
import HeroSection from "@/app/components/SubFamily/HeroSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";

const cardContent = [
  {
    img: "/images/offRoad/jersey.avif",
    title: "Racer Graphite MX Дрес",
    desc: "Racer Graphite MX Дресот е изработен од лесни материјали кои ја впиваат влажноста кои ви овозможуваат да се фокусирате само на возење. Истиот е дизајниран во склад со панталоните и ракавиците од истата серија.",
  },
  {
    img: "/images/offRoad/pants.avif",
    title: "Racer Graphite MX Панталони",
    desc: "Racer Graphite MX Панталоните нудат високо ниво на комоција и перформанси. Изработени се од лесни материјали и се обликувани во налик на нозете на возачот со цел за повеќе комоција.",
  },
  {
    img: "/images/offRoad/gloves.avif",
    title: "Radar MX Ракавици",
    desc: "Ракавиците се изработени од два дела - горен дел од едно парче екстра растеглив со заштитен слој и долен дел од синтетички материјал кој се лепи на рачките на моторот. Истите нудат екстра комоција без компромис кога е во прашање нивниот перформанс.",
  },
];

const CompetitionClothingPage = () => {
  return (
    <>
      <section className="relative">
        <HeroSection
          image={"/images/offRoad/clothingBanner.avif"}
          mobileImage={"/images/offRoad/clothingBanner.avif"}
          textLeftSide
        />
        <h1 className="font-bold text-4xl md:text-6xl lg:text-8xl text-center uppercase text-white left-1/4 md:left-1/4 lg:left-44"
        style={{
            position: 'absolute',
            top: '35%'
        }}>Тркачка <br /> Опрема</h1>
      </section>

      <main className="bg-black">
        <PageParagraph
          text={
            "Запознајте се со новата тркачка колекција изработена во сорабтока на Triumph со светскиот бренд Alpinestar. Дизајнирани од најдобрите дизајнери на светот нашата соработка ви ја носи најдобрата off-road опрема за возење."
          }
        />
        <PageParagraph
          text={
            "Целата палета на производи ќе биде достапна од пролет 2024 година."
          }
        />

        <div className="py-8 md:py-16 px-4 md:px-12 lg:px-20">
          <TextAndImageFlexSection
            textWhite
            textCenter
            title={"Tech 7 MX Чизми"}
            textMain={
              "Tech 7 MX чизмите се изработени од специјални материјали и технологија со цел да бидат полесни и анатомско по-комотни, паралелно со одлична сигурно од надворешните услови како и поголема заштита за зглоб."
            }
            image={{
              src: "/images/offRoad/boots.avif",
              alt: "Off-Road Boots",
            }}
          />
        </div>

        <div className="py-8 md:py-16 flex flex-col md:flex-row gap-4 justify-between items-center md:items-start m-auto w-11/12 md:w-9/12">
          <div className="basis-3/12">
            <SectionTitleH2 text={"Racer Graphite MX Серија"} color={"white"} />
          </div>
          {cardContent.map((item) => (
            <Card
              key={item.title}
              img={item.img}
              title={item.title}
              desc={item.desc}
            />
          ))}
        </div>
      </main>
      <section
        style={{
          backgroundImage: "url('/images/offRoad/clothesBottomBanner.avif')",
          backgroundPosition: "center center",
          backgroundRepeat: "no-repeat",
          backgroundSize: "cover",
          height: "120vh",
        }}
      ></section>
      <div className="m-auto w-11/12 md:w-8/12 lg:w-6/12 py-8 md:py-16 flex flex-col gap-4">
        <p className="text-sm">
          Внимание! Видеата и фотографиите се направени од професионалци во
          контолирана средина. Ве Моливе не побувајте самите. Секогаш возете на
          затоврена патека. Секогаш носете кацига, очила, и заштитна опрема
          додека возите.
        </p>
        <p className="text-sm">
          Видеата и фотографиите се креирани само за забава не треба да се
          користат како инструкции.
        </p>
        <p className="text-sm">
          Ние во Triumph сакаме секој возач да биде сигурен и да ужива. Секојаш
          возете безбедно и во склоп на вашите можност. Посетете некој курс за
          возење и никогаш не влегувајте во ризик. Не возете под дејство на
          алкохол. Секогаш проверете го вашиот Triumph мотор пред да возите.
        </p>
      </div>
      <GrayBand
        itemOne={{
          text: "Конфигурација",
          url: `/configure`,
          icon: "/icon-configurator.svg",
        }}
        itemTwo={{
          text: "Тест Возење",
          url: "/",
          icon: "/bike.svg",
        }}
      />
    </>
  );
};

export default CompetitionClothingPage;
