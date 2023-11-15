import { faChevronCircleRight, faChevronRight } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import Link from 'next/link'
import React from 'react'

export type NavLinkListingItemsType = {
    text: string,
    link:string
}

type NavLinkListingProps = {
    items: NavLinkListingItemsType[],
    title: string,
    bottomLinkText: string,
    bottomLinkUrl: string
}

const NavLinkListing = ({items = [], title, bottomLinkText, bottomLinkUrl}: NavLinkListingProps) => {
  return (
    <div className='flex flex-col gap-2'>
        <h3 className='border-thin-gray-bottom uppercase font-semibold text-lg mb-3'>{title}</h3>
        <ul className='flex flex-col gap-1 mb-3'>
            {items.map(item => <li key={`${item.text} + ${item.link}`} >
                <Link href={item.link} className='text-sm hover:text-red-800 transition-colors ease-in-out'>{item.text}</Link>
            </li>)}
        </ul>
        <Link href={bottomLinkUrl} className='group uppercase text-md font-medium flex justify-start items-center gap-2 hover:text-red-800 transition-colors ease-in-out'>
            {bottomLinkText}
            <FontAwesomeIcon icon={faChevronRight} color='black' size='xs' className='child group-hover:text-red-800'/>    
        </Link>
    </div>
  )
}

export default NavLinkListing