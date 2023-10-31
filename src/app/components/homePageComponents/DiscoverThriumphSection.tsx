import React from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import DiscoverThriumphCard from "./DiscoverThriumphCard";

const items = [
  {
    title: "Прочитајте ги најновите вести",
    image: "/images/home/latestNews.avif",
    url: "/for-the-ride/news",
    btnText: "Најнови Вести",
  },
  {
    title: "Рушење рекорди. пишување историја ",
    image: "/images/home/races.avif",
    url: "/for-the-ride/racing",
    btnText: "трки",
  },
  {
    title: "Интерактивни искуства",
    image: "/images/home/experience.avif",
    url: "/for-the-ride/experiences",
    btnText: "искуства",
  },
  {
    title: 'Независни "Thriumph" искуства',
    image: "/images/home/reviews.avif",
    url: "/for-the-ride/experiences",
    btnText: "искуства",
  },
];

const DiscoverThriumphSection = () => {
  return (
    <section className="px-4 lg:py-16">
      <div className="text-center mb-16">
        <SectionTitleH2 text={'Откријте го "Thriumph"'} color={"dark"} />
      </div>

      <div className="flex flex-wrap">
        {items.map((item) => (
          <DiscoverThriumphCard
            key={item.title}
            image={item.image}
            title={item.title}
            url={item.url}
            btnText={item.btnText}
          />
        ))}
      </div>
    </section>
  );
};

export default DiscoverThriumphSection;
