import { BIKES, FAMILIES } from "@/app/constants/constants";
import React from "react";

type Props = {};

const TypeOfFamilyPage = async (data: any, props: Props) => {

  let pathname = data.params.slug;
  console.log(pathname);

  const res = await fetch(`${FAMILIES}?type=${pathname}`);
  const familiesData = await res.json();
    
  console.log(familiesData);
  

  return <div>{familiesData[0].type}</div>;
};

export default TypeOfFamilyPage;
