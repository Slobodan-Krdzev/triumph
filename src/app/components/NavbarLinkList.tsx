import React from 'react'
import NavListItem from './NavListItem'

type Props = {
    action: (type:string) => void
}

const navLinks = ['Motorcycles', 'Accessories', 'Clothing', "Owners", 'Discover']

const NavbarLinkList = ({action}: Props) => {
  return (
    <ul className='text-white flex uppercase'>
        {navLinks.map(link => <NavListItem key={link} text={link} action={action}/>)}
    </ul>
  )
}

export default NavbarLinkList;