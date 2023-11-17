import { faChevronLeft } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import React from "react";

const MotorcycleSectionMobile = () => {
  return (
    <div>
      <div className="flex justify-start items-center px-8 py-4 gray-bg">
        <button className="basis-1/12">
          <FontAwesomeIcon icon={faChevronLeft} />
        </button>
        <p className="uppercase text-md basis-10/12 text-center font-semibold">
          МоторИ
        </p>
        <div className="basis-1/12"></div>
      </div>
      <div className="px-8 py-4 bg-white text-black">
        <ul>
            
        </ul>
      </div>
    </div>
  );
};

export default MotorcycleSectionMobile;
