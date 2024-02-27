"use client";
import MobileSecondaryNav from "./whiteSecondaryNavBar/MobileSecondary/MobileSecondaryNav";
import SecondaryNavBar, {
  SecondaryNavItemsType,
} from "./whiteSecondaryNavBar/SecondaryNavBar";

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

    return (
      <>
      <SecondaryNavBar
        items={items}
        title={title}
        configurationLink={configLink}
      />
      <MobileSecondaryNav
          items={items}
          title={title}
          configurationLink={configLink}
        />
      </>
    )
};

export default SecondaryNavFamily;
