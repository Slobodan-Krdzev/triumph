import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import MainBtn from "@/app/components/MainBtn";
import Image from "next/image";
import React from "react";

const MotorcycleCollection = () => {
  return (
    <>
      <section
        className="flex justify-center items-center"
        style={{
          backgroundImage: 'url("/images/clothes/motoClothingBanner.avif")',
          backgroundPosition: "center center",
          backgroundRepeat: "no-repeat",
          backgroundSize: "cover",
          height: "100vh",
        }}
      >
        <h1 className="text-5xl lg:text-8xl font-bold text-white uppercase border-b-4 border-red-600 ">
          Motorcycle
        </h1>
      </section>
      <section className="m-auto lg:gap-8 gap-4 flex flex-col justify-center items-center py-4 md:py-8 lg:py-16 bg-white px-4">
        <div className="m-auto lg:w-6/12 w-10/12 text-center">
          <PageParagraph
            text={
              "За да обезбедите совршено возење, потребен ви е совршен спокој и комодитет. Имаме се што ви треба. Дизајнирани од возачи, за возачи."
            }
          />
        </div>

        <Image
          src={"/images/clothes/motoImg1.avif"}
          alt="Облека за Возење Слика 1"
          height={793}
          width={1410}
        />
        <Image
          src={"/images/clothes/motoImg2.avif"}
          alt="Облека за Возење Слика 2"
          height={793}
          width={1410}
        />
        <Image
          src={"/images/clothes/motoImg3.avif"}
          alt="Облека за Возење Слика 3"
          height={793}
          width={1410}
        />

        <BikeInfoTextImageBtn
          title={"„Casual“ Колекција"}
          desc={
            "Имаме репутација на класични креации, па така и нашата „Casual“ колекција не е исклучок. Дизајнирана од истите креатори како и другите колекции, „Casual“ колекцијата располага со модерна облека која е изработена со вештина и бнимание на детали. Јакните и дуксерите заедно со печатените поло и маици со кратки ракави ви дадат автентичен стил што се издвојува од толпата."
          }
          ctaBtn={{
            text: "Детали",
            link: `/clothing-collection/casual`,
          }}
          image={{
            src: `/images/clothes/casualClothing.avif`,
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

export default MotorcycleCollection;
