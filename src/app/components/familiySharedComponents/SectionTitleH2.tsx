import React from 'react'

type SectionTitleH2Props = {
    text: string,
    marginBot?: boolean,
    color: 'dark' | 'white'
}

const SectionTitleH2 = ({text, marginBot, color}: SectionTitleH2Props) => {
  return (
    <h2 className={`uppercase font-semibold tracking-tighter my-6 text-2xl ${marginBot ? '': 'mb-5'} ${color === 'white' ? 'text-white' : 'text-black' }`}>{text}</h2>
  )
}

export default SectionTitleH2