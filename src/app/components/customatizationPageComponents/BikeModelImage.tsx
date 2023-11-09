"use client";
import Image from "next/image";
import { useSearchParams } from "next/navigation";
import React from "react";

type BikeModelImageProps = {
    bike: any
}

const BikeModelImage = ({bike}: BikeModelImageProps) => {

    const query = useSearchParams()

  return (
    <Image
      src={query.get('color') ? bike.bikeCollorPalletteGallery[query.get('color') as string] : bike.bikeCollorPalletteGallery.default }
      alt={bike.title}
      width={824}
      height={376}
    />
  );
};

export default BikeModelImage;
