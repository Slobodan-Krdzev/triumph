import React from 'react'

type SectionTitleH2Props = {
    text: string,
    marginBot?: boolean
}

const SectionTitleH2 = ({text, marginBot}: SectionTitleH2Props) => {
  return (
    <h2 className={`font-semibold text-2xl ${marginBot ? '': 'mb-5'}`}>{text}</h2>
  )
}

export default SectionTitleH2