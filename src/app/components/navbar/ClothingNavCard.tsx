import Image from "next/image";
import Link from "next/link";
import React from "react";

export type ClothingCardProps = {
  title: string;
  desc: string;
  link: string;
  image: {
    src: string;
    alt: string;
  };
};

const ClothingNavCard = ({
  title,
  desc,
  image: { src, alt },
  link,
}: ClothingCardProps) => {
  return (
    <Link href={link} className="group basis-3/12">
      <div className="overflow-hidden">
        <Image
          src={src}
          alt={alt}
          width={297}
          height={167}
          className="child mb-4 group-hover:scale-105 transition-transform ease-in-out delay-75"
        />
      </div>
      <h4 className="child text-md uppercase font-semibold mb-1 group-hover:text-red-800">
        {title}
      </h4>
      <p className="sm:text-sm text-xs">{desc}</p>
    </Link>
  );
};

export default ClothingNavCard;
