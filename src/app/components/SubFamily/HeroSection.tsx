import React from "react";
import FamilySloganAnimation from "./FamilySloganAnimation";

type HeroSectionProps = {
  video: string;
  model: string;
  slogans: any[]
};

const HeroSection = ({ video, model, slogans = []}: HeroSectionProps) => {
  return (
    <section className="relative">
        <video autoPlay muted loop className="w-full" src={video}>

        </video>
        
        <div className="absolute text-white flex flex-col items-center" style={{top: '40%', left: '50%' ,transform: 'translate(-50%, -50%)'}}>
            <p className="text-3xl font-medium uppercase border-b-4 border-red-600 pb-4 inline">{model}</p>
            <FamilySloganAnimation slogans={slogans}/>
        </div>
    </section>
  );
};

export default HeroSection;