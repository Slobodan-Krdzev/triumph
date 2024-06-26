"use client";
import React from "react";
import "swiper/css";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
// import 'swiper/css/navigation';
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";
import SectionTitleH2 from "../../familiySharedComponents/SectionTitleH2";
import MainBtn from "../../MainBtn";
import MainCarousellItem, {
  MainCarousellItemType,
} from "../MainCarousell/MainCarousellItem";
import Image from "next/image";
import { useBreakpoint } from "../../helpers/useBreakpoint";

type MainCaroPropsType = {
  items: any[];
};

const MainCaroV2 = ({ items }: MainCaroPropsType) => {
  // const caroItems: any[] = [
  //     {
  //       video: "/images/home/mainCarousell/tripleTributeMainCaroVideo.webm",
  //       image: null,
  //       imageMobile: "/images/home/mainCarousell/tripleTributeMobile.avif",
  //       title: "Новиот Trident 660 Tribute Edition Серија",
  //       desc: "Создаден од мулти-класната, три-цилиндрична спортско-перформансна платформа на Triumph.",
  //       link1: {
  //         url: "/motorcycles/roadsters/trident-660/trident-tribute-edition",
  //         text: "Погледни го Моторот"
  //       },
  //       link2: {
  //         url: "/configure/bike/trident-660-triple-tribute",
  //         text: "Конфигурација"
  //       }
  //     },
  //     {
  //       video: "/images/home/mainCarousell/rocket3.webm",
  //       image: null,
  //       imageMobile: "/images/home/mainCarousell/rocket3Mobile.avif",
  //       title: "Новата Rocket-3 Storm Серија",
  //       desc: "Дополнителен карактер со перформанси кои ги рушат сите рекорди.",
  //       link1: {
  //         url: "/motorcycles/rocket-3/rocket-3",
  //         text: "Погледни ја Серијата"
  //       }
  //     },
  //     {
  //       video: "/images/home/mainCarousell/tiger1200CaroVideo.webm",
  //       image: null,
  //       imageMobile: "/images/home/mainCarousell/tiger1200CaroImageMobile.avif",
  //       title: "Новата Tiger 1200 Серија",
  //       desc: "Возвишете ја вашата авантура на повисоко ниво.",
  //       link1: {
  //         url: "/motorcycles/adventure/tiger-1200-gt",
  //         text: "Tiger 1200 GT"
  //       },
  //       "link2": {
  //         url: "/motorcycles/adventure/tiger-1200-rally",
  //         text: "Tiger 1200 Rally"
  //       }
  //     },
  //     {
  //       video: "/images/home/mainCarousell/offRoadCaroVideo.webm",
  //       image: null,
  //       imageMobile: "/images/home/mainCarousell/offRoadMainCaroMobile.avif",
  //       title: "All In - All Out",
  //       desc: "Новата TF 250-X е тука. Triumph влегува во мотокрос светот.",
  //       link1: {
  //         url: "/motorcycles/off-road/tf-250-x",
  //         text: "Погледни ја Серијата"
  //       }
  //     },
  //     {
  //       video: null,
  //       image: "/images/home/mainCarousell/daytona.avif",
  //       imageMobile: "/images/home/mainCarousell/daytonaMobile.avif",
  //       title: "Новaтa Daytona 660",
  //       desc: "Динамична ДНК со нов карактер.",
  //       link1: {
  //         url: "/motorcycles/sport/daytona-660",
  //         text: "Погледни ја Серијата"
  //       }
  //     },
  //     {
  //       video: "/images/home/mainCarousell/thruxtonCaroVideo.webm",
  //       image: "/images/home/mainCarousell/thruxtonCaroImg.avif",
  //       imageMobile: "/images/home/mainCarousell/stealthCaroImageMobile.avif",
  //       title: "Новата Thruxton Final Edition",
  //       desc: "За крај на една ера - Thruxton Final Edition",
  //       link1: {
  //         url: "/motorcycles/classics/thruxton-rs",
  //         text: "Погледни ја Серијата"
  //       }
  //     },
  //     {
  //       video: null,
  //       image: "/images/home/mainCarousell/speed400CaroImage.avif",
  //       imageMobile: "/images/home/mainCarousell/speed400CaroImageMobile.avif",
  //       title: "Нови Попусти, Нови Цени",
  //       desc: "Погледнете ги новите цени за Speed 400 & Scrambler 400 X",
  //       link1: {
  //         url: "/motorcycles/classics/speed-400",
  //         text: "Speed 400"
  //       },
  //       link2: {
  //         url: "/motorcycles/classics/scrambler-400-x",
  //         text: "Scrambler 400 X"
  //       }
  //     },
  //     {
  //       video: "/images/home/mainCarousell/scrambler1200CaroVideo.webm",
  //       image: "/images/home/mainCarousell/scrambler1200CaroImage.avif",
  //       imageMobile: "/images/home/mainCarousell/scrambler1200CaroImage.avif",
  //       title: "Направени за секој терен",
  //       desc: "Новите Scrambler 1200 XE & X",
  //       link1: {
  //         url: "/motorcycles/classics/scrambler-1200",
  //         text: "Погледни ја Серијата"
  //       }
  //     },
  //     {
  //       video: "/images/home/mainCarousell/tigerCaroVideo.webm",
  //       image: "/images/home/mainCarousell/tigerCaroImage.avif",
  //       imageMobile: "/images/home/mainCarousell/tigerCaroImageMobile.avif",
  //       title: "Tiger 900 Серија",
  //       desc: "Новиот Tiger 900 повторно повторно се искачи на врвот и стана репер за останатите мотори од авантуристички карактер. Откријте го новиот Tiger 900.",
  //       link1: {
  //         url: "/motorcycles/adventure/tiger-900",
  //         text: "Погледни ја Серијата"
  //       },
  //       link2: {
  //         url: "/configure/bike/tiger-900",
  //         text: "Конфигурација"
  //       }
  //     },
  //     {
  //       video: "/images/home/mainCarousell/stealthEditionsCaroVideo.webm",
  //       image: "/images/home/mainCarousell/stealthCaroImage.avif",
  //       imageMobile: "/images/home/mainCarousell/stealthCaroImageMobile.avif",
  //       title: "Драматичен Custom Стил",
  //       desc: "Новата Triumph Stealth Серија",
  //       link1: {
  //         url: "/motorcycles/classics/stealth-editions",
  //         text: "Погледни ја Серијата"
  //       }
  //     }
  //   ]

  return (
    <>
      <section className="hidden md:block">
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
            <SwiperSlide
              key={item.title}
              style={{
                height: "calc(100vh - 64px)",
                position: "relative",
              }}
            >
               {/* {item.video && (
                <video
                  className="relative object-fill"
                  autoPlay
                  muted
                  loop
                  playsInline
                  style={{
                    height: "auto",
                    minWidth: "92%",
                    filter: "brightness(80%)",
                  }}
                >
                  <source
                    className="absolute w-full h-full top-0 left-0"
                    src={item.video}
                    type="video/webm"
                  />
                </video>
              )}

              {item.image && (
                <div
                  style={{
                    minWidth: "100%",
                    backgroundImage: `url('${item.image}')`,
                    backgroundPosition: "center center",
                    backgroundRepeat: "no-repeat",
                    backgroundSize: "cover",
                    height: "calc(100vh - 64px)",
                  }}
                ></div>
              )}  */}

              {item.video ? (
                <video controls autoPlay muted loop>
                <source src={item.video} type="video/mp4" />
              </video>
            // <>vid</>
              ) : (<div
                style={{
                  minWidth: "100%",
                  backgroundImage: `url('${item.image}')`,
                  backgroundPosition: "center center",
                  backgroundRepeat: "no-repeat",
                  backgroundSize: "cover",
                  height: "calc(100vh - 64px)",
                }}
              ></div>)}

              <div className="ml-44 absolute" style={{ top: "15%" }}>
                <h2 className="mb-4 uppercase font-bold  text-7xl text-white w-2/4">
                  {item.title}
                </h2>
                <p className="mb-4 w-2/4 text-white text-2xl font-semibold">
                  {item.desc}
                </p>
                <div className="flex gap-4">
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
            </SwiperSlide>
          ))}
        </Swiper>
      </section>

      
    </>
  );
};

export default MainCaroV2;
