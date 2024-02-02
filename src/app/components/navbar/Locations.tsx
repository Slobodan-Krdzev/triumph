"use client";
import Image from "next/image";
import Link from "next/link";
import React, { useState } from "react";

const locations = [
  {
    id: 1,
    region: "Africa",
    country: "South Africa",
    link: "https://www.triumphmotorcycles.co.za/",
  },
  {
    id: 2,
    region: "America",
    country: "Argentina",
    link: "https://www.triumphmotorcycles.co.ar/",
  },
  {
    id: 3,
    region: "America",
    country: "Bolivia",
    link: "https://www.triumphmotorcycles.bo/",
  },
  {
    id: 4,
    region: "America",
    country: "Brazil",
    link: "https://www.triumphmotorcycles.br/",
  },
  {
    id: 5,
    region: "America",
    country: "Canada EN",
    link: "https://www.triumph-motorcycles.ca/",
  },
  {
    id: 6,
    region: "America",
    country: "Canada FR",
    link: "https://fr.triumphmotorcycles.ca/",
  },
  {
    id: 7,
    region: "America",
    country: "Chile",
    link: "https://www.triumphmotorcycles.cl/",
  },
  {
    id: 8,
    region: "America",
    country: "Colombia",
    link: "https://www.triumphcolombia.com/",
  },
  {
    id: 9,
    region: "America",
    country: "Costa Rica",
    link: "https://www.triumphmotorcycles.cr/",
  },
  {
    id: 10,
    region: "America",
    country: "Dominican Republic",
    link: "https://www.triumphmotorcycles.com/markets/dominican-republic/",
  },
  {
    id: 11,
    region: "America",
    country: "Ecuador",
    link: "https://www.triumphmotorcycles.ec/",
  },
  {
    id: 12,
    region: "America",
    country: "El Salvador",
    link: "https://www.triumphmotorcycles.co.uk/distributor-markets/el-salvador",
  },
  {
    id: 13,
    region: "America",
    country: "Guadaloupe",
    link: "https://www.triumphmotorcycles.co.uk/markets/guadeloupe",
  },
  {
    id: 14,
    region: "America",
    country: "Guatemala",
    link: "https://www.triumphmotorcycles.com.gt",
  },
  {
    id: 15,
    region: "America",
    country: "Honduras",
    link: "https://www.triumphmotorcycles.hn",
  },
  {
    id: 16,
    region: "America",
    country: "Mexico",
    link: "https://www.triumphmotorcycles.mx",
  },
  {
    id: 17,
    region: "America",
    country: "Nicaragua",
    link: "https://www.triumphmotorcycles.co.uk/distributor-markets/nicaragua",
  },
  {
    id: 18,
    region: "America",
    country: "Paraguay",
    link: "https://www.triumphmotorcycles.co.uk/",
  },
  {
    id: 19,
    region: "America",
    country: "Paraguay",
    link: "https://www.triumphmotorcycles.pa",
  },
  {
    id: 20,
    region: "America",
    country: "Peru",
    link: "https://www.triumphmotorcycles.pe",
  },
  {
    id: 21,
    region: "America",
    country: "Peerto Rico",
    link: "https://www.triumphmotorcycles.pr",
  },
  {
    id: 22,
    region: "America",
    country: "Uruguay",
    link: "https://www.triumphmotorcycles.com/markets/uruguay",
  },
  {
    id: 23,
    region: "America",
    country: "USA",
    link: "https://www.triumphmotorcycles.com",
  },
  {
    id: 24,
    region: "America",
    country: "Venezuela",
    link: "https://www.triumphmotorcycles.co.ve",
  },
  {
    id: 25,
    region: "Middle East",
    country: "Bahrain",
    link: "https://www.motorcycleworldbahrain.com/category/bikes/triumph/",
  },
  {
    id: 26,
    region: "Middle East",
    country: "Israel",
    link: "https://sales.albar.co.il/triumphmotorcyclesIsrael/",
  },
  {
    id: 27,
    region: "Middle East",
    country: "Qatar",
    link: "https://www.triumphmotorcycles.qa",
  },
  {
    id: 28,
    region: "Middle East",
    country: "UAE",
    link: "https://www.triumphmotorcycles.ae",
  },
  {
    id: 29,
    region: "Europe",
    country: "Austria",
    link: "https://www.triumphmotorcycles.ae",
  },
];

const Locations = () => {
  const [selectedRegion, setSelectedRegion] = useState("Africa");

  const regions = Array.from(
    new Set(locations.map((location) => location.region))
  ).map((region) => region);


  const filteredLocations = locations.slice().filter(
    (location) => location.region === selectedRegion
  );

  console.log(filteredLocations);


  return (
    <section
      className="p-4 md:p-16 lg:p-22 flex flex-col md:flex-row justify-start "
      style={{
        height: "auto",
      }}
    >
      <div className="flex flex-col justify-start gap-8 items-start basis-full md:basis-1/6 px-0 md:px-16 border-thin-right">
        {regions.map((region) => (
          <button
            key={region}
            className={`uppercase text-md ${selectedRegion === region ? "border-bottom" : ""}`}
            onClick={() => {
              setSelectedRegion(region);
            }}
          >
            {region}
          </button>
        ))}
      </div>
      <div className="basis-full md:basis-5/6 px-0 md:px-16 flex flex-wrap justify-between gap-6">
        {filteredLocations.map((location) => (
          <Link
            className="w-1/5 flex justify-content items-center uppercase text-neutral-500 gap-2"
            key={location.id}
            href={location.link}
            target="_blank"
          >
            <Image src={"pin icon-01.svg"} alt="pin" width={32} height={32} />
            {location.country}
          </Link>
        ))}
      </div>
    </section>
  );
};

export default Locations;
