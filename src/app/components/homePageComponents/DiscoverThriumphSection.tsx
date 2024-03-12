import React from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import DiscoverThriumphCard from "./DiscoverThriumphCard";

const items = [
  {
    title: "Прочитајте ги најновите вести",
    image: "/images/home/latestNews.avif",
    url: "https://triumph-mediakits.com/en/news/news-listing.html",
    btnText: "Најнови Вести",
  },
  {
    title: "Рушење рекорди - пишување историја ",
    image: "/images/home/races.avif",
    url: "https://triumph-mediakits.com/en/news/news-listing.html?newstags=tagger-motorsport",
    btnText: "трки",
  },
  {
    title: "Интерактивни искуства",
    image: "/images/home/experience.avif",
    url: "https://triumph-mediakits.com/en/contacts.html",
    btnText: "искуства",
  },
  {
    title: 'Независни Thriumph искуства',
    image: "/images/home/reviews.avif",
    url: "https://triumph-mediakits.com/en/contacts.html",
    btnText: "искуства",
  },
];

const DiscoverThriumphSection = () => {
  return (
    <section className="px-4 lg:py-16 w-full md:w-10/12 m-auto">
      <div className="text-center mb-16">
        <SectionTitleH2 text={'Откријте го Triumph'} color={"dark"} />
      </div>

      <div className="flex flex-wrap ">
        {items.map((item) => (
          <DiscoverThriumphCard
            key={item.title}
            image={item.image}
            title={item.title}
            url={item.url}
            btnText={item.btnText}
            targetBlank
          />
        ))}
      </div>
    </section>
  );
};

export default DiscoverThriumphSection;
