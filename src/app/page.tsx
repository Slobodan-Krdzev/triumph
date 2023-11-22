import BanerAndCTASection from "./components/BanerAndCTASection";
import GrayBand from "./components/GrayBand";
import CardLinkItem from "./components/homePageComponents/CardLinkItem";
import DiscoverThriumphSection from "./components/homePageComponents/DiscoverThriumphSection";
import LatestModelsCarousellSection from "./components/homePageComponents/LatestModelsCarousellSection";
import MainCarousell from "./components/homePageComponents/MainCarousell/MainCarousell";
import { MAINCAROUSELLITEMS } from "./constants/constants";
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
    image: "/images/home/TotalPeaceImg.avif",
    text: "Понуди и Финансирање",
    url: "/owners/total-care",
  },
];

export default async function Home() {

    try {
      const mainCarousellItemsRes = await fetch(`${MAINCAROUSELLITEMS}`)
      const mainCarousellItems = await mainCarousellItemsRes.json()

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
              url: "/dealers/dealer-search",
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
    
          <section className="pb-16 flex flex-col md:flex-row md:px-8 px-4 md:gap-4">
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
          <LatestModelsCarousellSection />
          <DiscoverThriumphSection />
        </>
      );
    } catch {
      'err'
    }

  
}
