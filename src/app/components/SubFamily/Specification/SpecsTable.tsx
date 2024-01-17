import React from "react";
import SpecTableListi from "./SpecTableListi";

type SpecsTableProps = {
  specs: any;
};

const SpecsTable = ({ specs }: SpecsTableProps) => {
  return (
    <section className="px-4">
      {specs.engineTransmission && (
        <SpecTableListi
          items={specs.engineTransmission}
          title={"Мотор и Менувач"}
          isOpen={true}
        />
      )}

      {specs.frame && <SpecTableListi items={specs.frame} title={"Шасија"} />}

      {specs.dimension && (
        <SpecTableListi items={specs.dimension} title={"Димензиии & Тежина"} />
      )}

      {specs.fuelConsumption && (
        <SpecTableListi items={specs.fuelConsumption} title={"Потрошувачка"} />
      )}

      {specs.service && (
        <SpecTableListi items={specs.service} title={"Сервисен Интервал"} />
      )}
    </section>
  );
};

export default SpecsTable;
