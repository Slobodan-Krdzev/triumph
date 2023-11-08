"use client"
import React from 'react'
import { useBreakpoint } from './useBreakpoint'
import DesktopFooter from './DesktopFooter'

const Footer = () => {

    const breakpoint = useBreakpoint()


  return (
    <footer>
        {breakpoint > 1024 ? <DesktopFooter/> : ''}
    </footer>
  )
}

export default Footer