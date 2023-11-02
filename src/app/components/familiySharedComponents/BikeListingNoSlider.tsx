import React from "react";
import BikeListingNoSliderCard from "./BikeListingNoSliderCard";

// BIKE TYPE TREBA
type BikeListingNoSliderProps = {
  bikes: any[];
};

const BikeListingNoSlider = ({ bikes = [] }: BikeListingNoSliderProps) => {

    if(bikes) {
        return (
            <section className="lg:px-8 lg:mb-16 mb-8 px-4 flex flex-wrap">
              {bikes.map((bike) => (
                <BikeListingNoSliderCard
                  key={bike.bikeId}
                  title={bike.familyPageInfo.title}
                  price={bike.price}
                  link={bike.familyPageInfo.link.url}
                  image={{
                    src: bike.familyPageInfo.image.src,
                    alt: bike.familyPageInfo.image.alt,
                  }}
                />
              ))}
            </section>
          );
    }

    if(!bikes){
        return ''
    }
 
};

export default BikeListingNoSlider;
