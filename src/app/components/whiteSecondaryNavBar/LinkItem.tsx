import Link from "next/link";

type LinkItemProps = {
  link: string;
  text: string;
};

const LinkItem = ({ link, text }: LinkItemProps) => {
  return (
    <Link
      className="mr-7 uppercase font-semibold text-neutral-600 text-sm tracking-tight underline-hover-effect py-2"
      href={link}
    >
      {text}
    </Link>
  );
};

export default LinkItem;
