import Link from "next/link";
import React from "react";

const DealerPage = () => {
  return (
    <section
      className="w-full bg-white flex justify-center items-center"
      style={{
        height: "100vh",
        backgroundImage: 'url("/images/dealer/dealerBanner.jpg")',
        backgroundSize: "cover",
        backgroundPosition: "center center",
        backgroundRepeat: "no-repeat",
      }}
    >
      <div
        className="bg-white m-auto w-6/12 rounded-lg flex flex-col justify-between items-start"
        style={{ height: "60vh" }}
      >
        <h1 className="text-center py-4 md:py-8 text-xl md:text-5xl font-bold basis-1/5 w-full">
          Triumph Motorcycles Macedonia
        </h1>

        <div className="basis-4/5 w-full flex justify-between ">
          <div className="flex flex-col justify-center items-start basis-1/2">
            <p>Sv. Kiril i Metodij 20, Skopje 1000</p>

            <p>Phone: +389 2 312 0706</p>
            <p>Phone: +389 78 255 535</p>
            <p><a href="mailto:info@triumphmotorcycles.mk">Email: info@triumphmotorcycles.mk</a></p>
            <p></p>
          </div>

          <div className="flex flex-col justify-center items-center basis-1/2">
            mapta  
          </div>
        </div>
      </div>
    </section>
  );
};

export default DealerPage;
