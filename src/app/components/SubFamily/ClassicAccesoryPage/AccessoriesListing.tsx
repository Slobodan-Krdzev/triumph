import React from "react";
import AccessoryItemWrapper from "./AccessoryItemWrapper";

export type AccessoryItemsType = {
  title: string;
  desc: string;
  itemsList: string[];
  image1?: {
    src: string;
    alt: string;
  };
  image2?: {
    src: string;
    alt: string;
  };
};

type AccessoriesListingProps = {
  items: AccessoryItemsType[];
};

const AccessoriesListing = ({ items = [] }: AccessoriesListingProps) => {
  return (
    <>
      {items.map((item, idx: number) => (
        <AccessoryItemWrapper key={`${item.title} + ${idx}`} item={item} />
      ))}
    </>
  );
};

export default AccessoriesListing;
