"use client";
import React, { useRef, useState } from "react";

type AudioItemPropsType = {
  audio:string
}

const AudioItem = ({audio}: AudioItemPropsType) => {
  const [isAudioPlaying, setIsAudioPlaying] = useState(false);
  const audioTag = useRef<HTMLAudioElement>(null);

  const togglePlay = () => {
    if (audioTag.current!.paused) {
      audioTag.current!.play();
      setIsAudioPlaying(true);
    } else {
      audioTag.current!.pause();
      setIsAudioPlaying(false);
    }
  };

  return (
    <div
      className="lg:basis-1/2 basis-1 text-white flex justify-center items-center sm:py-60 bg-contain p-10 "
      style={{
        backgroundImage: `url('/images/roadsters/audioBG.svg')`,
        backgroundRepeat: "no-repeat",
        backgroundPosition: "center center",
      }}
    >
      <button className="red-bg-color h-9 w-9 leading-9 flex justify-center items-center text-white p-14 rounded-full" 
        onClick={togglePlay}>
        <p>{isAudioPlaying ? "STOP" : "START"}</p>
      </button>
      <audio controls className="hidden" ref={audioTag}>
        <source src={audio} type="audio/mpeg" />
      </audio>
    </div>
  );
};

export default AudioItem;
