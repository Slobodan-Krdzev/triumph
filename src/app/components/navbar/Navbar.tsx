import React from 'react'
import Prenav from '../Prenav';
import Nav from './Nav';



const Navbar = async () => {
  return (
    <header>
        <Prenav />
        <Nav/>
    </header>
  )
}

export default Navbar;