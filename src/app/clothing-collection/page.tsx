import React from "react";
import TextAndImageFlexSection from "../components/familiySharedComponents/TextAndImageFlexSection";
import BikeInfoTextImageBtn from "../components/familiySharedComponents/BikeInfoTextImageBtn";
import MainBtn from "../components/MainBtn";
import MainCarousell from "../components/homePageComponents/MainCarousell/MainCarousell";

const clothingCarousellItems = [
    {
    video: null,
    image: "/images/clothes/casualCaroFull.avif",
    imageMobile: "/images/clothes/casualCaro.avif",
    title: "Casual Колекција",
    desc: "Класични стилови со модерни предности. Од колекции на капсули до секојдневни неопходни работи, целата наша облека е дизајнирана во куќата со изработка и квалитет што би го очекувале.",
    link1: {
      url: "/clothing-collection/casual",
      text: "Погледнете ја Колекцијата"
    }
  },
  {
    video: null,
    image: "/images/clothes/motoCaroFull.avif",
    imageMobile: "/images/clothes/motoCaro.avif",
    title: "Mоtorcycle Колекција",
    desc: "Нашата палета на облека е дизајнирана од возачи, за возачи. Добивате автентичен, индивидуален стил создаден за возење... и пошироко. За пролетно лето воведовме сосема нов технички опсег..",
    link1: {
      url: "/clothing-collection/motorcycle",
      text: "Погледнете ја Колекцијата"
    }
}
  ]

const ClothingCollection = () => {
  return (
    <>
      <MainCarousell items={clothingCarousellItems}/>

      <p className="m-auto lg:w-6/12 md:w-8/12 w-10/12 text-center text-2xl  py-4 md:py-8 lg:py-16">
        Нашите колекции облека се дизајнирани од возачи, за возачи. <br />{" "}
        Добивате автентицен и препознатлив стил - изработен за возење и за многу
        повеќе
      </p>

      <main className="px-4 pb-4 md:pb-8 lg:pb-16">
        <section className="w-full md:w-10/12 lg:w-8/12 m-auto">
          <TextAndImageFlexSection
            title={"„Lifestyle“ Колекција"}
            textMain={
              "Автентичен стил, внимателна изработка и одлична изведба. „Lifestyle“ колекцијата е проникната со смела мото естетика и безвременски дизајн. Ќе најдете кожени авијатичарски јакни, восочени памучни јакни и стилски фармерки, заедно со класични маици на кратки и долги ракави. Тоа е облека наменета за возење... и повеќе.."
            }
            image={{
              src: "/images/clothes/clothesCollectionTopSectionImage.avif",
              alt: "Lifestyle Collection",
            }}
            imageLeft
          />

          <BikeInfoTextImageBtn
            title={"„Motorcycle“ Колекција"}
            desc={
              "Нашата палета на мотоцикли е дизајнирана за возачи од возачи. Зошто; Затоа што тие подобро од кој било ја знаат важноста на вистинската опрема. Поминавме години изработувајќи ја нашата облека одобрена од CE, усовршувајќи ја деликатната рамнотежа помеѓу автентичниот стил, иновативниот дизајн и врвната технологија. Резултатот е безвременска колекција за возење."
            }
            ctaBtn={{
              text: "Детали",
              link: `/clothing-collection/motorcycle`,
            }}
            image={{
              src: `/images/clothes/motorcycleClothing.avif`,
              alt: `Motorcycle Collection`,
            }}
            blackBtn={false}
            imageOnTheLeft={false}
            // mobileTextRight={}
          />

          <BikeInfoTextImageBtn
            title={"„Casual“ Колекција"}
            desc={
              "Имаме репутација на класични креации, па така и нашата „Casual“ колекција не е исклучок. Дизајнирана од истите креатори како и другите колекции, „Casual“ колекцијата располага со модерна облека која е изработена со вештина и бнимание на детали. Јакните и дуксерите заедно со печатените поло и маици со кратки ракави ви дадат автентичен стил што се издвојува од толпата."
            }
            ctaBtn={{
              text: "Детали",
              link: `/clothing/casual`,
            }}
            image={{
              src: `/images/clothes/casualClothing.avif`,
              alt: `Casual Collection`,
            }}
            blackBtn={false}
            imageOnTheLeft={true}
            // mobileTextRight={}
          />

          <section className="text-center pb-4 md:pb-8 lg:pb-16">
            <h2 className="text-2xl md:text-5xl font-bold uppercase border-b-4 border-red-600 w-3/4 m-auto pb-4 mb-4">
              Дизајнирани од возачи, за возачи
            </h2>
            <p className="text-md md:text-2xl font-semibold uppercase mb-8">
              Лоцирајте ја нашата најблиска продавница.
            </p>
            <MainBtn
              text={"Контакт"}
              bgBlack={true}
              isLink={true}
              link={`/dealer`}
            />
          </section>
        </section>
      </main>
    </>
  );
};

export default ClothingCollection;
