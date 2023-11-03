import React from "react";

type PageParagraphProps = {
  text: string;
  marginBot?: boolean;
};

const PageParagraph = ({ text, marginBot }: PageParagraphProps) => {
  if (marginBot) {
    return <p className="md:text-base text-sm mb-5">{text}</p>;
  }

  return <p className="md:text-base text-sm">{text}</p>;
};

export default PageParagraph;
