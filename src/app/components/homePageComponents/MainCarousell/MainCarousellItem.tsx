import Image from 'next/image';
import React from 'react'

const MainCarousellItem = ({image, alt}: any) => {
    return (
        <div className='border'
        style={{
            width: '96%'
        }}>
            {/* <Image src={image} alt={alt} width={600} height={800}/> */}
          <img src={image} alt={alt} />
        </div>
      );
}

export default MainCarousellItem