"use client";
import Image from "next/image";
import { useSearchParams } from "next/navigation";
import React, { Suspense } from "react";
import LoadingState from "../LoadingState";

type BikeModelImageProps = {
  bike: any;
  modalImage?: boolean
};

type ColorType = {
colorName: string,
price: number,
image: string,
base: string,
reversed: string
}

const BikeModelImage = ({ bike, modalImage }: BikeModelImageProps) => {
  const query = useSearchParams();

  // console.log(query.get('color'), 'ovde prima od query');
  console.log('bike color', bike.customizationColors.find((color:ColorType) => color.colorName === query.get('color')));
  
  if (query.get("color") && query.get("reversed") === "true") {
    return (
      <Suspense
        fallback={
          <LoadingState/>
        }
      >
        {/* <Image
          src={
            bike.bikeCollorPalletteGallery[(query.get("color") as string) + "Reversed"]
          }
          alt={bike.title}
          width={modalImage ? 850 : 1124}
          height={76}
        /> */}
        {/* <Image
          src={
            bike.customizationColors.find((color:ColorType) => color.colorName === query.get('color'))
          }
          alt={bike.title ?? "Bike"}
          width={modalImage ? 850 : 1124}
          height={76}
        /> */}
      </Suspense>
    );
  } else {
    return (
      // <Image
      //   src={
      //     query.get("color") === undefined
      //       ? bike.customizationColors.find((color:ColorType) => color.colorName === query.get('color'))
      //       : bike.customizationColors[0].base
      //   }
      //   alt={bike.title}
      //   width={modalImage ? 850 : 1124}
      //   height={376}
      // />
      <Image
        src={
          query.get("color") === undefined
            ? bike.customizationColors.find((color:ColorType) => color.colorName === query.get('color'))
            : bike.customizationColors[0].base
        }
        alt={bike.title}
        width={modalImage ? 850 : 1124}
        height={376}
      />
    );
  }
};

export default BikeModelImage;
