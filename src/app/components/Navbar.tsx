import React from 'react'
import Prenav from './Prenav';
import Nav from './Nav';

type Props = {}

const Navbar = async (props: Props) => {
  return (
    <header>
        <Prenav />
        <Nav />
    </header>
  )
}

export default Navbar;