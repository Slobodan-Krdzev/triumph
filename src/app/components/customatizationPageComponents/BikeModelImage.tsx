"use client";
import Image from "next/image";
import { useSearchParams } from "next/navigation";
import React, { Suspense } from "react";
import LoadingState from "../LoadingState";

type BikeModelImageProps = {
  bike: any;
  modalImage?: boolean;
};

const BikeModelImage = ({ bike, modalImage }: BikeModelImageProps) => {
  const query = useSearchParams();

  if (query.get("color") && query.get("reversed") === "true") {
    return (
      <Suspense fallback={<LoadingState />}>
        <Image
          priority={true}
          placeholder={'blur'}
          blurDataURL="/images/triumphLogo.png"
          src={
            bike.bikeCollorPalletteGallery[
              (query.get("color") as string) + "Reversed"
            ]
          }
          alt={bike?.title ?? "Bike"}
          width={modalImage ? 850 : 1124}
          height={76}
        />
      </Suspense>
    );
  } else {
    return (
      <Suspense fallback={<LoadingState />}>
        <Image
          priority={true}
          placeholder={'blur'}
          blurDataURL="/images/triumphLogo.png"
          src={
            query.get("color")
              ? bike.bikeCollorPalletteGallery[query.get("color") as string]
              : bike.bikeCollorPalletteGallery?.color1
          }
          alt={bike.title ?? "Triumph Bike"}
          width={modalImage ? 850 : 1124}
          height={376}
        />
      </Suspense>
    );
  }
};

export default BikeModelImage;
