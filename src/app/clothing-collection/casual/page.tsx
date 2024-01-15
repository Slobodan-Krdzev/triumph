import MainBtn from "@/app/components/MainBtn";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import Image from "next/image";
import React from "react";

const CasualCollection = () => {
  return (
    <>
      <section
        className="flex justify-center items-center"
        style={{
          backgroundImage: 'url("/images/clothes/casualClothingBanner.avif")',
          backgroundPosition: "center center",
          backgroundRepeat: "no-repeat",
          backgroundSize: "cover",
          height: "100vh",
        }}
      >
        <h1 className="text-5xl lg:text-8xl font-bold text-white uppercase border-b-4 border-red-600">
          Casual
        </h1>
      </section>
      <section className="m-auto lg:gap-8 gap-4 flex flex-col justify-center items-center py-4 md:py-8 lg:py-16 bg-white px-4">
        <div className="m-auto lg:w-6/12 w-10/12 text-center">
          <PageParagraph
            text={
              "Класичен стил со модерен изглед. Од мини колекции до секојдневни основи, целата наша облека е дизајнирана од наши дизајнери со пасија, внимание на детали."
            }
          />
        </div>

        <Image
          src={"/images/clothes/casualImg1.avif"}
          alt="Кежуална Облека Слика 1"
          height={793}
          width={1410}
        />
        <Image
          src={"/images/clothes/casualImg2.avif"}
          alt="Кежуална Облека Слика 2"
          height={793}
          width={1410}
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
            alt: `Casual Collection`,
          }}
          blackBtn={true}
          imageOnTheLeft={true}
        />
      </section>

      <section className="text-center pb-4 md:pb-8 lg:pb-16 bg-white">
        <h2 className="text-2xl md:text-5xl font-bold uppercase border-b-4 border-red-600 w-3/4 m-auto pb-4 mb-4">
          Дизајнирани од возачи, за возачи
        </h2>
        <p className="text-md md:text-2xl font-semibold uppercase mb-8">
          Лоцирајте ја нашата најблиска продавница.
        </p>
        <MainBtn
          text={"Најди Продавница"}
          bgBlack={true}
          isLink={true}
          link={`/`}
        />
      </section>
    </>
  );
};

export default CasualCollection;
