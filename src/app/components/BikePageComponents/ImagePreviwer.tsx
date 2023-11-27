
import React from 'react'

type ImagePreviewerProps = {
    deg: number,
    image: string,
    alt: string
}

const ImagePreviwer = ({deg, image}: ImagePreviewerProps) => {
  return (
    <div
      style={{ overflow: 'hidden', position:'relative' }}
    >
      <div
       style={{ 
        backgroundImage: `url('${image}')`,
        backgroundRepeat: 'no-repeat',
        backgroundSize: 'cover',
        backgroundPosition: 'center', 
        width: '2000%',
        height: '80vh',
        transform: `translateX(-${deg}%)`,
        transition: 'transform 0.2s ease-out'}} > 
      {/* <Image
        src={image}
        alt={alt}
        width={1100}
        height={690}
        className="transition-transform ease-in-out"
      /> */}
      </div>
      
    </div>
  )
}

export default ImagePreviwer