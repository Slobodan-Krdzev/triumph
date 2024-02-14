import React from "react";

type TitleWithLineProps = {
  text: string;
};

const TitleWithLineThrough = ({ text }: TitleWithLineProps) => {
  return (
    <div className="relative bg-inherit pt-4 md:pt-8">
      <h2 className="bg-inherit text-2xl md:text-4xl lg:text-7xl xl:text;-8xl uppercase font-bold text-center relative z-10 text-black w-5/12 m-auto bg-white">
        {text}
      </h2>
      <div
        className={`absolute top-1/2 left-0 w-1/2 h-1 bg-red-600 transform -translate-y-1/2`}
      ></div>
      <div
        className={`absolute top-1/2 right-0 w-1/2 h-1 bg-red-600 transform -translate-y-1/2`}
      ></div>
    </div>
  );
};

export default TitleWithLineThrough;
