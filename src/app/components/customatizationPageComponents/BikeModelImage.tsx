"use client";
import Image from "next/image";
import { useSearchParams } from "next/navigation";
import React from "react";

type BikeModelImageProps = {
    bike: any
}

const BikeModelImage = ({bike}: BikeModelImageProps) => {

    const query = useSearchParams()

    console.log('QUERY', query.get('color'));
    
  return (
    <Image
      src={bike.bikeCollorPalletteGallery[query.get('color') as string]}
      alt={bike.title}
      width={824}
      height={376}
    />
  );
};

export default BikeModelImage;
