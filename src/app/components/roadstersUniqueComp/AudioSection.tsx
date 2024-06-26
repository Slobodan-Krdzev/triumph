import { faVolumeHigh } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import Image from "next/image";
import AudioItem from "./AudioItem";

type AudioSectionProps = {
  audio: string,
  title: string,
  desc: string,
  logo?: string,
  model: string
}

const AudioSection = ({audio, title, desc, logo, model}:AudioSectionProps) => {

  return (
    <section className="lg:px-8 px-4 md:py-12  bg">
      <div className="flex flex-col lg:flex-row justify-between m-auto w-full md:w-10/12">
      <div className="lg:basis-1/2 basis-1 text-white lg:py-28 lg:px-20 py-8">
        <h3 className="md:text-5xl text-2xl uppercase font-semibold md:mb-8 mb-4">
          {title}
        </h3>
        <p className="mb-4 md:text-xl text-sm">
          {desc} 
        </p>
        <p className="mb-4 md:text-2xl text-sm uppercase font-bold tracking-tighter">{model.split("-").join(' ')}</p>
        {logo && <Image
          src={logo}
          alt={"Logo"}
          width={160}
          height={44}
          className="my-8"
        />}
        
        <p>
          <FontAwesomeIcon icon={faVolumeHigh} /> За подобро искуство користете
          слушалки.
        </p>
      </div>
        <AudioItem audio={audio}/>
      </div>
      
    </section>
  );
};

export default AudioSection;
