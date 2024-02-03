import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import TitleWithLineThrough from "@/app/components/TitleWithLineThrough";
import BottomCarousell, {
  BottomCarousellItemType,
} from "@/app/components/classicsPageComp/BottomCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import ListAndImageFlexSection from "@/app/components/familiySharedComponents/ListAndImageFlexSection";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import CardLinkItem from "@/app/components/homePageComponents/CardLinkItem";
import React from "react";
import { listItem } from "../page";
import MainBtn from "@/app/components/MainBtn";

const caroItems: BottomCarousellItemType[] = [
  {
    id: "caro1",
    title: "Сет за заштита на моторот",
    desc: "Овој ексклузивен сет е креиран во колаборација на Triumph со светски познатиот бренд за средства за чистење и заштита Muc-Off и е наменет да се грижи за вашиот Triumph мотор.",
    image: "/images/owners/bottomCaro1.avif",
  },
  {
    id: "caro2",
    title: "Noto-Tech средство за чистење",
    desc: "Технолошки најнапредното средство за чистење на секакви валканици дури и до микроскопски размери без никакво користење на небезбедни киселини и хемикалии. Доаѓа со многу симпатично литарско шише со прскалка.",
    image: "/images/owners/bottomCaro2.avif",
  },
  {
    id: "caro3",
    title: "Чистач за одстранување на мрснотија",
    desc: "Брзо одстранете ја несаканата мрснотија на метални, пластични, гумени и било какви површини. Ова средство иако е базирано на вода лесно се справува со сите нечистотии и го остава вашиот мотор безпрекорен. Доаѓа во канистер за прскање од 500ml.",
    image: "/images/owners/bottomCaro3.avif",
  },
  {
    id: "caro4",
    title: "Чистач за мат површини",
    desc: "Специјално формулиран за мат површини оваа формула ќе ја остави површината недопрена односно без никакви траги од користење. Дополнително, додава и заштитен слој кој ја спречува нечистотијата да се лепи на вашиот мотор. Доаѓа во 750ml канистер за прскање.",
    image: "/images/owners/bottomCaro4.avif",
  },
  {
    id: "caro5",
    title: "Заштита",
    desc: "Лесен и брз за употреба, ова средство е наменето како заштитен слој од прашина, корозија и ќе го чува вашиот мотор почист спречувајки било какви материјали да се налепат на моторот. Доаѓа во 500ml канистерче за прскање.",
    image: "/images/owners/bottomCaro5.avif",
  },
  {
    id: "caro7",
    title: "Лубрикант за Ланец",
    desc: "Овој продукт е составен од синтетичка формула кој служи како заштита и го пролонгира интервалот за подмачкување на ланецот. Спречува фрикција помеѓу две метални површини и заштитува од UV зраци со што го пролонгира сервисниот интервал на ланецот. Доаѓа во канистер  за прскање - 400ml. ВНИМАНИЕ: Никогаш да не се нанесува на дискови на сопирачките бидејки истите ќе го изгубат ефектот на сопирање. Користете средство за чистење на сопирачки кој не е базиран на масло.",
    image: "/images/owners/bottomCaro7.avif",
  },
  {
    id: "caro8",
    title: "Аксесоари",
    desc: "MICROFIBER крпа - оваа технологија е изградена од микро-фибер влакна која има моќно абсорбирачко дејство и ја дофаќа и најмалото зрнце прашина. MICROCELL Сунгер - Екстремно квалитетен и ергономичен сунѓер спремен да ги дофати сите незгодни места.",
    image: "/images/owners/bottomCaro8.avif",
  },
];

const YourTriumphPage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/owners/yourTriumphHeroBanner.avif"}
        text={`Вашиот Triumph`}
      />

      <main className="bg-white">
        <section className="m-auto w-11/12">
          <BikeInfoTextImageBtn
            title="Грижа за вашиот мотор"
            desc={
              "Кога дизајнираме мотор паралелно ги дизајнираме и креираме сите потребни аксесоари за сервисирање на моторот, пакети кој ќе ви помогнат при сервисирање и ќе се грижат за вашиот мотор."
            }
            ctaBtn={{
              text: "Проверка на Моторот",
              link: "/owners/your-triumph/safety-checks",
            }}
            image={{
              src: "/images/owners/yourtriumphPromo1.avif",
              alt: "Your Triumph Service",
            }}
            blackBtn={true}
          />
        </section>
        <div className="m-auto w-11/12 md:w-6/12 text-center flex flex-col gap-4 pb-4 md:pb-8 lg:pb-16">
          <SectionTitleH2 text={"Muc-Off"} color={"dark"} />
          <PageParagraph
            text={
              "Есенцијален сет за грижа за вашиот мотор кој ги комбинира најдобрите „Muc-Off“ продукти за чистење кои ќе се грижат за вашиот мотор да изгледа и да работи безпрекорно во секој момент."
            }
          />
          <PageParagraph
            text={
              "Сетот се состои од брендираната Triumph водоотпорна 15 литарска торба и одлична колекција на Muc-Off продукти за чистење и оджување на моторот."
            }
          />
        </div>

        <BottomCarousell items={caroItems} />

        <div className="mt-4 md:mt-8 lg:mt-16">
          <TitleWithLineThrough text={"Лубриканти и Пневматици"} />
        </div>
        <section
          className="py-4 md:py-8 lg:py-16 m-auto w-11/12 md:w-9/12 flex flex-col md:flex-row justify-center gap-4 
        md:gap-16 lg:gap-24"
        >
          <CardLinkItem
            title={"Препорачани Лубриканти"}
            image={"/images/owners/oilSelector.avif"}
            text={"Откријте Повеќе"}
            url={"/owners/oil-recommendation"}
          />
          <CardLinkItem
            title={"Избор на Пневматици"}
            image={"/images/owners/tyreSelector.avif"}
            text={"Откријте Повеќе"}
            url={
              "https://media.triumphmotorcycles.co.uk/image/upload/f_auto/q_auto/sitecoremedialibrary/media-library/files/central-marketing-team/tyre%20selector/issue%2028/ts_en_28.pdf?_gl=1*1mkhhr7*_ga*Mjk5MzMyMjE0LjE2OTYzNTc2MTE.*_ga_2YJFH6KBX6*MTcwNjU1ODcwMy4xOTQuMS4xNzA2NTYxNTg0LjE4LjAuMA.."
            }
          />
        </section>
        <section className="m-auto w-11/12 md:w-8/12">
          <BikeInfoTextImageBtn
            title="24-Месечна Гаранција"
            desc={
              "24 месечна гаранција без разлика на поминатите километри важи за секој Triump мотор а на вам ви остава само да уживате, да возите со сигурност, самодоверба и без никакви грижи."
            }
            ctaBtn={{
              text: "Дознајте Повеќе",
              link: "/owners/warranty",
            }}
            image={{
              src: "/images/owners/24montharrantyPromo.avif",
              alt: "24 Months Warranty",
            }}
            blackBtn={false}
          />
        </section>
        <section className="m-auto w-11/12 md:w-9/12 pb-4 md:pb-8 lg:pb-16">
          <ListAndImageFlexSection
            listItems={listItem}
            imageLeft
            title="Нашето Ветување до Вас"
            video="https://www.youtube.com/embed/qInvA551o2A"
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

export default YourTriumphPage;
