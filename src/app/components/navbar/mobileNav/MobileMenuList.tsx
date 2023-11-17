import { faChevronUp, faChevronDown } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { motion } from 'framer-motion'
import Link from 'next/link'
import React from 'react'
import { linkItemsAccessory } from '../AccessoriesNavSection'
import { NavLinkListingItemsType } from '../NavLinkListing'

type MobileMenuListProps = {
    handler: (menuType: string) => void,
    state: boolean
      menuTitle: string,
      menuType: string,
      menuItems: NavLinkListingItemsType[]
}

const MobileMenuList = ({handler, state, menuTitle, menuType, menuItems = []}: MobileMenuListProps) => {
  return (
    <li className="border-thin-gray-bottom">
          <button
            className={`text-md uppercase py-3 flex w-full justify-between items-center focus:text-red-800 ${state ? "border-thin-gray-bottom font-medium" : 'font-light'}`}
            onClick={() => handler(menuType)}
          >
            {menuTitle}
            <FontAwesomeIcon icon={state ? faChevronUp : faChevronDown} size="sm" color={state ? 'rgb(153, 27, 27)' : 'grey'}/>

          </button>
          {state && (
            <motion.ul
            className="py-4"
              initial={{ x: "100vw" }}
              animate={{ x: 0 }}
              exit={{ x: "100vw" }}
            >
              {menuItems.map((item, idx) => (
                <li key={`${item.link} + ${idx}`} className="mb-2 uppercase font-medium last:mb-0">
                  <Link href={item.link}>{item.text}</Link>
                </li>
              ))}
            </motion.ul>
          )}
        </li>
  )
}

export default MobileMenuList