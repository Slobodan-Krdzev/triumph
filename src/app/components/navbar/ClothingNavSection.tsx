import React from "react";
import ClothingNavCard, { ClothingCardProps } from "./ClothingNavCard";

export const clothingItems: ClothingCardProps[] = [
  {
    title: "Основни За Возење",
    desc: "Сите ние знаеме колку е важно да се има соодветна опрема за возење на сите временски услови. Овие наши препораки се секогаш спремни за било каква авантура.",
    link: "/clothing-collection/riding-essentials",
    image: {
      src: "/images/ridingGearImage.avif",
      alt: "Riding Gear",
    },
  },
  {
    title: "Секојдневна Облека",
    desc: "Изледајте со стил со нашите колекции инспирирани од нашето наследство.",
    link: "/clothing-collection/casual",
    image: {
      src: "/images/casualGearImage.avif",
      alt: "Casual Gear",
    },
  },
  {
    title: "Облека за Возење Мотор",
    desc: "Облека и Опрема спремни за врвни перформанси кои ги надополнуваат нашите мотори.Еволвирани заедно со секој мотор.",
    link: "/clothing-collection/motorcycles",
    image: {
      src: "/images/adventureGearImage.avif",
      alt: "Motor Riding Gear",
    },
  },
  {
    title: "Каталог - 2023",
    desc: "Погледнете ја нашата колекција - Дизајнирана од возачи за возачи.",
    link: "https://media.triumphmotorcycles.co.uk/image/upload/f_auto/q_auto/sitecoremedialibrary/media-library/files/ecom/catalogues/2023/ss23%20catalogues/tml%20clothing%20customer%20catalogue%202023%20english.pdf?_gl=1*1740tn7*_ga*Mjk5MzMyMjE0LjE2OTYzNTc2MTE.*_ga_2YJFH6KBX6*MTcwODQzMjY4OC4yNDQuMS4xNzA4NDMyNzcwLjQwLjAuMA..",
    image: {
      src: "/images/catalogue2023Image.avif",
      alt: "Каталог - 2023",
    },
  },
  {
    title: "Чизми и Ракавици - Каталог 2023",
    desc: "Погледнете ја нашата колекција за чизми и ракавици - Дизајнирана од возачи за возачи..",
    link: "https://media.triumphmotorcycles.co.uk/image/upload/f_auto/q_auto/sitecoremedialibrary/media-library/files/ecom/catalogues/2023/boots%20and%20gloves/technical%20gloves%20%20rider%20footwear%20catalogue%20%20english.pdf?_gl=1*1740tn7*_ga*Mjk5MzMyMjE0LjE2OTYzNTc2MTE.*_ga_2YJFH6KBX6*MTcwODQzMjY4OC4yNDQuMS4xNzA4NDMyNzcwLjQwLjAuMA..",
    image: {
      src: "/images/bootsCatalogue2023.avif",
      alt: "Motor Riding Gear",
    },
  },
];

const ClothingNavSection = () => {
  return (
    <div className="flex justify-start gap-6 p-8 lg:px-52">
      {clothingItems.map((item) => (
          <ClothingNavCard
            key={item.title}
            title={item.title}
            desc={item.desc}
            link={item.link}
            image={{
              src: item.image.src,
              alt: item.image.alt,
            }}
          />
        ))}
    </div>
  );
};

export default ClothingNavSection;
