"use client";
import { useState } from "react";
import LatestCaroV2 from "./LatestCaroV2";
import LatestModelsMobile from "./LatestModelsMobile";

export type LatestModelsCarousellItemType = {
  title: string;
  desc: string;
  url?: string;
  image: string;
};

type LatesModelsCarousellSectionProps = {
  items: LatestModelsCarousellItemType[];
  showTitle: boolean;
};

const LatestModelsCarousellSection = ({
  items,
  showTitle,
}: LatesModelsCarousellSectionProps) => {
  // const [activeIndex, setActiveIndex] = useState(0);

  // const updateIndex = (newIndex: number) => {
  //   if (newIndex < 0) {
  //     newIndex = 0;
  //   } else if (newIndex >= items.length) {
  //     newIndex = items.length - 1;
  //   }

  //   setActiveIndex(newIndex);
  // };

  return (
    <>
      <LatestCaroV2 items={items} />
      <LatestModelsMobile items={items} showTitle={true} />
    </>
  );
};

export default LatestModelsCarousellSection;
