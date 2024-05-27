import { createFamilies } from "../../helpers/createFooterFamilies";
import { footerLists } from "../Footer";
import MobileFooterList from "./MobileFooterList";

type MobileFooterProps = {
  familyItems: any[];
};

const MobileFooter = ({ familyItems }: MobileFooterProps) => {
  return (
    <>
      <div className="flex flex-col items-start lg:hidden">
        <MobileFooterList
          list={{ title: "Мoторцикли", items: createFamilies(familyItems) }}
        />

        {footerLists.map((list, idx) => (
          <MobileFooterList key={idx} list={list} />
        ))}
      </div>
    </>
  );
};

export default MobileFooter;
