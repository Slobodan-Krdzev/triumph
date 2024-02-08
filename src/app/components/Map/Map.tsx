"use client";
import "leaflet-defaulticon-compatibility";
import "leaflet-defaulticon-compatibility/dist/leaflet-defaulticon-compatibility.css";
import "leaflet/dist/leaflet.css";
import Image from "next/image";
import { MapContainer, Marker, Popup, TileLayer } from "react-leaflet";

const Map = () => {
  return (
    <MapContainer
      center={[41.99060, 21.43100]}
      zoom={14}
      className="shadow-xl"
      style={{
        height: 350,
        width: 350,
      }}
    >
      <TileLayer
        attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
      />
      <Marker position={[41.99060, 21.43100]}>
        <Popup className="flex flex-col">
          <div className="flex justify-between items-center">
            <p className="font-semibold text-md basis-1/2 text-center">Triumph Македонија</p>

            <Image src={'/logoBlack.png'} alt={"Logo"} width={100} height={15} className="basis-1/2"/>
          </div>
          <p>Св. Кирил и Методиј бр.20, Скопје 1000</p>
          <a
            href="mailto:info@triumphmotorcycles.mk"
            className="underline block mb-2"
          >
            info@triumphmotorcycles.mk
          </a>
          <a href="tel:+389 78 255 535" className="underline block mb-2">
            +389 78 255 535
          </a>
          <a href="tel:+389 2 312 0706" className="underline block">
            +389 2 312 0706
          </a>
        </Popup>
      </Marker>
    </MapContainer>
  );
};

export default Map;
