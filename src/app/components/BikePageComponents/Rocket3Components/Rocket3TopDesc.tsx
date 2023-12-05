import React from 'react'
import PageParagraph from '../../familiySharedComponents/PageParagraph'

type TopInfoType = {
    desc1?: string,
    desc2?: string,
    desc3?: string,
    desc4?: string
}

type Rocket3TopDescProps = {
    info: TopInfoType
}

const Rocket3TopDesc = ({info}: Rocket3TopDescProps) => {
  return (
    <section className={`px-4 py-8 md:py-16 md:px-0 w-full md:w-10/12 lg:w-8/12 m-auto flex flex-col gap-4 font-medium text-center`}>
         {info.desc1 && <PageParagraph text={info.desc1}/>}
         {info.desc2 && <PageParagraph text={info.desc2}/>}   
         {info.desc3 && <PageParagraph text={info.desc3}/>}   
         {info.desc4 && <PageParagraph text={info.desc4}/>}   


    </section>
  )
}

export default Rocket3TopDesc