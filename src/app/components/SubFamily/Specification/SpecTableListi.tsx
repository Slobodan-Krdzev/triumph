"use client";
import { faChevronDown, faChevronUp } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { motion } from "framer-motion";
import { useState } from "react";

type SpecTableListItemType = {
  title: string;
  desc: string;
};

type SpecTableListPropsType = {
  items: SpecTableListItemType[];
  title: string;
  isOpen?: boolean;
};

const SpecTableListi = ({
  items = [],
  title,
  isOpen,
}: SpecTableListPropsType) => {
  const [isListOpen, setisListOpen] = useState(isOpen);

  const handleList = () => {
    setisListOpen(!isListOpen);
  };

  return (
    <div className="m-auto lg:w-8/12 md:w-9/12 w-12/12 mb-2">
      <button
        className="bg w-full text-left uppercase text-xl tracking-tighter text-white px-4 py-4 font-semibold flex justify-between"
        onClick={handleList}
        style={{
          zIndex: 9999
        }}
      >
        {title}
        <FontAwesomeIcon
          icon={isListOpen ? faChevronUp : faChevronDown}
          color="white"
        />
      </button>
      {isListOpen && (
        <motion.ul
        initial={{ height: 0, opacity: 0 }}
        animate={{ height: "100%", opacity: 1 }}
        exit={{ height: 0, opacity: 0 }}
        transition={{ duration: 0.5 }}
          className="border-thin"
        >
          {items.map((item) => (
            <li key={item.title} className="flex border-thin-gray-bottom">
              <p className="capitalize py-4 slight-white-bg md:text-md text-sm w-4/12 md:basis-3/12 px-2 md:px-4 flex justify-start items-center text-neutral-600">
                {item.title}
              </p>
              <p className="border-thin-left py-4 font-medium md:text-lg text-sm w-8/12 md:basis-9/12 px-2 md:px-4 flex justify-start items-center">
                {item.desc}
              </p>
            </li>
          ))}
        </motion.ul>
      )}
    </div>
  );
};

export default SpecTableListi;
