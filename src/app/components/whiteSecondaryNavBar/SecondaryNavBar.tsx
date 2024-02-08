import Link from "next/link";
import MainBtn from "../MainBtn";
import LinkItem from "./LinkItem";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faChevronRight } from "@fortawesome/free-solid-svg-icons";
import Title from "./Title";

export type SecondaryNavItemsType = {
  text: string;
  link: string;
};

type SecondaryNavBarProps = {
  items: SecondaryNavItemsType[];
  title: string | string[];
  configurationLink?: string[] | string;
};

const SecondaryNavBar = ({
  items = [],
  title,
  configurationLink,
}: SecondaryNavBarProps) => {
  
  if (items) {
    return (
      <section
        className="flex justify-between px-8 outline-gray-1px sticky top-0 bg-white "
        style={{ zIndex: 40 }}
      >
        {/* LEFT SIDE */}
        <div className="flex items-center gap-8">
          <Title text={title.toString()} />
          {items.map((item: SecondaryNavItemsType) => (
            <LinkItem key={item.link} link={item.link} text={item.text} />
          ))}
        </div>
        {/* RIGHT SIDE */}
        {configurationLink && (
          <div className="flex items-center py-1">
            <Link
              href={"/dealer"}
              className="mr-10 upercase font-semibold text-neutral-800 text-sm"
            >
              КОНТАКТ
              <FontAwesomeIcon
                icon={faChevronRight}
                size="xs"
                className={`${title.toString() === 'Off Road' ? "text-yellow-300" : "text-red-800"} ml-2`}
              />
            </Link>
            <MainBtn
              bgBlack={false}
              text={"КОНФИГУРАЦИЈА"}
              isLink={true}
              link={`${configurationLink}`}
            />
          </div>
        )}
      </section>
    );
  }
};

export default SecondaryNavBar;
