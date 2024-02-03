"use client";
import "swiper/css";
import { Navigation } from "swiper/modules";
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
      <section className="py-20 gray-bg">
        <Swiper
          navigation={true}
          modules={[Navigation]}
          tag="div"
          className="text-white "
        >
          {items.map((item) => (
            <SwiperSlide key={item.id}>
              <div
                className="carousell-classics relative"
                style={{
                  backgroundImage: `url('${item.image}')`,
                  backgroundSize: "cover",
                  backgroundRepeat: "no-repeat",
                  backgroundPosition: "center center",
                  minHeight: "80vh",
                }}
              >
                <div
                  className="text-white z-10 absolute lg:w-2/5 md:w-3/5 w-full overflow-visible "
                  style={{ top: "10%", left: "15%" }}
                >
                  <h3 className="text-2xl md:text-3xl lg:text-5xl tracking-tighter uppercase font-medium mb-4">
                    {item.title}
                  </h3>
                  <p className="text-md leading-5 font-medium md:text-xl lg:text-2xl tracking-tighter w-3/4">
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
