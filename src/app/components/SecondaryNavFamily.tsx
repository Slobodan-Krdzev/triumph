"use client";
import React from "react";
import { useBreakpoint } from "./helpers/useBreakpoint";
import SecondaryNavBar, {
  SecondaryNavItemsType,
} from "./whiteSecondaryNavBar/SecondaryNavBar";
import MobileSecondaryNav from "./whiteSecondaryNavBar/MobileSecondary/MobileSecondaryNav";

type SecondaryNavFamily = {
  items: SecondaryNavItemsType[];
  title: string | string[];
  configLink: string[] | string;
};

const SecondaryNavFamily = ({
  items = [],
  title,
  configLink,
}: SecondaryNavFamily) => {
  const breakpoint = useBreakpoint();

  if (breakpoint >= 1024) {
    return (
      <SecondaryNavBar
        items={items}
        title={title}
        configurationLink={configLink}
      />
    );
  }

  if(breakpoint < 1024){
    return (
        <MobileSecondaryNav
          items={items}
          title={title}
          configurationLink={configLink}
        />
    )
  }
};

export default SecondaryNavFamily;
