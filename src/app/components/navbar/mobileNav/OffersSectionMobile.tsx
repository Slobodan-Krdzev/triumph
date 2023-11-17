import { faChevronDown, faChevronLeft, faChevronUp } from '@fortawesome/free-solid-svg-icons';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome';
import { motion } from 'framer-motion';
import Link from 'next/link';
import { useState } from 'react';
import { linkItems } from '../MotorcyclesSemiSection/OffersNav';

type OffersSectionMobileProps = {
    handler: () => void
}

const OffersSectionMobile = ({handler} : OffersSectionMobileProps) => {
    const [menusVisibility, setMenusVisibility] = useState(true);
    
      const handleVisibleMenu = () => setMenusVisibility(!menusVisibility);
    
      return (
        <div>
          <div className="flex justify-start items-center px-8 py-4 gray-bg">
            <button className="basis-1/12" onClick={handler}>
              <FontAwesomeIcon icon={faChevronLeft} />
            </button>
            <p className="uppercase text-md basis-10/12 text-center font-semibold">
              новости
            </p>
            <div className="basis-1/12"></div>
          </div>
          <ul className="px-8 py-4 bg-white text-black">
          <li className="border-thin-gray-bottom">
          <button
            className={`text-sm uppercase py-3 flex w-full justify-between items-center focus:text-red-800 ${menusVisibility ? "border-thin-gray-bottom font-medium" : 'font-light'}`}
            onClick={handleVisibleMenu}
          >
            Понуди
            <FontAwesomeIcon icon={menusVisibility? faChevronUp : faChevronDown} size="sm" color={menusVisibility? 'rgb(153, 27, 27)' : 'grey'}/>

          </button>
          {menusVisibility&& (
            <motion.ul
            className="py-4"
              initial={{ x: "100vw" }}
              animate={{ x: 0 }}
              exit={{ x: "100vw" }}
            >
              {linkItems.map((item, idx) => (
                <li key={`${item.link} + ${idx}`} className="mb-2 uppercase font-medium text-sm">
                  <Link href={item.link}>{item.text}</Link>
                </li>
              ))}
            </motion.ul>
          )}
        </li>
          </ul>
        </div>
      );
    };

export default OffersSectionMobile