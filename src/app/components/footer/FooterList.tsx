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
        <SectionTitleH2 text={title} color={'dark'} />
        <ul>
            {items.map(item => <li key={item.id} className='md:mb-6'><Link href={item.url} className='text-neutral-400 uppercase font-medium '>{item.text}</Link></li>)}
        </ul>
    </div>
  )
}

export default FooterList