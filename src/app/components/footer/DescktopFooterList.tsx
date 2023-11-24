import Link from 'next/link'
import React from 'react'
import SectionTitleH2 from '../familiySharedComponents/SectionTitleH2'

type FooterListProps = {
    title: string,
    items: any[]
}

const FooterList = ({title, items}:FooterListProps) => {
  return (
    <div className='basis-1/4'>
        <h4 className='uppercase font-semibold text-2xl mb-4'>{title}</h4>
        <ul>
            {items.map(item => <li key={item.id} className='md:mb-6'><Link href={item.url} className='text-neutral-400 uppercase font-medium text-md'>{item.text}</Link></li>)}
        </ul>
    </div>
  )
}

export default FooterList