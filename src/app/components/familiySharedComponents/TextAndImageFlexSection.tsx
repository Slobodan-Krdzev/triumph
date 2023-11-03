import Image from 'next/image'
import PageParagraph from './PageParagraph'
import SectionTitleH2 from './SectionTitleH2'

type TextAndImageProps = {
    title: string
    textMain: string,
    textSecondary?: string,
    image: {
        src: string,
        alt: string
    },
    imageLeft?: boolean
}

const TextAndImageFlexSection = ({title, textMain, textSecondary, image, imageLeft}: TextAndImageProps) => {
  return (
    <section className='flex flex-col lg:flex-row justify-between items-center'>
        <div className={`basis-1/2 ${imageLeft ? 'order-1': 'order-2'}`}>
            <Image src={image.src} alt={image.alt} height={0} width={1000}/>
        </div>
        <div className='flex flex-col justify-center lg:p-28 p-4 py-8 basis-1/2'>
            <SectionTitleH2 text={title} color={'dark'}/>
            <PageParagraph marginBot={true} text={textMain}/>

            {textSecondary && <PageParagraph text={textSecondary}/>}
        
        </div>
    </section>
  )
}

export default TextAndImageFlexSection