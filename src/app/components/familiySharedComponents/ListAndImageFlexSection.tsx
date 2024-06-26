import Image from "next/image";
import SectionTitleH2 from "./SectionTitleH2";

type TextAndImageProps = {
  title?: string;
  listItems: string[];
  image?: {
    src: string;
    alt: string;
  };
  video?: string
  imageLeft?: boolean;
  textWhite?: boolean;
  textCenter?: boolean
};

const ListAndImageFlexSection = ({
  title,
  listItems,
  image,
  imageLeft,
  textWhite,
  textCenter,
  video
}: TextAndImageProps) => {

  if(image) {
    return (
      <section className={`flex flex-col lg:flex-row justify-between items-center lg:gap-8 gap-4 ${textWhite ? "text-white" : ""} px-4 md:px-8 lg:px-16`}>
        <div className={`basis-1/2 ${imageLeft ? "" : "order-2"}`}>
          <Image src={image?.src ?? ''} alt={image?.alt ?? ""} height={0} width={1000} />
        </div>
        <div className="basis-1/2">
          <div className={`lg:w-5/6 text-center ${textCenter ? "md:text-center" : "md:text-left"}`}>
            <SectionTitleH2 text={title ?? ''} color={textWhite ? "white" : "dark"} />
            <ul className="list-disc marker:text-red-600 marker:text-2xl">
              {listItems.map(item => <li className="text-md md:text-xl" key={item}>{item}</li>)}
            </ul>
          </div>
        </div>
      </section>
    );
  }

  if(video) {
    return (
      <section className={`flex flex-col lg:flex-row justify-between items-center lg:gap-8 gap-4 ${textWhite ? "text-white" : ""}`}>
        <div className={`w-full md:basis-1/2 ${imageLeft ? "" : "order-2"}`}>
        <iframe width="955" height="537" src={video} title="Triumph Service - UK" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowFullScreen className="w-full"></iframe>
        </div>
        <div className="basis-1/2">
          <div className={`lg:w-5/6 text-center ${textCenter ? "md:text-center" : "md:text-left"}`}>
            <SectionTitleH2 text={title ?? ''} color={textWhite ? "white" : "dark"} />
            <ul className="list-disc marker:text-red-600 marker:text-2xl w-11/12 m-auto">
              {listItems.map(item => <li className="text-md md:text-xl" key={item}>{item}</li>)}
            </ul>
          </div>
        </div>
      </section>
    );
  
  }
  
};

export default ListAndImageFlexSection;
