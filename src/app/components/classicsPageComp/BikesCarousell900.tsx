"use client";
import "swiper/css";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
// import 'swiper/css/navigation';
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import CardLinkItem from "../homePageComponents/CardLinkItem";
import Image from "next/image";
import { text } from "@fortawesome/fontawesome-svg-core";
import { faArrowRight } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { url } from "inspector";
import Link from "next/link";
import { title } from "process";

type BikesCarousell900Props = {
  bikes: any[];
};

const BikesCarousell900 = ({ bikes = [] }: BikesCarousell900Props) => {
  const swiperParams = {
    slidesPerView: 3,
    spaceBetween: 10,
    loop: true,
    
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
    },
  };

  return (
    <>
      <Swiper
        {...swiperParams}
        navigation
        modules={[Navigation, Autoplay]}
        tag="div"
        className="text-white "
      >
        {bikes.map((bike) => (
          <SwiperSlide key={bike.id}>
            <Link
              href={`/motorcycles/classics/${bike.subFamilyName}`}
              className="md:basis-1/3 pb-8 last:pb-0 flex flex-col hover:text-zinc-300 hover:underline text-black group"
            >
              <div className="relative">
                <Image
                  src={bike.gallery.modelImage.src ?? "/images/triumphLogo.png"}
                  alt={bike.title ?? "Triumph"}
                  width={1500}
                  height={270}
                />
                <div className=" z-1 w-full h-full absolute transform top-0 left-0 right-0 flex justify-center items-center">
                  {" "}
                  {/* <p className="z-2 text-body font-semibold uppercase text-black group-hover:flex flex-col items-center hidden">
                    {'Детали'}
                    <FontAwesomeIcon icon={faArrowRight} />
                  </p> */}
                </div>
              </div>

              <h2 className="lg:text-xl text-base uppercase font-semibold tracking-tighter my-6">
                {bike.title}
              </h2>

              {bike.shortDesc && (
                <p className="mb-8">{bike.shortDesc ?? "Triumph"}</p>
              )}

              <p className="lg:text-base text-sm font-semibold  flex gap-2 items-center">
                {"Детали"} <FontAwesomeIcon icon={faArrowRight} />
              </p>
            </Link>
          </SwiperSlide>
        ))}
      </Swiper>
    </>
  );
};

export default BikesCarousell900;
