import React from "react";
import { CarousellItemType } from "../MainCarousell";
import MainBtn from "@/app/components/MainBtn";

type MobiCaroItemProps = {
  item: CarousellItemType;
};

const MobileCaroItem = ({
  item: { imageMobile, title, desc, link1, link2 },
}: MobiCaroItemProps) => {
  return (
    <div className="flex flex-col min-w-full gray-bg ">
      <div
        className="mainCaroMobileItem"
        style={{
          backgroundImage: `url('${imageMobile ?? "/images/triumphLogo.png"}')`,
          backgroundPosition: "center",
          backgroundSize: "cover",
          backgroundRepeat: "no-repeat"
          // height e setiran vo globals
        }}
      ></div>
      <div className="gray-bg w-full py-8 px-8 text-white">
          <h2 className="uppercase text-3xl font-bold tracking-tighter">{title}</h2>
          <p className="text-lg mb-4 font-medium tracking-tighter">{desc}</p>
          <div className="flex flex-col items-start gap-4">
            {link1 && <MainBtn
              text={link1.text ?? 'Откриј Повеќе'}
              bgBlack={false}
              isLink={true}
              link={link1.url}
            />}
            
            {link2 && (
              <MainBtn
                text={link2.text ?? "Откриј Повеќе"}
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
