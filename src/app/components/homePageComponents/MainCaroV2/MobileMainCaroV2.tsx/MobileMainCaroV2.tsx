
"use client";
import "swiper/css";
import { Autoplay, Navigation } from "swiper/modules";
// import 'swiper/css/navigation';
import Image from "next/image";
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";
import MainBtn from "@/app/components/MainBtn";

type MobileProps = {
    items: any[]
}


const MobileMainCaroV2 = ({items}: MobileProps) => {
  return (
    <section className="md:hidden">
        <Swiper
          navigation={true}
          modules={[Navigation, Autoplay]}
          className="mainCaroSwiper"
          autoplay={{
            delay: 2500,
            disableOnInteraction: false,
          }}
        >
          {items.map((item) => (
            <SwiperSlide key={item.title}>
              <div
                style={{
                  backgroundColor: "#2A2A2A",
                  height: "100vh",
                }}
              >
                <Image
                  src={item.imageMobile}
                  alt="img"
                  width={768}
                  height={700}
                />
                <div className="p-8">
                  <h2 className="mb-4 uppercase font-bold text-white text-3xl">
                    {item.title}
                  </h2>
                  <p className="mb-4  text-white text-xl font-semibold">
                    {item.desc}
                  </p>
                  <div className="flex flex-col gap-4 text-center">
                    {item.link1 && (
                      <MainBtn
                        text={item.link1.text}
                        bgBlack={false}
                        isLink={true}
                        link={item.link1.url}
                      />
                    )}
                    {item.link2 && (
                      <MainBtn
                        text={item.link2.text}
                        bgBlack={true}
                        isLink={true}
                        link={item.link2.url}
                      />
                    )}
                  </div>
                </div>
              </div>
            </SwiperSlide>
          ))}
        </Swiper>
      </section>
  )
}

export default MobileMainCaroV2