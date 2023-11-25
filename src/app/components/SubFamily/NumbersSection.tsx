import React from "react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";

type ShortSpecType = {
  info: string;
  data: string;
};

type NumbersSectionPropsType = {
  model: string;
  specNumbers: ShortSpecType[];
};

const NumbersSection = ({ model, specNumbers }: NumbersSectionPropsType) => {
  return (
    <section className="py-4 md:py-8 lg:py-16 flex flex-col justify-center items-center">
      <div className="text-center">
        <SectionTitleH2 text={`${model} во броеви`} color={"dark"} />
      </div>
      <div className="flex justify-center px-4 md:gap-28 gap-4 md:mt-8 flex-wrap flex-col md:flex-row">
        {specNumbers.map((spec) => (
          <div key={spec.data} className="flex gap-2 justify-center  flex-col md:flex-row">
            <h3 className="md:text-6xl text-4xl font-semibold border-b-4 border-red-600">
              {spec.data}
            </h3>
            <span className="uppercase font-light tracking-tighter">
              {spec.info}
            </span>
          </div>
        ))}
      </div>
    </section>
  );
};

export default NumbersSection;
