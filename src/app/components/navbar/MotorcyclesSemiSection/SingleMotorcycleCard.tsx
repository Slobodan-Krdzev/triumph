import Image from "next/image";
import React from "react";

type SingleMorotcycleCardProps = {
  bike: any;
};

const SingleMotorcycleCard = ({ bike }: SingleMorotcycleCardProps) => {
  return (
    <div className="flex justify-start py-2 px-2 rounded-sm items-center border-t-2 border-neutral-500 first:border-none">
      <Image src={bike.gallery.modelImage.src} alt={bike.gallery.modelImage.alt} width={120} height={68} />
      <div>
        <p className="text-md text-black font-medium uppercase">{bike.title}</p>
        <p className="text-sm text-neutral-500">{bike.price}</p>
      </div>
    </div>
  );
};

export default SingleMotorcycleCard;
