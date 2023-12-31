"use client";
import Image from "next/image";
import { useSearchParams } from "next/navigation";
import React from "react";

type BikeModelImageProps = {
    bike: any
}

const BikeModelImage = ({bike}: BikeModelImageProps) => {

    const query = useSearchParams()

    if((query.get('color')) && query.get('reversed') === 'true'){

      return (
        <Image
          src={bike.bikeCollorPalletteGallery[(query.get('color') as string) + 'Reversed']}
          alt={bike.title}
          width={1124}
          height={76}
        />
      );
    }else {
      return (
        <Image
          src={query.get('color') ? bike.bikeCollorPalletteGallery[query.get('color') as string] : bike.bikeCollorPalletteGallery.color1 }
          alt={bike.title}
          width={1124}
          height={376}
        />
      );
    }
  
};

export default BikeModelImage;
