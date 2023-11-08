"use client";
import { usePathname, useRouter } from "next/navigation";
import React, { useRef } from "react";

const BikesSorter = () => {
  const selectorValue = useRef<HTMLSelectElement>(null);
  const router = useRouter();
  const pathname = usePathname();

  const hanldeQueryChange = () => {
    router.push(`${pathname}?sortBy=${selectorValue.current!.value}`, {
      scroll: false,
    });
  };

  return (
    <div className="xl:w-4/12 self-end flex justify-end gap-6 items-baseline bg-inherit lg:pb-6 pb-4">
      <p className="text-lg hidden md:block">Сортирај: </p>
      <select
        onChange={hanldeQueryChange}
        ref={selectorValue}
        className="md:px-6 py-2 rounded-sm border-2 border-gray-600 focus:border-gray-800  text-md bg-inherit"
      >
        <option value="" defaultChecked>
          Стандард
        </option>
        <option value="priceAsc">Цена - Од: Најниска</option>
        <option value="priceDsc">Цена - Од: Највисока</option>
        <option value="nameAsc">Модел - Од: А - Z</option>
        <option value="nameDsc">Модел - Од: Z - А</option>
      </select>
    </div>
  );
};

export default BikesSorter;
