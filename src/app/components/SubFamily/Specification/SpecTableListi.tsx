import React from "react";

type SpecTableListItemType = {
    title: string,
    desc: string
}

type SpecTableListPropsType = {
  items: SpecTableListItemType[];
  title: string;
};

const SpecTableListi = ({ items = [], title }: SpecTableListPropsType) => {
  return (
    <div className="m-auto lg:w-8/12 md:w-9/12 w-12/12">
        <p className="bg uppercase text-2xl tracking-tighter text-white px-4 py-4 font-semibold">{title}</p>
      <ul className="border-thin">
        {items.map(item => <li key={item.title} className="flex border-thin-gray-bottom">
            <p className="capitalize py-4 slight-white-bg text-md basis-3/12 px-4 flex justify-start items-center text-neutral-600">{item.title}</p>
            <p className="capitalize border-thin-left py-4 font-medium text-lg basis-9/12 px-4 flex justify-start items-center">{item.desc}</p>
        </li>)}
      </ul>
    </div>
  );
};

export default SpecTableListi;
