import BanerAndCTASection from "./components/BanerAndCTASection";
import GrayBand from "./components/GrayBand";
import CardLinkItem from "./components/homePageComponents/CardLinkItem";
import DiscoverThriumphSection from "./components/homePageComponents/DiscoverThriumphSection";
import LatestModelsCarousellSection from "./components/homePageComponents/LatestModelsCarousellSection";
import MainCarousell from "./components/homePageComponents/MainCarousell/MainCarousell";
import { LATESTCAROUSELLITEMS, MAINCAROUSELLITEMS } from "./constants/constants";
import { HomeCardLinkType } from "./types/HomeTypes/types";

const linkCardsSection: HomeCardLinkType[] = [
  {
    title: 'Вашиот "Thriump" од соништата, поблиску од било кога',
    image: "/images/home/discoverBikesImg.avif",
    text: "Истражи ги моделите",
    url: "/configure",
  },
  {
    title: 'Погледнете ја нашата "Perfect Ride" понуда',
    image: "/images/home/perfectRideImg.avif",
    text: "Понуди и Финансирање",
    url: "/latest-offers",
  },
  {
    title: 'Со "Thriumph" до тотален душевен спокој',
    image: "/images/home/totalPeaceImg.avif",
    text: "За Сопственици",
    url: "/owners",
  },
];


// const mainCaroItems =  [
//   {
//     video: "/images/home/mainCarousell/tiger1200CaroVideo.webm",
//     image: null,
//     imageMobile: "/images/home/mainCarousell/tiger1200CaroImageMobile.avif",
//     title: "Новата Tiger 1200 Серија",
//     desc: "Возвишете ја вашата авантура на повисоко ниво.",
//     link1: {
//       url: "/motorcycles/adventure/tiger-1200-gt",
//       text: "Tiger 1200 GT"
//     },
//     link2: {
//       url: "/motorcycles/adventure/tiger-1200-rally",
//       text: "Tiger 1200 Rally"
//     }
//   },
//   {
//     video: "/images/home/mainCarousell/offRoadCaroVideo.webm",
//     image: null,
//     imageMobile: "/images/home/mainCarousell/offRoadMainCaroMobile.avif",
//     title: "All In - All Out",
//     desc: "Новата TF 250-X е тука. Triumph влегува во мотокрос светот.",
//     link1: {
//       url: "/motorcycles/off-road/tf-250-x",
//       text: "Погледни ја Серијата"
//     }
//   },
//   {
//     video: null,
//     image: "/images/home/mainCarousell/daytona.avif",
//     imageMobile: "/images/home/mainCarousell/daytonaMobile.avif",
//     title: "Новaтa Daytona 660",
//     desc: "Динамична ДНК со нов карактер.",
//     link1: {
//       url: "/motorcycles/sport/daytona-660",
//       text: "Погледни ја Серијата"
//     }
//   },
//   {
//     video: "/images/home/mainCarousell/thruxtonCaroVideo.webm",
//     image: "/images/home/mainCarousell/thruxtonCaroImg.avif",
//     imageMobile: "/images/home/mainCarousell/stealthCaroImageMobile.avif",
//     title: "Новата Thruxton Final Edition",
//     desc: "За крај на една ера - Thruxton Final Edition",
//     link1: {
//       url: "/motorcycles/classics/thruxton-rs",
//       text: "Погледни ја Серијата"
//     }
//   },
//   {
//     video: null,
//     image: "/images/home/mainCarousell/speed400CaroImage.avif",
//     imageMobile: "/images/home/mainCarousell/speed400CaroImageMobile.avif",
//     title: "Нови Попусти, Нови Цени",
//     desc: "Погледнете ги новите цени за Speed 400 & Scrambler 400 X",
//     link1: {
//       url: "/motorcycles/classics/speed-400",
//       text: "Speed 400"
//     },
//     link2: {
//       url: "/motorcycles/classics/scrambler-400-x",
//       text: "Scrambler 400 X"
//     }
//   },
//   {
//     video: "/images/home/mainCarousell/scrambler1200CaroVideo.webm",
//     image: "/images/home/mainCarousell/scrambler1200CaroImage.avif",
//     imageMobile: "/images/home/mainCarousell/scrambler1200CaroImage.avif",
//     title: "Направени за секој терен",
//     desc: "Новите Scrambler 1200 XE & X",
//     link1: {
//       url: "/motorcycles/classics/scrambler-1200",
//       text: "Погледни ја Серијата"
//     }
//   },
//   {
//     video: "/images/home/mainCarousell/tigerCaroVideo.webm",
//     image: "/images/home/mainCarousell/tigerCaroImage.avif",
//     imageMobile: "/images/home/mainCarousell/tigerCaroImageMobile.avif",
//     title: "Tiger 900 Серија",
//     desc: "Новиот Tiger 900 повторно повторно се искачи на врвот и стана репер за останатите мотори од авантуристички карактер. Откријте го новиот Tiger 900.",
//     link1: {
//       url: "/motorcycles/adventure/tiger-900",
//       text: "Погледни ја Серијата"
//     },
//     link2: {
//       url: "/configure/bike/tiger-900",
//       text: "Конфигурација"
//     }
//   },
//   {
//     video: "/images/home/mainCarousell/stealthEditionsCaroVideo.webm",
//     image: "/images/home/mainCarousell/stealthCaroImage.avif",
//     imageMobile: "/images/home/mainCarousell/stealthCaroImageMobile.avif",
//     title: "Драматичен Custom Стил",
//     desc: "Новата Triumph Stealth Серија",
//     link1: {
//       url: "/motorcycles/classics/stealth-editions",
//       text: "Погледни ја Серијата"
//     }
//   }
// ]

export default async function Home() {

  console.log(process.env.API_ENPOINT, 'TUKA ENDPOINT');
  

    try {
      const mainCarousellItemsRes = await fetch(`${MAINCAROUSELLITEMS}`, {next: {revalidate: 3000}})
      const mainCarousellItems = await mainCarousellItemsRes.json()

      const latestCarousellItemsRes = await fetch(`${LATESTCAROUSELLITEMS}`, {next: {revalidate: 3000}})
      const latestCarousellitems = await latestCarousellItemsRes.json()

      return (
        <>
        <MainCarousell items={mainCarousellItems}/>
          <GrayBand
            itemOne={{
              text: "Конфигурации",
              url: "/configure",
              icon: "/icon-configurator.svg",
            }}
            itemTwo={{
              text: "Контакт",
              url: "/dealer",
              icon: "/pin.svg",
            }}
          />
    
          <section className="py-16 text-center">
            <h1 className="md:text-6xl text-4xl font-semibold mb-12">
              Добредојдовте
            </h1>
            <h2 className="md:text-2xl text-xl uppercase font-semibold tracking-tighter">
              Каде би сакале да започнете?
            </h2>
          </section>
    
          <section className="pb-16 flex flex-col md:flex-row md:px-8 px-4 md:gap-4 w-full md:w-10/12 m-auto">
            {linkCardsSection.map((card) => (
              <CardLinkItem
                key={card.title}
                title={card.title}
                image={card.image}
                text={card.text}
                url={card.url}
              />
            ))}
          </section>
    
          <BanerAndCTASection
            text={"Конфигурирајте го вашиот перфектен мотор"}
            image={"/images/bigBannerImg.avif"}
            link={"/configure"}
            btnText={"Конфигурирај"}
          />
          <LatestModelsCarousellSection items={latestCarousellitems} showTitle={true}/>
          <DiscoverThriumphSection />
        </>
      );
    } catch {
      'err'
    }

  
}
