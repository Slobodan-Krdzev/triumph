"use client"
import React from "react";
import Carousel from "react-multi-carousel";
import "react-multi-carousel/lib/styles.css";
import StealthCarousellCard from "./StealthCarousellCard";
// TREBA BIKE[]

type StelthCarousellProps = {
  bikes: any[];
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

const StelthCarousell = ({ bikes = [] }: StelthCarousellProps) => {


  if (bikes) {
    return (
      
        <Carousel
        slidesToSlide={1}
        // infinite
        draggable

        // showDots
        responsive={responsive}
        // swipeable={true}
        // draggable={true}
        // infinite={false}
        // // autoPlay={true}
        // autoPlaySpeed={1500}
        // keyBoardControl={true}
        // customTransition="all .5"
        // transitionDuration={500}
        // containerClass="carousell-styles"
        // removeArrowOnDeviceType={["tablet", "mobile"]}
        // dotListClass="custom-dot-list-style"
        // itemClass="carousel-item-padding-40-px"
        // pauseOnHover
        
        >
          {/* items */}
          {bikes.map((bike: any) => <StealthCarousellCard key={bike.bikeId} title={bike.familyPageInfo.title} price={bike.price} url={bike.familyPageInfo.link.url} image={bike.familyPageInfo.image.src}/>)}
          

        </Carousel>
        
    );
  }
};

export default StelthCarousell;
