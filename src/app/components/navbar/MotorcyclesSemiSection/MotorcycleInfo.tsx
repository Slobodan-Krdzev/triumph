import Image from "next/image";
import MainBtn from "../../MainBtn";

type MotorcycleInfoProps = {
  bike: any;
  bikes: any[];
};

const MotorcycleInfo = ({ bike }: MotorcycleInfoProps) => {
  console.log("BIKE TO RENDER", bike);
  return (
    <div className="px-8 relative">
      <h2 className="text-7xl text-light-color font-bold uppercase">{bike[0]?.title}</h2>
      <p className="absolute top-32 left-12 text-black text-lg font-medium">{bike[0]?.price}</p>
      <div className="flex justify-between items-end">
        <Image src={bike[0]?.gallery.modelImage.src} alt={bike[0]?.gallery.modelImage.src} width={422} height={241}/>
          <div className="flex flex-col gap-2 text-center">
            <MainBtn text={"Конфигурирај"} bgBlack={false} isLink={true} link={`/configure/bike/${bike[0]?.model}`}/>
            <MainBtn text={'Детали'} bgBlack={true} isLink={true} link={`/motorcycles/${bike[0]?.category}/${bike[0]?.model}`}/>
          </div>
      </div>
    </div>
  );
};

export default MotorcycleInfo;
