"use client";
import Image from "next/image";
import { useSearchParams } from "next/navigation";
import React from "react";
import { ColorType } from "../customatizationPageComponents/BikeModelImage";

type ImageProps = {
  bike: any;
};

const ImagePreview = ({ bike }: ImageProps) => {
  const imageQuery = useSearchParams().get("color");

  return (
    <Image
      src={
        imageQuery === null
          ? bike.customizationColors[0].base ?? "/images/triumphLogo.png"
          : bike.customizationColors.find(
              (color: ColorType) => color.colorName === imageQuery
            ).base ?? "/images/triumphLogo.png"
      }
      alt={imageQuery ?? "Triumph Bike"}
      width={1100}
      height={690}
    />
  );
};

export default ImagePreview;
