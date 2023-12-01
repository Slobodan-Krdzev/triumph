"use client";
import React from "react";
import LatestModelsCarousellSection, { LatestModelsCarousellItemType } from "../../homePageComponents/LatestModelsCarousellSection";
import { useBreakpoint } from "../../helpers/useBreakpoint";
import LatestModelsMobile from "../../homePageComponents/LatestModelsMobile";

type BikePageCarousellProps = {
  items: LatestModelsCarousellItemType[];
};

const BikePageCarousell = ({ items = [] }: BikePageCarousellProps) => {
  const breakpoint = useBreakpoint();

  if (breakpoint >= 1024) {
    return <LatestModelsCarousellSection items={items} showTitle={false}/>;
  }

  if (breakpoint < 1024) {
    return <LatestModelsMobile items={items} showTitle={false}/>;
  }
};

export default BikePageCarousell;
