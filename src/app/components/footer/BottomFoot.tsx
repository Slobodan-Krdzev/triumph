import Image from "next/image";
import Link from "next/link";
import React from "react";

const BottomFoot = () => {
  return (
    <>
      <div className="py-4 border-b-4 border-b-zinc-900 flex items-center gap-4">
        {/* NEMAT FB */}

        <Link
          href={"https://www.instagram.com/triumphmotorcycles_skopje/"}
          target="_blank"
        >
          <Image
            src={"/instagram.svg"}
            alt={"Instagram Icon"}
            width={20}
            height={20}
          />
        </Link>
        <Link href={"https://twitter.com/OfficialTriumph"} target="_blank">
          <Image
            src={"/twitter.svg"}
            alt={"Instagram Icon"}
            width={20}
            height={20}
          />
        </Link>
        <Link
          href={"https://www.youtube.com/user/OfficialTriumph"}
          target="_blank"
        >
          <Image
            src={"/youtube.svg"}
            alt={"Instagram Icon"}
            width={20}
            height={20}
          />
        </Link>
      </div>

      <div className="pt-4 pb-4 flex justify-between text-neutral-400 font-normal">
        <div className="flex gap-4">
          <Link href={"/global-content/contact-us"} className="text-sm">
            Контакт
          </Link>
          <Link
            href={"/global-content/terms-and-conditions"}
            className="text-sm"
          >
            Легалност
          </Link>
        </div>
        <p className="text-sm">Ⓒ 2023 Thriumph Motorcycles</p>
      </div>
    </>
  );
};

export default BottomFoot;
