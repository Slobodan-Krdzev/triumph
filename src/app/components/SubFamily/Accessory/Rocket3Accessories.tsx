import React from 'react'
import { AccessoryItemsType } from '../ClassicAccesoryPage/AccessoriesListing';
import Rocket3AccessoryItemWrapper from './Rocket3AccessoryItemWrapper';

type Rocket3AccessorirsType = {
    items: AccessoryItemsType[]
}

const Rocket3Accessories = ({items}: Rocket3AccessorirsType) => {
    return (
        <>
          {items.map((item, idx: number) => (
            <Rocket3AccessoryItemWrapper key={`${idx} + ${item.title}`} item={item} index={idx}/>
          ))}
        </>
      );
}

export default Rocket3Accessories
