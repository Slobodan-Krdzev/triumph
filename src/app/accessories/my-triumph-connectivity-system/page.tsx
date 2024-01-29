import MainBtn from "@/app/components/MainBtn";
import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import YouTubePromo from "@/app/components/SubFamily/YouTubePromo";
import ListAndImageFlexSection from "@/app/components/familiySharedComponents/ListAndImageFlexSection";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import React from "react";

const phones: string[] = [
  "Samsung Galaxy A03",
  "Samsung Galaxy A13",
  "Samsung Galaxy A22",
  "Samsung Galaxy A32",
  "Samsung Galaxy A52s",
  "Samsung Galaxy A73",
  "Samsung Galaxy S20",
  "Samsung Galaxy S21",
  "Samsung Galaxy S21 Ultra",
  "Samsung Galaxy S22",
  "Samsung Galaxy S22 Ultra",
  "Apple iPhone SE (2nd Generation)",
  "Apple iPhone 11",
  "Apple iPhone 12",
  "Apple iPhone 12 Mini",
  "Apple iPhone 12 Pro",
  "Apple iPhone 13",
  "Apple iPhone 13 Pro",
  "Apple iPhone 14",
  "Apple iPhone 14 Pro",
];

const MyTriumphPage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/accessories/mytriumphHeroBanner.avif"}
        text={`MY TRIUMPH CONNECTIVITY SYSTEM`}
        subText="Запознајте ја најновата генерација на уреди за поврзување со вашиот мотор"
      />

      <main className="bg-white">
        <section className="bg-white py-4 md:py-8 lg:py-16">
          <p className="мy-8 m-auto w-11/12 md:w-6/12">
            Triumph ви нуди целосно нова генерација на уреди за поврзување со
            вашиот мотор, дизајнирани да достават подобро возачко искуство.
          </p>
          <p className="m-auto w-11/12 md:w-6/12">
            Ова е интуитивен и паметен начин да го подобрите вашето возачко
            искуство и да го однесете вашиот мотор на едно повисоко технолошко
            ниво.
          </p>
        </section>

        <section>
          <div className="m-auto w-10/12 md:w-8/12">
            <ListAndImageFlexSection
              title="My Triumph Connectivity System"
              listItems={[
                "Првиот систем во светот кој овозможува менаџирање на вашата „Go-Pro“ камера преку вашиот мотор.",
                "Првиот Triumph „Turn-By-Turn“ систем изграден во соработка со Google - светска премиера на Google во моторната индустрија",
                "Функции за управување со телефон и аудио",
                "Лидер во класата по технолошки иновации кои го подобруваат возачкото искуство",
              ]}
              image={{
                src: "/images/accessories/connectivityPromo1.avif",
                alt: "Triumph Navi",
              }}
              imageLeft
            />

            <ListAndImageFlexSection
              title="лесна Инсталација и Ракување"
              listItems={[
                "Сите можни функции се ракуваат преку - My Triumph Апликацијата",
                "Сите функции се достапни и на TFT инструменталната табла",
                "„Trun-By-Turn“ систем за навигација",
                "На моделите каде My Triumph апликацијата не доаѓа како стандард возачите имаат можност за брза инсталација во најблискиот Triumph центар",
              ]}
              image={{
                src: "/images/accessories/connectivityPromo2.avif",
                alt: "Triumph Beeline Navi",
              }}
              imageLeft={false}
            />
          </div>
        </section>

        <section className="py-8 md:py-16 flex flex-col lg:flex-row justify-between px-4 md:px-8 lg:px-48 gap-4 lg:gap-20">
          <div className="basis-full lg:basis-4/12 text-center">
            <SectionTitleH2
              text={"My Triumph Connectivity Module Bluetooth®"}
              color={"dark"}
            />
            <p className="mb-4 md:mb-4">
              <b>Bluetooth ®</b> функционалноста може да варира според тоа каков
              уред користите и според тоа дали истиот ја користити најновата
              верзија на апликацијата, како и според достапната меморија и сл.
            </p>
            <p className="mb-4 md:mb-4">
              Софтверските надоградувања на самиот телефон можат да попречат врз
              нормалното работење на апликацијата.
            </p>
            <p className="mb-4 md:mb-4">
              Во тие одредени несакани случаи, Triumph не може да гарантира за
              целосната фукнионалност на уредот. Некои функционалности не се
              достапни во одредени региони.
            </p>
            <p className="mb-4 md:mb-4">
              Долу наведените уреди потполно се компатибилни со апликацијата,
              наспроти тоа уредите кои не се наброени можат да имаат мали пречки
              при работата на апликацијата
            </p>
            <p className="mb-4 md:mb-4 font-semibold">
              Уредите кои не се наведени во листата, треба претходно да бидат
              добро истестирани во секој Triumph центар со цел да се обезбеди
              максимална фукнционалност пред купување на истите.
            </p>
          </div>
          <div className="flex flex-col items-center text-center">
            <SectionTitleH2
              text={"Тестирани Bluetooth® Уреди"}
              color={"dark"}
            />
            <ul className="list-disc marker:text-red-600 marker:text-2xl">
              {phones.map((phone, idx:number) => <li key={`${phone}..${idx}`} className="text-lg">{phone}</li>)}
            </ul>
          </div>
          <div className="flex flex-col items-center text-center">
            <SectionTitleH2 text={"Слушалки (Headset)"} color={"dark"} />
            <ul className="list-disc marker:text-red-600 marker:text-2xl">
              <li className="text-lg">Triumph Sena 50S</li>
            </ul>
          </div>
        </section>

        <section className="text-center py-4 md:py-32">
          <h2 className="text-4xl md:text-6xl font-bold uppercase border-b-4 border-red-600 w-8/12 m-auto pb-4 mb-4">
            My Triumph App
          </h2>
          <p className="text-xl md:text-1xl font-semibold uppercase mb-8 m-auto w-11/12 md:w-6/12 text-center">
            My Triumph апликацијата е бесплата и достапна за спуштање и користење на iOS ™ и Android ™ уредите и се тука да ви овозможат да се конектирате со моторот, да ја следите вашата активност и полесно да навигирате при вашата авантура.
          </p>
          <MainBtn
            text={"Дознај Повеќе за Апликацијата"}
            bgBlack={false}
            isLink={true}
            link={`/owners/my-triumph-app`}
          />
        </section>
        <YouTubePromo video={"https://www.youtube.com/embed/sDq0ksRQOtQ"}/>
        <section>

        </section>
      </main>
    </>
  );
};

export default MyTriumphPage;
