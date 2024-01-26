import React from "react";
import BikeListingNoSliderCard from "./BikeListingNoSliderCard";

// BIKE TYPE TREBA
type BikeListingNoSliderProps = {
  bikes: any[];
  configureLink?: boolean
};

const BikeListingNoSlider = ({ bikes = [], configureLink }: BikeListingNoSliderProps) => {

    if(bikes) {
        return (
            <section className="lg:px-8 lg:py-8 py-4 px-4 flex flex-wrap">
              {bikes.map((bike) => (
                <BikeListingNoSliderCard
                  key={bike.id}
                  title={bike.title}
                  price={bike.price}
                  model={bike.model}
                  link={`/motorcycles/${bike.category}/${bike.subFamilyCategory}/${bike.model}`}
                  image={{
                    src: bike.gallery.modelImage.src,
                    alt: bike.title,
                  }}
                  configureLink={configureLink}
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
