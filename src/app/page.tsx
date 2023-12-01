import BanerAndCTASection from "./components/BanerAndCTASection";
import GrayBand from "./components/GrayBand";
import CardLinkItem from "./components/homePageComponents/CardLinkItem";
import DiscoverThriumphSection from "./components/homePageComponents/DiscoverThriumphSection";
import LatestModelsCarousellSection, { LatestModelsCarousellItemType } from "./components/homePageComponents/LatestModelsCarousellSection";
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

export const carousellItems: LatestModelsCarousellItemType[] = [
  {
    title: "SCRAMBLER 1200",
    desc: "Authentic Scrambler style with class-defining adventure ready capability; the Scrambler 1200 is the real deal. The latest editions are even more accessible and ready for the everyday, weekend escapism and pure adventure.",
    url: "/motorcycles/classic/bonneville-scrambler-1200",
    image: "/images/home/scrambler1200LatestModelsCarousell.avif",
  },
  {
    title: "TIGER 900 ARAGON EDITIONS",
    desc: "Inspired by the dominant, race-winning performance of the Tiger 900 Rally Pro at the 2022 Baja Aragón rally.",
    url: "/motorcycles/adventure/tiger-900",
    image: "/images/home/tiger900AragonLatestModelsCarousell.avif",
  },
  {
    title: "SPEED 400",
    desc: "Born into a peerless bloodline, the Speed 400 has Triumph’s unique Modern Classic roadster design in its DNA.",
    url: "/motorcycles/classic/speed-400",
    image: "/images/home/speed400LatestModelsCarousell.avif",
  },
  {
    title: "SCRAMBLER 400 X",
    desc: "Beautifully balanced, effortlessly agile. The Scrambler 400 X is built for all riders and all terrains.",
    url: "/motorcycles/classic/scrambler-400-x-2024",
    image: "/images/home/scrambler400XLatestModelsCarousell.avif",
  },
];

export default async function Home() {

    try {
      const mainCarousellItemsRes = await fetch(`${MAINCAROUSELLITEMS}`, {cache: 'no-store'})
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
          <LatestModelsCarousellSection items={carousellItems} showTitle={true}/>
          <DiscoverThriumphSection />
        </>
      );
    } catch {
      'err'
    }

  
}
