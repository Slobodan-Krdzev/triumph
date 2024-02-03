import FamilyBikesSlider from "./FamilyBikesSlider";
import MainBtn from "./MainBtn";

//OVIE TYPES TREBA DA STOJAT --- type bike[] ,  familyType
type BikesByFamilyWithSliderProps = {
  items: any[];
  familyData: {
    title: string;
    desc: string;
    url: string;
  };
};

const BikesByFamilyWithSlider = ({
  items,
  familyData,
}: BikesByFamilyWithSliderProps) => {

  return (
    <div className="flex lg:flex-row flex-col md:mb-24 mb-16 gap-8">
      <div className="lg:basis-1/3 basis-1 md:border-r-2 border-gray-300 md:pt-12">
        <h2 className="text-4xl uppercase font-semibold mb-8">
          {familyData.title}
        </h2>
        <div className="lg:flex flex-col items-start md:w-10/12">
          {familyData.desc && (
            <p className="mb-8 text-gray-700">{familyData.desc}</p>
          )}
          {familyData.url === "" ? (
            ""
          ) : (
            <MainBtn
              text={"Види Колекција"}
              bgBlack={true}
              isLink={true}
              link={familyData.url}
            />
          )}
        </div>
      </div>
      <div className="lg:basis-2/3 grow-0  overflow-hidden">
        <FamilyBikesSlider itemsToRender={items} />
      </div>
    </div>
  );
};

export default BikesByFamilyWithSlider;
