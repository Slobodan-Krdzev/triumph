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
    <section className="gray-bg flex flex-col sm:flex-row py-6 text-gray-300 gap-4">
      <div className="sm:basis-1/2 border-b-2 sm:border-b-0 sm:border-r-2 border-gray-400 flex justify-center items-center hover:text-gray-50 pb-4 sm:pb-0">
        <Link href={itemOne.url} className="flex flex-row  gap-2 justify-center items-center">
          <Image src={itemOne.icon} alt={"Icon"} width={28} height={28} />
          {itemOne.text}
        </Link>
      </div>
      <div className="sm:basis-1/2 flex justify-center items-center hover:text-gray-50">
        <Link href={itemTwo.url} className="flex flex-row gap-2 justify-center items-center">
          <Image src={itemTwo.icon} alt={"Icon"} width={28} height={28} />
          {itemTwo.text}
        </Link>
      </div>
    </section>
  );
};

export default GrayBand;
