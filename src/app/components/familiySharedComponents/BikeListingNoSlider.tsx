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
                  key={bike.id}
                  title={bike.title}
                  price={bike.price}
                  link={`/motorcycles/${bike.category}/${bike.subFamilyCategory}/${bike.model}`}
                  image={{
                    src: bike.gallery.modelImage.src,
                    alt: bike.title,
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
