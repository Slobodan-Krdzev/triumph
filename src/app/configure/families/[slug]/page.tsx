import { BIKES, FAMILIES } from "@/app/constants/constants";
import React from "react";

type Props = {};

const TypeOfFamilyPage = async (data: any, props: Props) => {
  let pathname = data.params.slug;
  console.log(pathname);

  const res = await fetch(`${FAMILIES}?type=${pathname}`);
  const familiesData = await res.json();

  const bikesRes = await fetch(`${BIKES}?type=${pathname}`, {cache: 'no-cache'});
  const bikes = await bikesRes.json();

  console.log(familiesData);

  return <>
    <h1>{familiesData[0].type}</h1>
    <ul>
      {bikes.map((bike: any) => <li key={bike.id}>{bike.model}</li>)}
    </ul>
  </>;
};

export default TypeOfFamilyPage;
