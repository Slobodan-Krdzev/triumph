"use client";
import Image from "next/image";
import { useSearchParams } from "next/navigation";
import React, { Suspense } from "react";
import LoadingState from "../LoadingState";

type BikeModelImageProps = {
  bike: any;
};

const BikeModelImage = ({ bike }: BikeModelImageProps) => {
  const query = useSearchParams();

  if (query.get("color") && query.get("reversed") === "true") {
    return (
      <Suspense
        fallback={
          <LoadingState/>
        }
      >
        <Image
          src={
            bike.bikeCollorPalletteGallery[
              (query.get("color") as string) + "Reversed"
            ]
          }
          alt={bike.title}
          width={1124}
          height={76}
        />
      </Suspense>
    );
  } else {
    return (
      <Image
        src={
          query.get("color")
            ? bike.bikeCollorPalletteGallery[query.get("color") as string]
            : bike.bikeCollorPalletteGallery.color1
        }
        alt={bike.title}
        width={1124}
        height={376}
      />
    );
  }
};

export default BikeModelImage;
