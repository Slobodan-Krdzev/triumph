"use client";
import Image from "next/image";
import Link from "next/link";
import { useState } from "react";

type CardLinkItemProps = {
  title: string;
  image: string;
  text: string;
  url: string;
};

const CardLinkItem = ({ title, image, text, url }: CardLinkItemProps) => {
  const [isHovered, setIsHovered] = useState(false);

  return (
    <Link
      href={url}
      className="md:basis-1/3 pb-8 last:pb-0 flex flex-col zoom-link-image hover:text-zinc-300 hover:underline"
      onMouseOver={() => setIsHovered(true)}
      onMouseOut={() => setIsHovered(false)}
    >
      <div className="relative">
        <Image src={image} alt={title} width={1500} height={270} />
        {isHovered && (
          <div className="overlay z-1 w-full h-full absolute transform top-0 left-0 right-0 flex justify-center items-center">
            {" "}
            <p className="z-2 text-body font-semibold uppercase text-white ">
              {text}
            </p>
          </div>
        )}
      </div>

      <h2 className="lg:text-xl text-base uppercase font-semibold tracking-tighter my-6">
        {title}
      </h2>
      <p className="lg:text-base text-sm font-semibold uppercase">{text}</p>
    </Link>
  );
};

export default CardLinkItem;
