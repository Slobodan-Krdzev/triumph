"use client";
import React from "react";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
// import 'swiper/css/navigation';
import "swiper/swiper-bundle.css";
import { Swiper, SwiperSlide } from "swiper/react";
import { useBreakpoint } from "../../helpers/useBreakpoint";
import SectionTitleH2 from "../../familiySharedComponents/SectionTitleH2";

export type YoutubeVideoCarousellItemType = {
  src: string;
  title: string;
};

type YoutubeVideoCarousellProps = {
  items: YoutubeVideoCarousellItemType[];
};

const YoutubeVideoCarousell = ({ items }: YoutubeVideoCarousellProps) => {
  const breakpoint = useBreakpoint();



  return (
    <section className="py-8 md:py-16  border-b-2 border-neutral-500">
      <div className="py-8 md:py-16 text-center">
      <SectionTitleH2 text={"Видео Галерија"} color={"dark"} />

      </div>
      <Swiper
        navigation={true}
        modules={[Navigation, Pagination]}
        tag="div"
        className="text-white "
      >
        {items.map((item, idx:number) => (
          <SwiperSlide key={`${item.title} + ${idx}`}>
            <iframe
              width={(breakpoint >= 1024) ? 1903 : "100%"}
              height={(breakpoint >= 1024) ? 1070 : 300}
              src={item.src}
              title={item.title}
              allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
              allowFullScreen
            ></iframe>
          </SwiperSlide>
        ))}
      </Swiper>
    </section>
  );
};

export default YoutubeVideoCarousell;
