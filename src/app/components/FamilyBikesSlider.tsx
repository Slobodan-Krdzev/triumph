import Card from "./Card";

type FamilyBikesSliderProps = {
  itemsToRender: any[];
  deleteBtn?: boolean;
  updateGrg?: (bike:any) => void;
  handleBtn?: () => void
};

const FamilyBikesSlider = ({ itemsToRender = [], deleteBtn, updateGrg, handleBtn}: FamilyBikesSliderProps) => {

  
  if (itemsToRender && itemsToRender.length >= 1) {
    return (
      <div className="flex justify-start gap-8 overflow-x-scroll bg-white rounded-sm slight-white-bg ">
        {itemsToRender.map((item: any) => (
          <Card key={item.id} item={item} deleteBtn={deleteBtn} updateGrg={updateGrg} handleBtn={handleBtn}/>
        ))}
      </div>
    );
  }

  if (itemsToRender && itemsToRender.length < 1) {
    return (
      <div className="flex justify-start gap-8">
        {itemsToRender.map((item: any) => (
          <Card key={item.id} item={item} deleteBtn={deleteBtn} updateGrg={updateGrg}/>
        ))}
      </div>
    );
  }
};

export default FamilyBikesSlider;
