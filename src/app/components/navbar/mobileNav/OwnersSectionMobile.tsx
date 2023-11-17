import { faChevronLeft, faLocationPin } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import Link from 'next/link'
import { useState } from 'react'
import { linkItemsQuickLinksOwners, linkItemsTriumph } from '../OwnersNavSection'
import MobileMenuList from './MobileMenuList'

type OwnersSectionProps = {
  handler: () => void
}

const OwnersSectionMobile = ({handler}: OwnersSectionProps) => {

  const [menusVisibility, setMenusVisibility] = useState({
    yourTriumph: false,
    links: false,
  });

  const handleVisibleMenu = (menu: "yourTriumph"  | "links") => {
    switch (menu) {
      case "yourTriumph":
        setMenusVisibility({
          yourTriumph: !menusVisibility.yourTriumph,
          links: false,
        });
        break;
      case "links":
        setMenusVisibility({
          yourTriumph: false,
          links: !menusVisibility.links,
        });
        break;
      default:
        break;
    }
  };

  return (
    <div>
      <div className="flex justify-start items-center px-8 py-4 gray-bg">
        <button className="basis-1/12" onClick={handler}>
          <FontAwesomeIcon icon={faChevronLeft} />
        </button>
        <p className="uppercase text-md basis-10/12 text-center font-semibold">
          СОПСТВЕНИЦИ
        </p>
        <div className="basis-1/12"></div>
      </div>
      <ul className="px-8 py-4 bg-white text-black">
        <MobileMenuList
          handler={() => handleVisibleMenu("yourTriumph")}
          state={menusVisibility.yourTriumph}
          menuTitle={"Вашиот Triumph"}
          menuType={"yourTriumph"}
          menuItems={linkItemsTriumph}
        />

        <MobileMenuList
          handler={() => handleVisibleMenu("links")}
          state={menusVisibility.links}
          menuTitle={"Најбарани Линкови"}
          menuType={"links"}
          menuItems={linkItemsQuickLinksOwners}
        />

      </ul>

      <Link href={'/dealers/dealer-search'} className='text-black ml-8 text-sm'>
        <FontAwesomeIcon icon={faLocationPin} className='mr-2'/>
          Контакт
      </Link>
    </div>
  )
}

export default OwnersSectionMobile