import MainBtn from "../MainBtn";
import LinkItem from "./LinkItem";

type SecondaryNavBarProps = {
  items: any[];
};

const SecondaryNavBar = ({ items = [] }: SecondaryNavBarProps) => {
  if (items) {
    return (
      <section className="flex justify-between px-8 outline-gray-1px sticky top-0 bg-white">
        {/* LEFT SIDE */}
        <div className="flex items-center">
          <p className="text-red text-xl font-bold uppercase italic mr-10 tracking-tighter">Adventure</p>
          {items.map((item: any) => <LinkItem key={item.id} model={item.model}/>)}
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
