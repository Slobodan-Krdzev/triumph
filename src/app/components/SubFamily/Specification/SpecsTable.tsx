import React from 'react'
import SpecTableListi from './SpecTableListi'


type SpecsTableProps ={
  specs: any
}

const SpecsTable = ({specs}: SpecsTableProps) => {
  return (
    <section className='px-4'>
      <SpecTableListi items={specs.engineTransmission} title={'Мотор и Менувач'}/>
      <SpecTableListi items={specs.frame} title={'Шасија'}/>
      <SpecTableListi items={specs.dimension} title={'Димензиии & Тежина'}/>
      <SpecTableListi items={specs.fuelConsumption} title={'Потрошувачка'}/>



    </section>
  )
}

export default SpecsTable