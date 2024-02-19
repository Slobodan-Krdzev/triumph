"use client"
import Image from "next/image";
import { usePathname, useRouter, useSearchParams } from "next/navigation";
import React from "react";

type SingleMorotcycleCardProps = {
  bike: any;
};

const SingleMotorcycleCard = ({ bike }: SingleMorotcycleCardProps) => {

  const router = useRouter()
  const pathname = usePathname()
  const queries = useSearchParams().get('navItem')

  const handleBikeSelect = () => {

    router.push(`${pathname}?navItem=${queries}&bikeID=${bike.id}`,{scroll: false})
  }

  return (
    <button onClick={handleBikeSelect} className="flex w-full gap-4 justify-start py-2 px-2 items-center border-thin-gray first:border-none hover:">
      <Image src={bike.gallery.modelImage.src} alt={bike.gallery.modelImage.alt ?? "Bike Image"} width={120} height={68} />
      <div className="text-start">
        <p className="text-md text-black font-medium uppercase">{bike.title}</p>
        <p className="text-sm text-neutral-500">Цена:  {bike.price ? `€ ${bike.price}.00` : "Наскоро"}</p>
      </div>
    </button>
  );
};

export default SingleMotorcycleCard;
