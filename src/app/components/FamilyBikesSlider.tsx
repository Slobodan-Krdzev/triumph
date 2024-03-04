import Image from "next/image";
import Link from "next/link";
import Card from "./Card";

type FamilyBikesSliderProps = {
  itemsToRender: any[];
  deleteBtn?: boolean
};

const FamilyBikesSlider = ({ itemsToRender = [], deleteBtn}: FamilyBikesSliderProps) => {

  
  if (itemsToRender && itemsToRender.length >= 1) {
    return (
      <div className="flex justify-start gap-8 overflow-x-scroll bg-white rounded-sm slight-white-bg ">
        {itemsToRender.map((item: any) => (
          <Card key={item.id} item={item} deleteBtn={deleteBtn}/>
        ))}
      </div>
    );
  }

  if (itemsToRender && itemsToRender.length < 1) {
    return (
      <div className="flex justify-start gap-8">
        {itemsToRender.map((item: any) => (
          <Card key={item.id} item={item} deleteBtn={deleteBtn}/>
        ))}
      </div>
    );
  }
};

export default FamilyBikesSlider;
