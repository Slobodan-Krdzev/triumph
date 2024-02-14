import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import React from "react";

const OilRecommendationsPage = () => {
  return (
    <>
      <section
        className="w-full bg-white flex justify-center items-center"
        style={{ height: "80vh" }}
      >
        <div className="m-auto w-11/12 md:w-8/12 text-center">
          <h1 className="md:text-8xl text-xl border-b-4 border-red-600 font-bold uppercase pb-2 text-center mb-4 ">
            Препораки за Масла
          </h1>
          <PageParagraph
            text={
              "За да ја извлечете максималната сила на вашиот Triumph моторцикл, ние го препорачуваме светски познатиот бренд за лубриканти Castrol чии производи се наоѓаат во секој фабрички мотор на Triumph."
            }
          />
        </div>
      </section>

      <section className="m-auto w-11/12 md:w-8/12 py-4 md:py-8 lg:py-16">
        <div className="m-auto w-full md:w-6/12 text-center pb-4 md:pb-8 lg:pb-16">
          <SectionTitleH2 text={"Правилен Избор"} color={"dark"} />
          <PageParagraph
            text={
              "Изборот на вистинскиот лубрикант е еден од најдобрите начини за одржување на вашиот мотор како и одличен начин да бидете сигурни дека вашиот мотор работи беспрекорно, па затоа од голема важност е да ги изберете маслата на Castrol кои ние ви ги препорачуваме."
            }
          />
        </div>

        <TextAndImageFlexSection
          imageLeft
          title="Castrol Масла"
          textMain={
            "Castrol е единствениот производител на специјални масла произведени само за мотори, па затоа е и партнер на Triumph. Бидете сигурни сите масла на Castrol се темелно тестирани и се произведени по високи стандарди."
          }
          image={{
            src: "/images/owners/castrol.avif",
            alt: "Castrol Oil",
          }}
        />
      </section>
    </>
  );
};

export default OilRecommendationsPage;
