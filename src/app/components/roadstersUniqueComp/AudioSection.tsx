import React from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import Image from "next/image";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faVolumeHigh } from "@fortawesome/free-solid-svg-icons";
import AudioItem from "./AudioItem";

const AudioSection = () => {

    

  return (
    <section className="lg:px-8 px-4 md:py-12 flex flex-col lg:flex-row justify-between bg">
      <div className="lg:basis-1/2 basis-1 text-white lg:py-28 lg:px-20 py-8">
        <h3 className="md:text-4xl text-2xl uppercase font-semibold md:mb-8 mb-4">
          БОГАТ ДЛАБОК ТРИ ЦИЛИНДРИ ЗВУК
        </h3>
        <p className="mb-4 md:text-base text-sm">
          Street Triple RS има почист и попрефинет звук благодарение на системот
          со двоен катализатор и јаглеродниот врв на издувните цевки.
        </p>
        <p className="mb-4 md:text-base text-sm">Triumph Street Triple RS 765cc</p>
        <Image
          src={"/images/roadsters/logoAudioSection.png"}
          alt={"Logo"}
          width={160}
          height={44}
          className="my-8"
        />
        <p>
          <FontAwesomeIcon icon={faVolumeHigh} /> За подобро искуство користете
          слушалки.
        </p>
      </div>
        <AudioItem/>
    </section>
  );
};

export default AudioSection;
