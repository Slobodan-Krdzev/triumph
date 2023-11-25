import MainBtn from "../MainBtn";
import LinkItem from "./LinkItem";

type SecondaryNavItemsType = {
  text: string,
  link: string
}

type SecondaryNavBarProps = {
  items: SecondaryNavItemsType[];
  title: string
};

const SecondaryNavBar = ({ items = [],title }: SecondaryNavBarProps) => {
  if (items) {
    return (
      <section className="flex justify-between px-8 outline-gray-1px sticky top-0 bg-white z-50">
        {/* LEFT SIDE */}
        <div className="flex items-center">
          <p className="text-red text-xl font-bold uppercase italic mr-10 tracking-tighter">{title}</p>
          {items.map((item: SecondaryNavItemsType) => <LinkItem key={item.link} link={item.link} text={item.text}/>)}
        </div>
        {/* RIGHT SIDE */}
        <div className="flex items-center">
          <p className="mr-10 uppercase font-semibold text-neutral-800 text-sm">FIND A DEALER</p>
          <MainBtn bgBlack={false} text={'CONFIGURATION'} link={"/configure"}/>
        </div>
      </section>
    );
  }
};

export default SecondaryNavBar;
