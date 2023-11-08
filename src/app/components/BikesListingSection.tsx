"use client";
import React, { Suspense, useEffect, useState } from "react";
import Card from "./Card";
import { useSearchParams } from "next/navigation";

type BikesListingSectionProps = {
  bikes: any[];
};

const BikesListingSection = ({ bikes }: BikesListingSectionProps) => {
  const [bikesToRender, setBikesToRender] = useState<any[]>([]);
  const query = useSearchParams().get("sortBy");

  useEffect(() => {
    switch (query) {
      case "nameAsc":
        setBikesToRender(
          bikes.sort((a, b) => {
            const nameA = a.title.toUpperCase();
            const nameB = b.title.toUpperCase();

            if (nameA < nameB) {
              return -1;
            }

            return 0;
          })
        );

        break;
      case "nameDsc":
        setBikesToRender(
          bikes.sort((a, b) => {
            const nameA = a.title.toUpperCase();
            const nameB = b.title.toUpperCase();

            if (nameA > nameB) {
              return -1;
            }

            return 0;
          })
        );

        break;
      case "priceAsc":
        setBikesToRender(bikes.sort((a, b) => a.price - b.price));
        break;
      case "priceDsc":
        setBikesToRender(bikes.sort((a, b) => b.price - a.price));

        break;
      default:
        setBikesToRender(bikes);
        break;
    }
  }, [query]);

  return (
    <section className="flex flex-wrap justify-center md:justify-between gap-8">
      {bikesToRender.map((bike: any) => (
          <Card key={bike.id} item={bike} />
      ))}
    </section>
  );
};

export default BikesListingSection;
