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
      <h2 className="text-7xl text-light-color font-bold uppercase">
        {bike[0]?.title}
      </h2>
      <p className="text-black text-lg font-medium">
        Цена {bike[0]?.price ?? "Наскоро"}
      </p>
      <div className="flex justify-between items-end">
        <Image
          src={bike[0]?.gallery.modelImage.src}
          alt={bike[0]?.gallery.modelImage.src}
          width={422}
          height={241}
        />
        <div className="flex flex-col gap-2 text-center">
          {/* {ako bajk ima info} */}
          <ul className="mb-4 flex flex-col gap-2 items-start">
            <li className="flex flex-row justify-between items-center gap-4">
              <span className="font-semibold text-xl text-black">cc</span>
              <span className="text-neutral-500 font-normal uppercase text-sm">cc info</span>
            </li>
            <li className="flex justify-between items-center  gap-4">
              <span className="font-semibold text-xl text-black">ps</span>
              <span className="text-neutral-500 font-normal uppercase text-sm">horse power</span>
            </li>
            <li className="flex justify-between items-center  gap-4">
              <span className="font-semibold text-xl text-black">Nmt</span>
              <span className="text-neutral-500 font-normal uppercase text-sm">torque</span>
            </li>
            <li className="flex justify-between items-center  gap-4">
              <span className="font-semibold text-xl text-black">16.000</span>
              <span className="text-neutral-500 font-normal uppercase text-sm">service interval</span>
            </li>
          </ul>
          <MainBtn
            text={"Конфигурирај"}
            bgBlack={false}
            isLink={true}
            link={`/configure/bike/${bike[0]?.model}`}
          />
          <MainBtn
            text={"Детали"}
            bgBlack={true}
            isLink={true}
            link={`/motorcycles/${bike[0]?.category}/${bike[0]?.model}`}
          />
        </div>
      </div>
    </div>
  );
};

export default MotorcycleInfo;
