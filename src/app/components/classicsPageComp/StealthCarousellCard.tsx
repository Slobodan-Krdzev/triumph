import { faChevronRight } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Image from "next/image";
import Link from "next/link";
import React from "react";

type StealthCarousellCardProps = {
  title: string;
  price: string;
  url: string;
  image: string;
};

const StealthCarousellCard = ({
  title,
  price,
  url,
  image,
}: StealthCarousellCardProps) => {
  return (
    <div className="px-6 flex flex-col items-center justify-center text-center">
      <Link href={url}>
        <Image
          src={image}
          alt={title}
          width={358}
          height={201}
        />
          <p className="font-semibold uppercase hover:text-red-900 transition-colors ease-in-out mb-2">
            Детали <FontAwesomeIcon size={"sm"} icon={faChevronRight} />
          </p>
          <p className="text-sm capitalize">{title}</p>
          <p className="text-sm">{price}</p>
      </Link>
    </div>
  );
};

export default StealthCarousellCard;
