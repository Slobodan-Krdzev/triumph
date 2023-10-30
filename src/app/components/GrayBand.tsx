import Image from "next/image";
import Link from "next/link";
import React from "react";

type GrayBandProps = {
  itemOne: {
    text: string;
    url: string;
    icon: string;
  };
  itemTwo: {
    text: string;
    url: string;
    icon: string;
  };
};

const GrayBand = ({ itemOne, itemTwo }: GrayBandProps) => {
  return (
    <section className="gray-bg flex flex-col sm:flex-row py-6 text-gray-300">
      <div className="sm:basis-1/2 sm:border-r-2 border-gray-300 flex justify-center items-center hover:text-gray-50">
        <Link href={itemOne.url} className="flex flex-row sm:flex-col gap-2 justify-center items-center">
          <Image src={itemOne.icon} alt={"Icon"} width={28} height={28} />
          {itemOne.text}
        </Link>
      </div>
      <div className="sm:basis-1/2 flex justify-center items-center hover:text-gray-50">
        <Link href={itemTwo.url} className="flex flex-row lg:flex-col gap-2 justify-center items-center">
          <Image src={itemTwo.icon} alt={"Icon"} width={28} height={28} />
          {itemTwo.text}
        </Link>
      </div>
    </section>
  );
};

export default GrayBand;
