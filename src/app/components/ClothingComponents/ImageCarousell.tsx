"use client";
import Image from "next/image";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";

type ImageCaroProps = {
  items: any[];
};

const responsive = {
    desktop: {
      breakpoint: { max: 3000, min: 1024 },
      items: 3,
      slidesToSlide: 3 // optional, default to 1.
    },
    tablet: {
      breakpoint: { max: 1024, min: 464 },
      items: 2,
      slidesToSlide: 2 // optional, default to 1.
    },
    mobile: {
      breakpoint: { max: 464, min: 0 },
      items: 1,
      slidesToSlide: 1 // optional, default to 1.
    }
  };

const ImageCarousell = ({ items = [] }: ImageCaroProps) => {
  return (
    <div className="py-20 bg-white">
      <Carousel
        swipeable={true}
        draggable={true}
        responsive={responsive}
        arrows
        ssr={true} 
        infinite={true}
        autoPlay={true}
        autoPlaySpeed={3000}
        keyBoardControl={true}
        customTransition="all .5"
        transitionDuration={500}
        containerClass="carousel-container"
        dotListClass="custom-dot-list-style"
        itemClass="carousel-item-padding-40-px"
        rtl={false}
      >
        {items.map(item => <Image  key={item.id} src={item.src} alt={item.alt} width={476} height={476}/>)}
      </Carousel>
      
    </div>
  );
};

export default ImageCarousell;
