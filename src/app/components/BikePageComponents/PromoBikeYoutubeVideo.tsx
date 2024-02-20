import React from 'react'
import SectionTitleH2 from '../familiySharedComponents/SectionTitleH2'

type PromoBikeYoutubeVideoProps ={
    video: string
    alt: string,
    bgBlack?: boolean
}

const PromoBikeYoutubeVideo = ({video, alt, bgBlack}: PromoBikeYoutubeVideoProps) => {
  return (
    <section className={`text-center py-8 lg:py-16 border-thin-gray  ${bgBlack ? "bg-black text-white" : ""}`}>
        <SectionTitleH2 text={'Детален 360 поглед'} color={bgBlack ? "white" :'dark'}/>
        <iframe className='w-full md:w-10/12 ld:w-6/12 m-auto' width="1410" height="793" src={video} title={alt}  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    </section>
  )
}

export default PromoBikeYoutubeVideo