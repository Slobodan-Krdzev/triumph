import React from "react";
import MobileFooterList from "./MobileFooterList";
import BottomFoot from "../BottomFoot";
import { footerLists } from "../Footer";

const MobileFooter = () => {
  return (
    <>
      <div className="flex flex-col items-start">
        {footerLists.map((list, idx) => (
          <MobileFooterList key={idx} list={list} />
        ))}
      </div>
      <BottomFoot />
    </>
  );
};

export default MobileFooter;
