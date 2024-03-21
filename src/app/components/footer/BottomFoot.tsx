import Image from "next/image";
import Link from "next/link";
import React from "react";

const BottomFoot = () => {
  return (
    <>
      <div className="py-4 border-thin-gray-top flex items-center gap-4">
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
          <Link href={"/dealer"} className="text-sm">
            Контакт
          </Link>
          <Link
            href={"/global-content/terms-and-conditions"}
            className="text-sm"
          >
            Легалност
          </Link>
        </div>

        <div className="hidden md:block ">
          <Link
            href={"https://zicgroupbpo.com/"}
            className="flex justify-between gap-x-2"
            target="_blank"
          >
            <span>Powered By:</span>
            <Image
              src={"/zicLogo.png"}
              alt="Изработка ZIC-Group"
              width={110}
              height={20}
            />
          </Link>
        </div>

        <p className="text-sm">Ⓒ 2024 Thriumph Motorcycles</p>
      </div>
      <div className="md:hidden text-neutral-400 font-normal">
          <Link
            href={"https://zicgroupbpo.com/"}
            className="flex justify-center gap-x-2"
            target="_blank"
          >
            <span>Powered By:</span>
            <Image
              src={"/zicLogo.png"}
              alt="Изработка ZIC-Group"
              width={110}
              height={20}
            />
          </Link>
        </div>
    </>
  );
};

export default BottomFoot;
