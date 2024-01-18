import GrayBand from "@/app/components/GrayBand";
import HeroSection from "@/app/components/SubFamily/HeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import DiscoverThriumphCard from "@/app/components/homePageComponents/DiscoverThriumphCard";

const WorldClassSupportPage = () => {
  return (
    <>
      <section>
        <HeroSection
          image={"/images/offRoad/worldClassBanner.avif"}
          mobileImage={"/images/offRoad/worldClassBannerMobile.avif"}
          textLeftSide
        />
        <h1
          className="font-bold text-4xl md:text-6xl lg:text-8xl text-center uppercase text-white left-1/4 md:left-1/4 lg:left-44"
          style={{
            position: "absolute",
            top: "45%",
          }}
        >
          Тркачка <br /> Опрема
        </h1>
      </section>

      <main className="bg-black text-white px-4 py-8 lg:py-16">
        <div className="m-auto w-11/12 md:w-8/12 lg:w-6/12 flex flex-col gap-4 text-center">
          <PageParagraph
            text={
              "Специјализиран Triumph off-road снабдувач. Овој систем е изработен за брзо и лесно нарачување на вашите резервни делови, како и рапидна испорака на истите. Овој тим е сосатавен само за вас и е на располагање на секој Triumph возач."
            }
          />
          <PageParagraph
            text={
              "World Class Support тимот ви нуди сервис за вашиот мотор. World Class Support тимот на Triumph ви нуди онлајн продавница за аксесоари и делови како и за ексклузивни парчиња облека."
            }
          />
        </div>

        <BikeInfoTextImageBtn
          textWhite
          title={"Контакт"}
          desc={
            "Специјалисти теренски добавувачи се екипирани од ентузијасти кои го разбираат „off-road“ светот. Нудат целосна техничка поддршка со неверојатно ефикасна услуга за аксесоари и резервни делови."
          }
          ctaBtn={{
            text: "Контакт",
            link: `/dealers`,
          }}
          image={{
            src: `/images/offRoad/worldClassPromo.avif`,
            alt: `Off Road Dealership`,
          }}
          blackBtn={false}
          imageOnTheLeft={false}
          mobileTextRight={false}
        />

        <div className="py-8 md:py-16 px-4 md:px-12 lg:px-20">
          <TextAndImageFlexSection
            textWhite
            imageLeft
            title={"Онлајн Продавница за Аксесоари и Делови"}
            textMain={
              "Во партнерство со нашите дистрибутери и претставништва, нашата онлајн продавница за делови и даксесоари обезбедува со широка палета на оригинални производи. Нашите дистрибутери ќе обезбедат брза испорака до вашиот праг или можете да подигнете од најблиското претставништво на Triumph MX, што ќе ве држи на брз пат кон успехот."
            }
            image={{
              src: "/images/offRoad/worldClassPromo1.avif",
              alt: "Онлине Продавница",
            }}
          />
          <TextAndImageFlexSection
            textWhite
            title={"Перформантни лубрикантни масла на Triumph"}
            textMain={
              "Ексклузивно направени за Triumph моторциклите, оваа палета нуди врвни, целосно синтетички и полусинтетички моторни масла базирани на Ester, додаваат засилена моќност, и нудат оптимална заштита на моторот и непоколеблива доверливост во сите услови на возење."
            }
            image={{
              src: "/images/offRoad/worldClassPromo2.avif",
              alt: "Онлине Продавница",
            }}
          />
        </div>
      </main>

      <section className="py-8 md:py-16 flex flex-col md:flex-row md:px-8 px-4 gap-4 w-full md:w-10/12 m-auto ">
        <DiscoverThriumphCard
          title={"Специјализирани Аксесоари"}
          image={"/images/offRoad/accessoryLinkWorld1.avif"}
          desc={
            "Настрана од нашиот екстра брз систем за испорака на резервни делови и сервис, достапна е и целосна палетна на Triumph аксесоари од најголемите светски брендови на мотокрос сцената кои додаваат уште еден степен подобри перформанси и можности."
          }
          url={"/motorcycles/off-road/tf-250-x/accessories"}
          btnText={"Откриј Повеќе"}
        />

        <DiscoverThriumphCard
          btnText={"Откриј Повеќе"}
          title={"Професионална Опрема за Возење"}
          image={"/images/offRoad/accessoryLinkWorld2.avif"}
          desc={
            "Достапна е целосна палета на екслкузивна Triumph облека за возење, изработена од специјалистите за MX опрема Alpinestars. Откријте го вашиот победнички изглед овде."
          }
          url={"/motorcycles/off-road/competition-clothing"}
        />
      </section>

      <section
        style={{
          backgroundImage: "url('/images/offRoad/worldClassBottomBanner.avif')",
          backgroundPosition: "center center",
          backgroundRepeat: "no-repeat",
          backgroundSize: "cover",
          height: "75vh",
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

export default WorldClassSupportPage;
