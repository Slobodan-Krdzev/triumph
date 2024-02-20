import React from 'react'

type YouTubePromoType = {
    video: string
}

const YouTubePromo = ({video}:YouTubePromoType) => {
  return (
    <section className='flex justify-center py-4 md:py-8 lg:py-16 m-auto w-11/12 md:w-10/12 lg:w-8/12'>
        <iframe width={"100%"} height={600} src={video} title="New Tiger Sport 660 Features and Benefits" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
    </section>
  )
}

export default YouTubePromo