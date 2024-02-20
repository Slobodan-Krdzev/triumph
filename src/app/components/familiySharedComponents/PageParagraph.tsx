import React from "react";

type PageParagraphProps = {
  text: string;
  marginBot?: boolean;
};

const PageParagraph = ({ text, marginBot }: PageParagraphProps) => {
  if (marginBot) {
    return <p className="lg:text-xl text-md mb-5">{text}</p>;
  }

  return <p className="lg:text-xl text-md">{text}</p>;
};

export default PageParagraph;
