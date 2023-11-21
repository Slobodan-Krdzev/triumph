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
    link: "/clothing-collection/motorcycle",
    image: {
      src: "/images/adventureGearImage.avif",
      alt: "Motor Riding Gear",
    },
  },
];

const ClothingNavSection = () => {
  return (
    <div className="flex justify-start gap-6 p-8">
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
