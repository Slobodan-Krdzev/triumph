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
  
  return (
    <>
      <LatestCaroV2 items={items} />
      <LatestModelsMobile items={items} showTitle={true} />
    </>
  );
};

export default LatestModelsCarousellSection;
