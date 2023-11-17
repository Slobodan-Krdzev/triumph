'use client'
import React from 'react'
import Prenav from '../Prenav';
import Nav from './Nav';
import { useBreakpoint } from '../helpers/useBreakpoint';
import MobileNav from './mobileNav/MobileNav';

const Navbar = () => {

  const breakpoint = useBreakpoint()

  return (
    <header>
        <Prenav />

        {breakpoint > 768 && <Nav/>}
        {breakpoint <= 768 && <MobileNav/>}
    </header>
  )
}

export default Navbar;