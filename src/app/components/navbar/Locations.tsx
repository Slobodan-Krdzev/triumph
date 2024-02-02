"use client";
import Image from "next/image";
import Link from "next/link";
import { useState } from "react";

export const locations = [
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
    region: "Asia",
    country: "Australia",
    link: "https://www.triumphmotorcycles.com.au",
  },
  {
    id: 30,
    region: "Asia",
    country: "China",
    link: "https://www.triumphmotorcycles.cn",
  },
  {
    id: 31,
    region: "Asia",
    country: "Philippines",
    link: "https://www.triumphmotorcycles.ph",
  },
  {
    id: 32,
    region: "Asia",
    country: "Hong Kong",
    link: "https://www.triumphmotorcycles.hk",
  },
  {
    id: 33,
    region: "Asia",
    country: "India",
    link: "https://www.triumphmotorcycles.in",
  },
  {
    id: 34,
    region: "Asia",
    country: "Indonesia",
    link: "https://www.triumphmotorcycles.co.id",
  },
  {
    id: 35,
    region: "Asia",
    country: "Japan",
    link: "https://www.triumphmotorcycles.jp",
  },
  {
    id: 36,
    region: "Asia",
    country: "Malaysia",
    link: "https://www.triumph-motorcycles.my/",
  },
  {
    id: 37,
    region: "Asia",
    country: "new zealand",
    link: "https://www.triumphmotorcycles.co.nz",
  },
  {
    id: 38,
    region: "Asia",
    country: "singapore",
    link: "https://www.triumphmotorcycles.sg",
  },
  {
    id: 39,
    region: "Asia",
    country: "south korea",
    link: "https://www.triumphmotorcycles.co.kr",
  },
  {
    id: 40,
    region: "Asia",
    country: "taiwan",
    link: "https://www.triumphmotorcycles.tw",
  },
  {
    id: 41,
    region: "Asia",
    country: "thailand",
    link: "https://www.triumphmotorcycles.co.th",
  },
  {
    id: 42,
    region: "Asia",
    country: "Vietnam",
    link: "https://www.triumphmotorcycles.com.vn",
  },
  {
    id: 43,
    region: "Europe",
    country: "Austria",
    link: "https://www.triumphmotorcycles.at",
  },
  {
    id: 44,
    region: "Europe",
    country: "belgium nl",
    link: "https://www.triumphmotorcycles.be",
  },
  {
    id: 45,
    region: "Europe",
    country: "belgium fr",
    link: "https://fr.triumphmotorcycles.be",
  },
  {
    id: 46,
    region: "Europe",
    country: "bulgaria",
    link: "https://triumph-sofia.bg/",
  },
  {
    id: 1000,
    region: "Europe",
    country: "czech republic",
    link: "https://www.triumphmotorcycles.cz",
  },
  {
    id: 47,
    region: "Europe",
    country: "denmark",
    link: "https://www.triumphmotorcyclesdenmark.dk",
  },
  {
    id: 48,
    region: "Europe",
    country: "finland",
    link: "https://www.triumphmotorcycles.fi",
  },
  {
    id: 49,
    region: "Europe",
    country: "luxemburg",
    link: "https://www.triumphmotorcycles.co.uk/markets/luxembourg",
  },
  {
    id: 50,
    region: "Europe",
    country: "france",
    link: "https://www.triumphmotorcycles.fr",
  },
  {
    id: 51,
    region: "Europe",
    country: "germany",
    link: "https://www.triumphmotorcycles.de",
  },
  {
    id: 52,
    region: "Europe",
    country: "grece",
    link: "https://www.triumphmotorcycles.gr",
  },
  {
    id: 53,
    region: "Europe",
    country: "hungary",
    link: "https://www.triumphmotorcycles.hu",
  },
  {
    id: 54,
    region: "Europe",
    country: "ireland",
    link: "https://www.triumph.ie/",
  },
  {
    id: 55,
    region: "Europe",
    country: "italy",
    link: "https://www.triumphmotorcycles.it",
  },
  {
    id: 56,
    region: "Europe",
    country: "malta",
    link: "https://www.triumphmotorcycles.co.uk/triumph%20hub%20page/Malta",
  },
  {
    id: 57,
    region: "Europe",
    country: "netherlands",
    link: "https://www.triumphmotorcycles.nl",
  },
  {
    id: 58,
    region: "Europe",
    country: "norway",
    link: "https://www.triumphmotorcycles.no",
  },
  {
    id: 59,
    region: "Europe",
    country: "Poland",
    link: "https://www.triumphmotorcycles.pl",
  },
  {
    id: 60,
    region: "Europe",
    country: "Portugal",
    link: "https://www.triumphmotorcycles.pt",
  },
  {
    id: 61,
    region: "Europe",
    country: "Romania",
    link: "https://www.triumph-motorcycles.ro/",
  },
  {
    id: 62,
    region: "Europe",
    country: "slovakia",
    link: "https://www.triumphmotorcycles.sk",
  },
  {
    id: 63,
    region: "Europe",
    country: "spain",
    link: "https://www.triumphmotorcycles.es",
  },
  {
    id: 64,
    region: "Europe",
    country: "sweden",
    link: "https://www.triumphmotorcycles.se",
  },
  {
    id: 65,
    region: "Europe",
    country: "SWITZERLAND DE",
    link: "https://de.triumphmotorcycles.ch",
  },
  {
    id: 66,
    region: "Europe",
    country: "SWITZERLAND fr",
    link: "https://www.triumphmotorcycles.ch",
  },
  {
    id: 67,
    region: "Europe",
    country: "SWITZERLAND fr",
    link: "https://www.triumphmotorcycles.ch",
  },
  {
    id: 68,
    region: "Europe",
    country: "Turkey",
    link: "https://www.triumphmotorcycles.com.tr",
  },
  {
    id: 69,
    region: "Europe",
    country: "United Kingdom",
    link: "https://www.triumphmotorcycles.co.uk",
  },
];

const Locations = () => {
  const [selectedRegion, setSelectedRegion] = useState("Africa");

  const regions = Array.from(
    new Set(locations.map((location) => location.region))
  ).map((region) => region);

  const filteredLocations = locations
    .slice()
    .filter((location) => location.region === selectedRegion);

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
            className={`uppercase text-md ${
              selectedRegion === region ? "border-bottom" : ""
            }`}
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
