"use client";
import "swiper/css";
import { Navigation } from "swiper/modules";
// import 'swiper/css/navigation';
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";


// OVA NE TREBA GI ZEMAME OD API
// export const carousellItems: BottomCarousellItemType[] = [
//   {
//     id: "carouselItem1",
//     title: "Британски двоцилиндричен мотор",
//     desc: "Постојат две возбудливи алтернативи - на располагање се два мотора со висок вртежен момент 'HT 900cc' и 'HT 1200cc'. И двата мотора се надградени во 2021 година, со помали емисии и одлична економичност на горивото.",
//     image: "/images/classics/classicsSlide1.avif",
//   },
//   {
//     id: "carouselItem2",
//     title: "Препознатливи Карактеристики",
//     desc: "Секој мотор има свој автентичен карактер и стил, надграден во 2021 година со уште повисоко ниво на завршница и детали.",
//     image: "/images/classics/classicsSlide2.avif",
//   },
//   {
//     id: "carouselItem3",
//     title: "Неспоредлива Автентичност",
//     desc: "Денешното 'Triumph Modern Classic' семејство е директен потомок на Bonneville '59, оригиналната британска мотоциклистичка икона и почетокот на генерациите на мотоциклистички субкултури и многуте варијации во денешната модерна класична постава.",
//     image: "/images/classics/classicsSlide3.avif",
//   },
//   {
//     id: "carouselItem4",
//     title: "Сериозни Перформанси",
//     desc: "Суспензијата и сопирачките со високи спецификации нудат флексибилно и динамично возење, додека најновата генерација електронски програми за возење, ABS и контрола на тракцијата ги носат безбедноста и контролата на највисоко ниво.",
//     image: "/images/classics/classicsSlide4.avif",
//   },
//   {
//     id: "carouselItem5",
//     title: "Безвременски Стил",
//     desc: "Иконската силуета на Bonneville го зема секој поглед, исто како и секој модел кој е полн со прекрасни детали кои го повторуваат безвременскиот дизајн на оригиналниот мотор.",
//     image: "/images/classics/classicsSlide5.avif",
//   },
// ];

type BottomCarousellItemType = {
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
                  <h3 className="text-2xl md:text-3xl lg:text-5xl tracking-tighter capitalize font-medium mb-4">
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
