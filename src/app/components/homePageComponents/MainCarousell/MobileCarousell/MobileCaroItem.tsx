import React from "react";
import { CarousellItemType } from "../MainCarousell";
import MainBtn from "@/app/components/MainBtn";

type MobiCaroItemProps = {
  item: CarousellItemType;
};

const MobileCaroItem = ({
  item: { image, title, desc, link1, link2 },
}: MobiCaroItemProps) => {
  return (
    <div className="flex flex-col min-w-full gray-bg">
      <div
        style={{
          backgroundImage: `url('${image}')`,
          backgroundPosition: "center",
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat",
          height: "100vh",
        }}
      ></div>
      <div className="gray-bg w-full p-8 text-white">
          <h2 className="uppercase text-3xl font-bold tracking-tighter">{title}</h2>
          <p className="text-lg mb-4 font-medium tracking-tighter">{desc}</p>
          <div className="flex gap-4">
            <MainBtn
              text={link1.text}
              bgBlack={false}
              isLink={true}
              link={link1.url}
            />
            {link2 && (
              <MainBtn
                text={link1.text}
                bgBlack={true}
                isLink={true}
                link={link2.url}
              />
            )}
          </div>
      </div>
    </div>
  );
};

export default MobileCaroItem;
