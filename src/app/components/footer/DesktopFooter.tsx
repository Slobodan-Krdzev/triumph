import BottomFoot from "./BottomFoot";
import FooterList from "./DescktopFooterList";
import { footerLists } from "./Footer";



const DesktopFooter = () => {
  return (
    <>
      <div className="flex ">
        {footerLists.map((list) => (
          <FooterList key={list.title} title={list.title} items={list.items} />
        ))}
      </div>
      <BottomFoot />
    </>
  );
};

export default DesktopFooter;
