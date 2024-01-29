import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import BottomCarousell, { BottomCarousellItemType } from "@/app/components/classicsPageComp/BottomCarousell";
import SectionTitleH2 from "@/app/components/familiySharedComponents/SectionTitleH2";
import LatestModelsCarousellSection, { LatestModelsCarousellItemType } from "@/app/components/homePageComponents/LatestModelsCarousellSection";
import React from "react";


const latestModelsItems: LatestModelsCarousellItemType[] = [{
    title: "Mesh 2.0 Technology",
    desc: "Овој уред нуди доверлив, интелегентен и флексибилен систем за поврзување со одлично ниво на аудио квалитет.",
    image: "/images/accessories/senaLatestCaro11.avif"
},{
    title: "Harman/Kardon Аудио Систем",
    desc: "Најдобриот комуникациски систем во индустријата само што стана уште подобар благодарејки на аудио системот од Harman/Kardon. Поврзете со неограничен број на возачи околу вас преку Sena Mesh мрежата или со вашиот мобилен телефон, GPS или добивајте телефонски повици преку фантастичниот Harman/Kardon аудио систем.",
    image: "/images/accessories/senaLatestCaro2.avif"
},{
    title: "Мулти-Канална Комуникација",
    desc: "Три различни мода на работа вклучувајки и приватни разговори. Отворената multi-channel мрежа го вклучува првиот Mesh Intercom мулти канален систем.",
    image: "/images/accessories/senaLatestCaro3.avif"
},
{
    title: "Јасно Чисти HD Звучници",
    desc: "Моќни и јасни аудио перформанси вградени во комотни кукишта даваат максимален комфорт и аудио уживање. Одлично се вградуваат во кациги со специјално наменети прегради за вакви системи и се лесни за носење. Нудат повеќе волумен, повеќе бас фреквенции и беспрекорна чистина.",
    image: "/images/accessories/senaLatestCaro1.avif"
},
{
    title: "Гласовни Команди",
    desc: "Гласовните команди овозмоѓуваат целосна контрола од одговарање на повиците па се до креирање на групен чет. Подржува 8 различни јазици: Англиски, Француски, Германски, Шпански, Италијански, Кинески, Јапонски и Руски.",
    image: "/images/accessories/senaLatestCaro5.avif"
},
{
    title: "Брзо Полнење и Автоматски Надградувања",
    desc: "100% полна батерија се постигнува со 1 час полнење кое овозможува до 9 часа Mesh непрекинат разговор или 14 часа разговор преку Bluetooth. Уредот може да биде испрограмиран само по себе да се надградува при контакт со Wi-Fi.",
    image: "/images/accessories/senaLatestCaro6.avif"
},
]

const bottomCaroItems: BottomCarousellItemType[] = [{
    id: 'caro1',
    title: "Персонализирајте по Ваш Вкус",
    desc: "Уредот дозволува целосно да го персонализирате по вашите потреби.",
    image: "/images/accessories/senaBottomCaro1.avif"   
},
{
    id: 'caro2',
    title: "Далечински Управувач",
    desc: "Со помош на Bluetooth далечински управувајте и конфигурирајте го уредот.",
    image: "/images/accessories/senaBottomCaro2.avif"   
},
{
    id: 'caro3',
    title: "Подесување на Звук",
    desc: "Конфигуриајте го звукот на вашиот уред според вашите преференци.",
    image: "/images/accessories/senaBottomCaro3.avif"   
},
{
    id: 'caro4',
    title: "Апликација за косристење",
    desc: "Заклучет и отклучете го вашиот уред преку вашиот телефон.",
    image: "/images/accessories/senaBottomCaro4.avif"   
},
{
    id: 'caro5',
    title: "Конфигурирајте ги поставките на каналите",
    desc: "Искористете ја мобилната апликација за поврзување и за да ги конфигурирате калаите за Mesh системот како и вашите приватни Mesh групи.",
    image: "/images/accessories/senaBottomCaro5.avif"   
},
]

const TriumphSenaBluetoothPage = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/accessories/senaHeroBanner.avif"}
        text={`TRIUMPH SENA BLUETOOTH® HEADSET`}
      />

      <section>
        <p className="py-8 md:py-16 m-auto w-11/12 md:w-6/12">
          Во партнерство помеѓу Triumph и Sena беше изработен Bluetooth® headset
          кој работи со поврзување преку My-Triumph системот за поврзување со
          моторот и новиот 7‘ TFT екран и доаѓа со најновата Sena технологија и
          аудио систем од Harman/Kardon.
        </p>
        <div
          style={{
            backgroundImage:
              "url('/images/accessories/senaSection1Banner.avif')",
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover",
            backgroundPosition: "center center",
            height: "90vh",
          }}
        ></div>
      </section>

      <section>
        <div className="text-center m-auto w-11/12 md:w-6/12 py-8 md:py-16">
          <SectionTitleH2 text={"Triumph Sena 50S"} color={"dark"} />
          <p>
            Triumph Sena 50S системот воведува лесен за користење аудио систем
            специјално дизајниран за Triumph моторциклите.
          </p>
        </div>

        <LatestModelsCarousellSection items={latestModelsItems ?? []} showTitle={true}/>
      </section>
      <BottomCarousell items={bottomCaroItems ?? []}/>
    </>
  );
};

export default TriumphSenaBluetoothPage;
