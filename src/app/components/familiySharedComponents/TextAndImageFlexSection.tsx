import Image from "next/image";
import PageParagraph from "./PageParagraph";
import SectionTitleH2 from "./SectionTitleH2";

type TextAndImageProps = {
  title?: string;
  textMain: string;
  textSecondary?: string;
  image: {
    src: string;
    alt: string;
  };
  imageLeft?: boolean;
  textWhite?: boolean;
  textCenter?: boolean
};

const TextAndImageFlexSection = ({
  title,
  textMain,
  textSecondary,
  image,
  imageLeft,
  textWhite,
  textCenter
}: TextAndImageProps) => {
  return (
    <section className={`flex flex-col lg:flex-row justify-between items-center lg:gap-8 gap-4 ${textWhite ? "text-white" : ""}`}>
      <div className={`basis-1/2 ${imageLeft ? "" : "order-2"}`}>
        <Image src={image.src} alt={image.alt} height={0} width={1000} />
      </div>
      <div className="basis-1/2">
        <div className={`lg:w-5/6 text-center ${textCenter ? "md:text-center" : "md:text-left"}`}>
          <SectionTitleH2 text={title ?? ''} color={textWhite ? "white" : "dark"} />
          <PageParagraph marginBot={true} text={textMain} />

          {textSecondary && <PageParagraph text={textSecondary} marginBot={false}/>}
        </div>
      </div>
    </section>
  );
};

export default TextAndImageFlexSection;
