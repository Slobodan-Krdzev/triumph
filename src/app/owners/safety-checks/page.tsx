import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import Image from "next/image";
import React from "react";

const SafetyCheckPage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/owners/safetyChecksHeroBanner.avif"}
        text={`Сигурносни Проверки`}
      />

      <main>
        <section className="flex flex-col gap-4 m-auto w-11/12 md:w-10/12 lg:w-6/12 pt-4 md:pt-8 lg:pt-16">
          <PageParagraph
            text={
              "Пред да тргнете на аванатура, без разлика на дистанцата, есенцијално е да направите одредена проверка на вашиот мотор со цел да се осигурате дека се е во ред со истиот."
            }
          />
          <PageParagraph
            text={
              "Редовното сервисираење и проверка ќе ви помогнат да го одржувате вашиот мотор во најдобро светло."
            }
          />
          <PageParagraph
            text={
              "Одвоеното време за проверка на моторот само ќе ја подобри сигурноста и уживањето во авантурата."
            }
          />
          <PageParagraph
            text={
              "Оваа листа ќе ви помогне да се фокусирате на работите кои треба да ги проверувате."
            }
          />
        </section>

        <section className="flex flex-col md:flex-row justify-between gap-4 m-auto w-11/12 md:w-9/12 py-4 md:py-8 lg:py-16">
          <div>
            <SectionTitleH2 text={"Сопирачки"} color={"dark"} />
            <PageParagraph
              text={
                "Проверете ги дисковите, клештите и сите други елементи од сопирачкиот систем. Проверете дали дисковите се рамни и прави и дали има материјал на плочките на клештите за сопирање."
              }
            />
          </div>
          <div>
            <SectionTitleH2 text={"Електрика"} color={"dark"} />
            <PageParagraph
              text={
                "Проверете дали аколмулаторот на моторот се полни. Најлесниот начин за да го проверите тоа е да следите дали се зголемува светлината од светлото на моторот додека додавате гас."
              }
            />
          </div>
          <div>
            <SectionTitleH2 text={"Проверка на Масла"} color={"dark"} />
            <PageParagraph
              text={
                "Проверете и уверете се дека сите количини на масла се во опсег на параметрите според упатствата за користење. Проверете го маслото во квачилото и ладникот и доколку е под минималното ниво додадете колку е потребно според упатството за користење на моторот."
              }
            />
          </div>
        </section>
        <section
          style={{
            backgroundImage: 'url("/images/owners/safetyBottomBanner.avif")',
            backgroundSize: "cover",
            backgroundRepeat: "no-repeat",
            backgroundPosition: "center center",
            height: "60vh",
          }}
        ></section>
        <section className="m-auto w-11/12 md:w-10/12 py-4 md:py-8 lg:py-16">
          <div className="m-auto w-11/12 md:w-10/12 lg:w-6/12">
            <SectionTitleH2 text={"Проверка на Масла"} color={"dark"} />
            <PageParagraph
              text={
                "Проверете и уверете се дека сите количини на масла се во опсег на параметрите според упатствата за користење. Проверете го маслото во квачилото и ладникот и доколку е под минималното ниво додадете колку е потребно според упатството за користење на моторот."
              }
            />
          </div>
          <BikeInfoTextImageBtn
            title="Багаж"
            desc={
              "Проверете го упатството за користење со цел да не го преминетет лимитот на максимална тежина резервирана за багаж. Доколку го изгубивте, упатството можете да го спуштите од овој официјален веб-сајт."
            }
            ctaBtn={{
              text: "Упатства",
              link: "https://triumphtechnicalinformation.com/handbooks",
            }}
            image={{
              src: "/images/owners/luggaggeOwners.avif",
              alt: "Упатства",
            }}
            blackBtn={false}
          />
          <div className="m-auto w-11/12 md:w-10/12 lg:w-6/12 flex flex-col justify-between gap-4">
            <PageParagraph
              text={
                "Пред да тргнете на аванатура, без разлика на дистанцата, есенцијално е да направите одредена проверка на вашиот мотор со цел да се осигурате дека се е во ред со истиот."
              }
            />
            <PageParagraph
              text={
                "Редовното сервисираење и проверка ќе ви помогнат да го одржувате вашиот мотор во најдобро светло."
              }
            />
            <PageParagraph
              text={
                "Одвоеното време за проверка на моторот само ќе ја подобри сигурноста и уживањето во авантурата."
              }
            />
          </div>
          <div className="m-auto w-11/12 md:w-10/12 lg:w-6/12 flex flex-col justify-between gap-4 py-4 md:py-8 lg:py-16">
            <SectionTitleH2 text={"Пневматици"} color={"dark"} />
            <PageParagraph
              text={
                "Проверете ја состојбата со вашите пневматици. Барајте пукнатини, проверете ја површината, а за информации околу притисок и рокот на трање на пневматиците обратете се до упатството за користење."
              }
            />
          </div>
          <Image
            src={"/images/owners/tyresOwners.avif"}
            alt={"Пневматици"}
            width={1410}
            height={793}
          />

          <div className="m-auto w-11/12 md:w-10/12 lg:w-6/12 flex flex-col justify-between gap-4 py-4 md:py-8 lg:py-16">
            <SectionTitleH2 text={"Тркала"} color={"dark"} />
            <PageParagraph
              text={
                "Проверете ги тркалата и барајте знаци од оштетувања. Доколку имате тркала со жици проверете дали фалат жици и дали сите жичи се подеднакво стегнати."
              }
              
            />

          </div>
          <p className="italic m-auto w-11/12 md:w-6/12 text-center text-lg">Доколку ви е потребна помош обратете се кај вашиот локален Triumph центар.</p>

        </section>
      </main>
    </>
  );
};

export default SafetyCheckPage;
