"use client";
import React from "react";
import { Navigation } from "swiper/modules";
import "swiper/css";
// import 'swiper/css/navigation';
import "swiper/swiper-bundle.css";
import { Swiper, SwiperSlide } from "swiper/react";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";
import Image from "next/image";

const carousellItems = [
  {
    id: "carouselItem1",
    title: "Британски двоцилиндричен мотор",
    desc: "Постојат две возбудливи алтернативи - на располагање се два мотора со висок вртежен момент 'HT 900cc' и 'HT 1200cc'. И двата мотора се надградени во 2021 година, со помали емисии и одлична економичност на горивото.",
    image: "/images/classics/classicsSlide1.avif",
  },
  {
    id: "carouselItem2",
    title: "Препознатливи Карактеристики",
    desc: "Секој мотор има свој автентичен карактер и стил, надграден во 2021 година со уште повисоко ниво на завршница и детали.",
    image: "/images/classics/classicsSlide2.avif",
  },
  {
    id: "carouselItem3",
    title: "Неспоредлива Автентичност",
    desc: "Денешното 'Triumph Modern Classic' семејство е директен потомок на Bonneville '59, оригиналната британска мотоциклистичка икона и почетокот на генерациите на мотоциклистички субкултури и многуте варијации во денешната модерна класична постава.",
    image: "/images/classics/classicsSlide3.avif",
  },
  {
    id: "carouselItem4",
    title: "Сериозни Перформанси",
    desc: "Суспензијата и сопирачките со високи спецификации нудат флексибилно и динамично возење, додека најновата генерација електронски програми за возење, ABS и контрола на тракцијата ги носат безбедноста и контролата на највисоко ниво.",
    image: "/images/classics/classicsSlide4.avif",
  },
  {
    id: "carouselItem5",
    title: "Безвременски Стил",
    desc: "Иконската силуета на Bonneville го зема секој поглед, исто како и секој модел кој е полн со прекрасни детали кои го повторуваат безвременскиот дизајн на оригиналниот мотор.",
    image: "/images/classics/classicsSlide5.avif",
  },
];

const BottomCarousell = () => {
  return (
    <section className="py-20 gray-bg border-b-2 border-neutral-500">
      <Swiper
        navigation={true}
        modules={[Navigation]}
        tag="div"
        className="text-white "
      >
        {carousellItems.map((item) => (
          <SwiperSlide key={item.id}>
            <div
            className="carousell-classics relative"
              style={{
                backgroundImage: `url('${item.image}')`,
                backgroundSize: 'cover',
                backgroundRepeat: 'no-repeat',
                backgroundPosition: 'center center',
                minHeight: '102vh',
              }}
            >
              
                <div className="text-white z-10 absolute lg:w-2/5 md:w-3/5 md:left-10 left-4 md:top-0 overflow-visible">
                    <h3 className="md:text-2xl lg:text-2xl text-md capitalize font-medium mb-4">{item.title}</h3>
                    <p className="text-xs md:text-base">{item.desc}</p>
                </div>
            </div>
          </SwiperSlide>
        ))}
      </Swiper>
    </section>
  );
};

export default BottomCarousell;
