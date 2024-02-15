"use client";
import React from "react";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
import "swiper/css";
// import 'swiper/css/navigation';
import "swiper/swiper-bundle.css";
import { Swiper, SwiperSlide } from "swiper/react";
import { YoutubeVideoCarousellItemType } from "../SubFamily/YoutubeVideoCarousell/YoutubeVideoCarousell";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import { useBreakpoint } from "../helpers/useBreakpoint";


type YoutubeVideoCarousellProps = {
    images: string[]
};

const BikeGalleyCarousell = ({ images }: YoutubeVideoCarousellProps) => {
  const breakpoint = useBreakpoint();

  console.log(images);

  const swiperParams = {
    slidesPerView: 1,
    spaceBetween: 10,
    loop: true,
    pagination: {
      clickable: true,
      renderBullet: function (index: any, className: any) {
        return `<span class="${className}"></span>`;
      },
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false, // Allow manual navigation to stop autoplay
    },
  };
  

  return (
    <section className="py-8 md:py-16">
      <div className="py-8 md:py-16 text-center">
      <SectionTitleH2 text={"Галерија"} color={"dark"} />

      </div>
      <Swiper 
        {...swiperParams}
        navigation
        modules={[Navigation, Pagination, Autoplay]}
        tag="div"
        className="text-white "
      >
        {images.map((item, idx:number) => (
          <SwiperSlide key={`${item} + ${idx}`}>
            <section style={{
                backgroundImage: `url("${item}")`,
                backgroundPosition: 'center center',
                backgroundSize: 'cover',
                backgroundRepeat: 'no-repeat',
                height: '100vh'
            }}>

            </section>
          </SwiperSlide>
        ))}
      </Swiper>
    </section>
  );
};

export default BikeGalleyCarousell;
