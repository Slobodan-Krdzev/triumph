import Link from "next/link";
import { formulateSubFamilyTitleOnBanner } from "../helpers/formulateSubFamilyTilteOnBanner";

type LinkItemProps = {
  link: string;
  text: string;
};

const LinkItem = ({ link, text }: LinkItemProps) => {
  return (
    <Link
      className=" uppercase font-semibold text-neutral-600 text-sm tracking-tight underline-hover-effect py-2"
      href={link}
    >
      {formulateSubFamilyTitleOnBanner(text)}
    </Link>
  );
};

export default LinkItem;
