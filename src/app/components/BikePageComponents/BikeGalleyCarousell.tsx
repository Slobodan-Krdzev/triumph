"use client";
import "swiper/css";
import { Autoplay, Navigation, Pagination } from "swiper/modules";
// import 'swiper/css/navigation';
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";


type YoutubeVideoCarousellProps = {
    images: string[]
};

const BikeGalleyCarousell = ({ images }: YoutubeVideoCarousellProps) => {
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
      disableOnInteraction: false
    },
  };

  if(images.length === 1) {

    return images.map(image => <section 
        key={image}
            style={{
            backgroundImage: `url("${image}")`,
            backgroundPosition: 'center center',
            backgroundSize: 'cover',
            backgroundRepeat: 'no-repeat',
            height: '100vh',
            marginTop:'5rem'
        }}> </section>
    )
  }
  

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
            <section
            className="bikeGalleryCarousell"
            style={{
                backgroundImage: `url("${item}")`,
                backgroundPosition: 'center center',
                backgroundRepeat: 'no-repeat'
            }}>

            </section>
          </SwiperSlide>
        ))}
      </Swiper>
    </section>
  );
};

export default BikeGalleyCarousell;
