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
  configureLink?: boolean;
  model?: string
};

const BikeListingNoSliderCard = ({
  title,
  price,
  link,
  image,
  configureLink,
  model
}: BikeListingNoSliderCardProps) => {
  return (
    <div className="lg:basis-1/4 md:basis-1/2 w-full flex flex-col justify-center items-center text-center px-4">
      <Image src={image.src} alt={image.alt} width={243} height={137} />
      <div className="basis-1/2 flex flex-col justify-between">
        <h3 className="uppercase text-md font-medium mb-2">{title}</h3>
        <p className="text-sm">
          {price === null ? "Цени Наскоро" : `Цени од: ${price}.00€`}
        </p>
        <div className={`mt-2 flex ${configureLink ? "justify-between": "justify-center "}`}>
          <Link href={link} className={`text-red mt-4 pr-4  ${configureLink ? 'w-full text-center basis-1 grow' : 'w-1/2 basis-1/2'}`}>
            {" "}
            Види Детали{" "}
          </Link>

          {configureLink && <Link href={`/configure/bike/${model}`} className="text-red mt-4 pl-4 basis-1/2 w-1/2 border-l border-neutral-500">
            {" "}
            Конфигурирација{" "}
          </Link>}
        </div>
      </div>
    </div>
  );
};

export default BikeListingNoSliderCard;
