import React from "react";

type PageParagraphProps = {
  text: string;
  marginBot?: boolean;
};

const PageParagraph = ({ text, marginBot }: PageParagraphProps) => {
  if (marginBot) {
    return <p className="text-base mb-5">{text}</p>;
  }

  return <p className="text-base">{text}</p>;
};

export default PageParagraph;
