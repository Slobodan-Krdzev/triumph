import React from 'react'

type FamilyPageTitleProps = {
    text: string
}

const FamilyPageTitle = ({text}: FamilyPageTitleProps) => {
  return (
    <h1 className='lg:text-7xl text-4xl uppercase font-semibold mb-3'>{text}</h1>
  )
}

export default FamilyPageTitle