import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import TextAndImageFlexSection from "@/app/components/familiySharedComponents/TextAndImageFlexSection";
import React from "react";

const ThruxtonEnginePage = () => {
  return (
    <>
      <section>
        <div className="m-auto w-11/12 md:w-6/12 py-4 md:py-8 lg:py-16 text-center">
          <p className="font-semibold md:text-2xl">THRUXTON RS</p>
          <h1 className="text-5xl lg:text-8xl font-bold uppercase my-4 md:my-8 border-y-4 border-red-500">
            Мотор <br /> и <br />
            ПерФоманси
          </h1>
          <p className="font-semibold md:text-2xl">
            Новиот високо перформантен 1200cc мотор на Thruxton RS серијата -
            отсега со повеќе сила и динамика.
          </p>
        </div>
        <div
          className="m-auto w-full md:w-9/12"
          style={{
            backgroundImage: `url("/images/classics/thruxtonRS/thruxtonRSEngineBannerTop.avif")`,
            backgroundPosition: "center center",
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover",
            height: "70vh",
          }}
        ></div>
      </section>
      <section className="m-auto w-11/12 md:w-8/12 lg:w-6/12 py-4 md:py-8 lg:py-16">
        <SectionTitleH2 text={"Мотор"} color={"dark"} />
        <div className="flex flex-col gap-4">
          <PageParagraph
            text={
              "За да го оживее она легендарно име кое го носи, овој мотор мора да ги испорача бараните перформанси. Затоа најновиот Thruxton RS со себе нов 1200cc дво-цилиндарски мотор кој ги поминува Euro 5 стандардите и до доставува 8 коњски сили повеќе од претходната генераци заедно со оној препознатлив британски „Cafe-Race“ звук."
            }
          />
          <PageParagraph
            text={
              "Со цел да се испорача повеќе перформанси моторот мораше да премине некои надградби. Сега истиот има високо компресивни клипови, нови доводи за воздух, нов профил на радалицата како и секундарен систем за убризгување на воздух. Исто така од големо значење и редукцијата на вкупната тежина со помош на магнезиумски делови како и големите унапредувања во поглед на намалување на вибрациите."
            }
          />
          <PageParagraph
            text={
              "Заедно, сето ова произведе 8 коњски сили повеќе отколку претхондата варијанта за да сега Thruxton RS испорачува максимални 105 коњски сили при 7,500 револуции на моторот и 112Nm максимален вртежен момент."
            }
          />
          <PageParagraph
            text={
              "Новиот мотор, сега поштедлив има уште посилен каракте и целосно ги задоволува Thruxot RS стандардите. Истиот испорачува одличен звук и одлична респонзивност."
            }
          />
          <PageParagraph
            text={
              "Околу звукот, новиот издувен систем испорачува длабок и богат британски дво-цилиндричен Cafe-Racer звук кој е препознатлив зa Thruxton RЅ името."
            }
          />
        </div>
      </section>
      <section className="flex flex-col justify-between items-center m-auto w-11/12 md:w-8/12 py-4 md:py-8 lg:py-16">
        <TextAndImageFlexSection
          title="Стандарди"
          textMain={
            "Комбинацијата од есклузивни елементи дава една нова димензија на Thruxton серијата и целосно го оправдува RS беџот. Врвните елементи како најнова технологија, суспензија и сопирачки од врвни перформанси како и незаменливиот дво-цилиндарски Thruxton мотор заедно носат врвни перформанси а и врвен сервисен интервал од 16,000 километри и EURO 5 стандарди. "
          }
          image={{
            src: "/images/classics/thruxtonRS/thruxtoRSEnginePromo1.avif",
            alt: "Thruxton RS",
          }}
        />
        <TextAndImageFlexSection
          textMain={
            "За уште повеќе уѓивање тука е и Torque Assist квачилото кое го намалува заморот на вашата дланка и е идеален за долги патувања но и при градските средини каде често застануваме и тргнуваме одново."
          }
          image={{
            src: "/images/classics/thruxtonRS/thruxtoRSEnginePromo2.avif",
            alt: "Thruxton RS",
          }}
          imageLeft
        />
      </section>
    </>
  );
};

export default ThruxtonEnginePage;
