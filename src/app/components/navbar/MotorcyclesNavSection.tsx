"use client";
import React, { useState } from "react";
import MotorcyclesNav from "./MotorcyclesSemiSection/MotorcyclesNav";
import OffersNav from "./MotorcyclesSemiSection/OffersNav";

const MotorcyclesNavSection = ({families, bikes, bikeToRender}: any) => {
  const [areMotorsShown, setAreMotorsShown] = useState(true);

  return (
    <>
<<<<<<< HEAD
      <div className="lg:px-16 2xl:px-48">
=======
      <div className="lg:px-40">
>>>>>>> c6a467ddcd7b5ccc9d3851fe06d179a31a9f4f5c
        <ul className="flex font-bold text-md gap-6 mt-4">
          <li>
            <button className="uppercase py-3 px-4 rounded-t-md text-neutral-500 focus:text-black hover:text-black" onClick={() => setAreMotorsShown(true)}
            style={{
                backgroundColor: areMotorsShown ? 'white' : '',
                color: areMotorsShown ? 'black' : ''
                
            }}>
              Моторцикли
            </button>
          </li>
          <li>
            <button className="uppercase py-3 px-4 rounded-t-md text-neutral-500 focus:text-black hover:text-black" onClick={() => setAreMotorsShown(false)} 
            style={{
                backgroundColor: areMotorsShown ? "" : 'white' ,
                color: areMotorsShown ? "" : 'black'
            }}>
              Понуда
            </button>
          </li>
        </ul>
      </div>

<<<<<<< HEAD
      <div className="bg-white lg:px-20 2xl:px-52">
=======
      <div className="bg-white px-40">
>>>>>>> c6a467ddcd7b5ccc9d3851fe06d179a31a9f4f5c
        {areMotorsShown ? (
          <>
            <MotorcyclesNav families={families} bikes={bikes} bikeToRender={bikeToRender}/>
          </>
        ) : 
          <>
            <OffersNav/>
          </>  
        }
      </div>
    </>
  );
};

export default MotorcyclesNavSection;
