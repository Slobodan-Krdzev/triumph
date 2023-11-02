import Image from "next/image";
import Link from "next/link";
import React from "react";

type BikeListingNoSliderCardProps = {
  title: string;
  price: string;
  link: string;
  image: {
    src: string;
    alt: string;
  };
};

const BikeListingNoSliderCard = ({
  title,
  price,
  link,
  image,
}: BikeListingNoSliderCardProps) => {
  return (
    <div className="lg:basis-1/4 flex flex-col justify-center items-center text-center px-4">
      <Image src={image.src} alt={image.alt} width={243} height={137} />
      <div className="basis-1/2 flex flex-col justify-between">
        <h3 className="uppercase text-md font-medium mb-2">{title}</h3>
        <p className="text-sm">Price From € {price}</p>
        <Link href={link} className="text-red mt-4">
          {" "}
          Детали{" "}
        </Link>
      </div>
    </div>
  );
};

export default BikeListingNoSliderCard;
