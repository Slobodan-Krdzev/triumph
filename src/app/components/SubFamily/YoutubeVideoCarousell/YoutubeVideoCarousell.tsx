"use client";
import React from "react";
import { Navigation, Pagination } from "swiper/modules";
import "swiper/css";
// import 'swiper/css/navigation';
import "swiper/swiper-bundle.css";
import { Swiper, SwiperSlide } from "swiper/react";
import { useBreakpoint } from "../../helpers/useBreakpoint";

type YoutubeVideoCarousellItemType = {
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
      <Swiper
        navigation={true}
        modules={[Navigation, Pagination]}
        tag="div"
        className="text-white "
      >
        {items.map((item) => (
          <SwiperSlide key={item.title}>
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
