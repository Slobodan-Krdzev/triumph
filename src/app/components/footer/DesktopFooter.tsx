import { createFamilies } from "../helpers/createFooterFamilies";
import FooterList from "./DescktopFooterList";
import { footerLists } from "./Footer";

type DesktopFooterProps = {
  familyItems: any[];
};

const DesktopFooter = ({ familyItems }: DesktopFooterProps) => {
  
  return (
    <>
      <div className="lg:flex hidden">
        <FooterList
          title={"Моторцикли"}
          items={createFamilies(familyItems) ?? []}
        />

        {footerLists.map((list) => (
          <FooterList key={list.title} title={list.title} items={list.items} />
        ))}
      </div>
    </>
  );
};

export default DesktopFooter;
