'use client'
import Image from "next/image";
import { useSearchParams } from "next/navigation";
import React from "react";

type ImageProps = {
  bike: any
};

const ImagePreview = ({bike}: ImageProps) => {

  const imageQuery = useSearchParams().get('color')

  return <Image src={bike.bikeCollorPalletteGallery[imageQuery!] ? bike.bikeCollorPalletteGallery[imageQuery!] : bike.gallery.modelImage.src} alt={'image'} width={1100} height={690} />;
};

export default ImagePreview;
