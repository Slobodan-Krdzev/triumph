"use client";
import { faChevronDown, faChevronUp } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { useState } from "react";

type SpecTableListItemType = {
  title: string;
  desc: string;
};

type SpecTableListPropsType = {
  items: SpecTableListItemType[];
  title: string;
  isOpen?: boolean
};

const SpecTableListi = ({ items = [], title, isOpen }: SpecTableListPropsType) => {

  const [isListOpen, setisListOpen] = useState(isOpen === true ? true : false);

  const handleList = () => {
    setisListOpen(!isListOpen);
  };

  return (
    <div className="m-auto lg:w-8/12 md:w-9/12 w-12/12 mb-2">
      <button
        className="bg w-full text-left uppercase text-xl tracking-tighter text-white px-4 py-4 font-semibold flex justify-between"
        onClick={handleList}
      >
        {title}
        <FontAwesomeIcon
          icon={isListOpen ? faChevronUp : faChevronDown}
          color="white"
        />
      </button>
      {isListOpen && (
        <ul className="border-thin">
          {items.map((item) => (
            <li key={item.title} className="flex border-thin-gray-bottom">
              <p className="capitalize py-4 slight-white-bg md:text-md text-sm basis-4/12 md:basis-3/12 px-4 flex justify-start items-center text-neutral-600">
                {item.title}
              </p>
              <p className="capitalize border-thin-left py-4 font-medium md:text-lg text-md basis-8/12 md:basis-9/12 px-4 flex justify-start items-center">
                {item.desc}
              </p>
            </li>
          ))}
        </ul>
      )}
    </div>
  );
};

export default SpecTableListi;
