"use client";
import { useSearchParams } from "next/navigation";
import React from "react";

type CustomatizationColorType = {
  colorName: string;
  price: null | number;
  image: string;
  colorCode: string;
};

type PricePreviewerProps = {
  bike: any;
};

const PricePriviewer = ({ bike }: PricePreviewerProps) => {
  const priceQuery = useSearchParams().get("color");

  const handlePriceChange = (startingPrice: number) => {
    const chosenColor = bike.customizationColors.find(
      (color: CustomatizationColorType) =>
        color.colorCode === (priceQuery ?? "color1")
    );

    if (chosenColor.price !== null) {
      return startingPrice + chosenColor.price;
    }

    return startingPrice;
  };

  return (
    <p className="text-4xl font-medium tracking-tighter mb-2 lg:mb-4">
      {handlePriceChange(bike.price)
        ? `€ ${handlePriceChange(bike.price).toLocaleString('en-EN')}`
        : "Наскоро"}
    </p>
  );
};

export default PricePriviewer;
