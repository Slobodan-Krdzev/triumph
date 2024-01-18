import React from "react";
import MobileFooterList from "./MobileFooterList";
import BottomFoot from "../BottomFoot";
import { footerLists } from "../Footer";
import { createFamilies } from "../../helpers/createFooterFamilies";

type MobileFooterProps = {
  familyItems: any[]
}

const MobileFooter = ({familyItems}: MobileFooterProps) => {
  return (
    <>
      <div className="flex flex-col items-start">
        <MobileFooterList list={{title: 'Мoторцикли', items: createFamilies(familyItems)}}/>

        {footerLists.map((list, idx) => (
          <MobileFooterList key={idx} list={list}/>
        ))}
      </div>
      <BottomFoot />
    </>
  );
};

export default MobileFooter;
