import React from "react";
import { BIKES, FAMILIES } from "../constants/constants";
import { filterOutBikesByFamily } from "../helpers/filterBikesByFamily";
import BtnLink from "../components/MainBtn";

const ConfigurePage = async () => {

  // PROMISE.ALL sredi
  const familiesRes = await fetch(`${FAMILIES}`);
  const families = await familiesRes.json();

  // ovde revalidate ili no-cache treba da odlucime 
  // mada eden motor bi se dodaval mnogu retko 
  // revalidate e podobro
  const bikesRes = await fetch(`${BIKES}`, {cache: 'no-cache'})
  const bikes = await bikesRes.json()

  return (
    <>
      <div>Configure Page renders all families</div>
      <ul>
        {families.map((family: any) => (
          <li key={family.id}>
            <b>{family.type.toUpperCase()}</b> <br />
            {family.shortDesc}{" "}
            <div>
              {filterOutBikesByFamily(family.type, bikes).map((bike: any) => <p key={bike.id}>{bike.name}</p>)}
            </div>
            <BtnLink link={`/configure/families/${family.type}`} text={'View Colection'}/>
          </li>
        ))}
      </ul>
    </>
  );
};

export default ConfigurePage;
