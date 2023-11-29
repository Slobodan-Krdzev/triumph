import React from 'react'

type SecondaryPagesHeroSectionProps = {
    bannerImage:string,
    subFamilyTitle: string,
    text: string
}

const SecondaryPagesHeroSection = ({bannerImage, subFamilyTitle, text}: SecondaryPagesHeroSectionProps) => {


  return (
    <section
          style={{
            backgroundImage: `url("${bannerImage}")`,
            backgroundSize: "cover",
            backgroundPosition: "center",
            backgroundRepeat: "no-repeat",
            height: "85vh",
            overflow: "hidden",
          }}
        >
          <div className="flex justify-center items-center w-full h-full overlay">
            <div className="lg:w-6/12 md:w-9/12 w-full px-4 m-auto flex flex-col justify-center items-center text-white gap-6">
              <h1 className="md:text-3xl font-semibold text-md border-b-4 border-red-600 capitalize pb-2">
                {subFamilyTitle}
              </h1>
              <p className="md:text-5xl text-4xl uppercase font-semibold tracking-tighter text-center w-full">
                {text}
              </p>
            </div>
          </div>
        </section>
  )
}

export default SecondaryPagesHeroSection