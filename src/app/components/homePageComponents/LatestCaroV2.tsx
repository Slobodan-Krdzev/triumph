import React from "react";
import "swiper/css";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
// import 'swiper/css/navigation';
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import MainBtn from "../MainBtn";

type LatestCaroV2Props = {
  items: any[];
};

const LatestCaroV2 = ({ items }: LatestCaroV2Props) => {
  return (
    <section className="hidden lg:block py-8 lg:my-16">
      <Swiper
        navigation={true}
        modules={[Navigation, Autoplay]}
        className="latestSwiper"
        autoplay={{
            delay: 2500,
            disableOnInteraction: false,
          }}
      >
        {items.map((item) => (
          <SwiperSlide key={item.image}>
            <div className="flex flex-col lg:flex-row gap-8">
              <div
              className="basis-3/5"
                style={{
                  backgroundImage: `url('${item.image ?? "/images/triumphLogo.png"}')`,
                  backgroundPosition: "center center",
                  backgroundRepeat: "no-repeat",
                  backgroundSize: "cover",
                  height: "600px",
                }}
              ></div>
              <div className="basis-2/5">
                <div className="m-auto w-11/12 mt-24">
                <SectionTitleH2 text={item.title} color={"dark"} />
                <p className="mb-8 text-xl w-9/12">{item.desc}</p>
                {item.url && (
                  <MainBtn
                    text={"Детали"}
                    bgBlack={true}
                    isLink={true}
                    link={item.url}
                    fullWidth={false}
                  />
                )}
                </div>
                
              </div>
            </div>
          </SwiperSlide>
        ))}
      </Swiper>
      </section>
  );
};

export default LatestCaroV2;
