import React from 'react'
import SpecTableListi from './SpecTableListi'


type SpecsTableProps ={
  specs: any
}

const SpecsTable = ({specs}: SpecsTableProps) => {
  return (
    <section className='px-4'>
      <SpecTableListi items={specs.engineTransmission} title={'Мотор и Менувач'}/>
    </section>
  )
}

export default SpecsTable