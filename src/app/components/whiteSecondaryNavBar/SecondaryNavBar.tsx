import Link from "next/link";
import React from "react";
import BtnLink from "../BtnLink";

type SecondaryNavBarProps = {
  items: any[];
};

const SecondaryNavBar = ({ items = [] }: SecondaryNavBarProps) => {
  if (items) {
    return (
      <section className="flex justify-between px-10 py-1">
        {/* LEFT SIDE */}
        <div className="flex items-center">
          <p className="text-rose-700 font-bold uppercase italic">Adventure</p>
          {items.map((item: any) => (
            <Link
              key={item.itemId}
              className="ml-10 uppercase font-semibold"
              href={`/motorcycles/adventure/${item.model}`}
            >
              {item.model}
            </Link>
          ))}
        </div>
        {/* RIGHT SIDE */}
        <div className="flex items-center">
          <p className="mr-10 uppercase font-semibold">FIND A DEALER</p>
          <BtnLink text={'CONFIGURATION'} link={"/configure"}/>
        </div>
      </section>
    );
  }
};

export default SecondaryNavBar;
