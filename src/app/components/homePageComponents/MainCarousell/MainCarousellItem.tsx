import React from "react";
import MainBtn from "../../MainBtn";
import Image from "next/image";

type MainCarousellItemType = {
  image?: string;
  video?: string;
  title: string;
  desc: string;
  link1?: {
    url: string;
    text: string;
  };
  link2?: {
    url: string;
    text: string;
  };
};

type MainCarousellItemProps = {
  item: MainCarousellItemType;
};

const MainCarousellItem = ({
  item: { image, video, title, desc, link1, link2 },
}: MainCarousellItemProps) => {
  return (
    <div
      className="relative"
      style={{
        minWidth: "100%",
        backgroundImage: `url('${image}')`,
        backgroundPosition: "center top",
        backgroundRepeat: "no-repeat",
        backgroundSize: "cover",
        height: "auto",
      }}
    >
      <div className="h-full " style={{ width: "100vw" }}>
        {video && (
          <>
            <video
              className="relative object-fill"
              autoPlay
              muted
              loop
              style={{
                height: "auto",
                minWidth: "92%",
              }}
            >
              <source
                className="absolute w-full h-full top-0 left-0"
                src={video}
                type="video/webm"
              />
            </video>
          </>
        )}
        <div className="ml-44 absolute" style={{ top: "15%" }}>
          <h2 className="mb-4 uppercase font-bold text-7xl text-white w-2/4">
            {title}
          </h2>
          <p className="mb-4 w-2/4 text-white text-2xl font-semibold">{desc}</p>
          <div className="flex gap-4">
            {link1 && (
              <MainBtn
                text={link1.text}
                bgBlack={false}
                isLink={true}
                link={link1.url}
              />
            )}
            {link2 && (
              <MainBtn
                text={link2.text}
                bgBlack={true}
                isLink={true}
                link={link2.url}
              />
            )}
          </div>
        </div>
      </div>

      <div className="overlay-carousell-btn w-full h-full flex justify-start pt-40 text-white">
        <div className="ml-20">
          <h2 className="mb-4 uppercase font-bold text-4xl text-white">
            {title}
          </h2>
          <p className="mb-4 w-3/4">{desc}</p>

          <div className="flex gap-4">
            {link1 && (
              <MainBtn
                text={link1.text}
                bgBlack={false}
                isLink={true}
                link={link1.url}
              />
            )}
            {link2 && (
              <MainBtn
                text={link2.text}
                bgBlack={true}
                isLink={true}
                link={link2.url}
              />
            )}
          </div>
        </div>
      </div>
    </div>
  );
};

export default MainCarousellItem;
