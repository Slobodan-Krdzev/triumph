import Image from "next/image";
import React from "react";
import MainBtn from "../MainBtn";
import Link from "next/link";

type DiscoverThriumphCardProps = {
  image: string;
  title: string;
  url: string;
  btnText: string;
};

const DiscoverThriumphCard = ({
  image,
  title,
  url,
  btnText,
}: DiscoverThriumphCardProps) => {
  return (
    <Link
      href={url}
      className="basis-full lg:basis-1/2  second: mb-20 last:mb-0 lg:px-4"
    >
        <div
          className="p-20 md:p-48"
          style={{
            backgroundImage: `url('${image}')`,
            backgroundRepeat: "no-repeat",
            backgroundPosition: "center",
            backgroundSize: "cover",
            content: " ",
          }}
        ></div>
        <div className="pt-4">
          <h2 className="text-xl md:text-2xl uppercase font-semibold mb-4 hover:text-neutral-400 hover:underline">{title}</h2>
          <MainBtn text={btnText} bgBlack={true} isLink={true} link={url}/>
        </div>
      
    </Link>
  );
};

export default DiscoverThriumphCard;
