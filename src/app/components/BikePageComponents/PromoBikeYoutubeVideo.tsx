import React from 'react'
import SectionTitleH2 from '../familiySharedComponents/SectionTitleH2'

type PromoBikeYoutubeVideoProps ={
    video: string
    alt: string
}

const PromoBikeYoutubeVideo = ({video, alt}: PromoBikeYoutubeVideoProps) => {
  return (
    <section className='text-center py-4 md:py-8 lg:py-16 border-thin-gray mt-0 lg:my-16'>
        <SectionTitleH2 text={'Детален 360 поглед'} color={'dark'}/>
        <iframe className='w-12/12 md:w-10/12 ld:w-6/12 m-auto' width="1410" height="793" src={video} title={alt}  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    </section>
  )
}

export default PromoBikeYoutubeVideo