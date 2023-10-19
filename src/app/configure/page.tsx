import React from "react";
import { FAMILIES } from "../constants/constants";

const ConfigurePage = async () => {
  const familiesRes = await fetch(`${FAMILIES}`, {next: {revalidate: 2000}});
  const families = await familiesRes.json();

  return (
    <>
      <div>Configure Page renders all families</div>

      <ul>
        {families.map((family: any) => <li key={family.id}> <b>{family.type.toUpperCase()}</b> <br />{family.shortDesc} <br /> {family.bikes.map((bike:any ) => <p key={bike.id}>{bike.name}</p>)}</li>)}
      </ul>
    </>
  );
};

export default ConfigurePage;
