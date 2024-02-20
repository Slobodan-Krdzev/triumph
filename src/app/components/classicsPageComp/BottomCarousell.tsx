"use client";
import "swiper/css";
import { Navigation, Autoplay } from "swiper/modules";
// import 'swiper/css/navigation';
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";

export type BottomCarousellItemType = {
  id: string;
  title: string;
  desc: string;
  image: string;
};

type BottomCarousellProps = {
  items: BottomCarousellItemType[];
};

const BottomCarousell = ({ items }: BottomCarousellProps) => {
  if (items.length > 0) {
    return (
      <section className="py-8 md:py-20 gray-bg">
        <Swiper
          navigation={true}
          modules={[Navigation, Autoplay]}
          tag="div"
          className="text-white bottomCaroSwiper"
          autoplay={{
            delay: 3000,
            disableOnInteraction: true
          }}
        >
          {items.map((item) => (
            <SwiperSlide key={item.id}>
              <div
                className="carousell-classics relative flex flex-col "
                style={{
                  backgroundImage: `url('${item.image}')`,
                  backgroundSize: "cover",
                  backgroundRepeat: "no-repeat",
                  backgroundPosition: "center center",
                  height: "80vh",
                }}
              >
                <div
                  className="text-white z-10 flex flex-col justify-center items-center w-full ml-0 md:ml-20 lg:ml-40 md:w-6/12 lg:w-4/12"
                  // style={{ top: "10%", left: "15%" }}
                >
                  <h3 className="text-2xl md:text-3xl lg:text-5xl tracking-tighter uppercase font-medium mb-4 w-11/12">
                    {item.title}
                  </h3>
                  <p className="text-md leading-5 font-medium md:text-xl lg:text-2xl tracking-tighter w-11/12">
                    {item.desc}
                  </p>
                </div>
              </div>
            </SwiperSlide>
          ))}
        </Swiper>
      </section>
    );
  }

  if(items.length < 0 || items === undefined || items === null) {
    return ""
  }
};

export default BottomCarousell;
