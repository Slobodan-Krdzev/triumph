import React from 'react'

type SectionTitleH2Props = {
    text: string
}

const SectionTitleH2 = ({text}: SectionTitleH2Props) => {
  return (
    <h2 className="font-semibold mb-10 text-2xl">{text}</h2>
  )
}

export default SectionTitleH2