import Image from "next/image";
import MainBtn from "../../MainBtn";

type MotorcycleInfoProps = {
  bike: any;
  bikes: any[];
};

const MotorcycleInfo = ({ bike }: MotorcycleInfoProps) => {
  
  return (
    <div className="px-8 relative">
      <h2 className="text-7xl text-light-color font-bold uppercase">
        {bike[0]?.title}
      </h2>
      <p className="text-neutral-700 text-lg font-semibold">
         {bike[0]?.price ? <>Цена <br /><span>{bike[0]?.price}.00 €</span></> : "Цена Наскоро"} 
      </p>
      <div className="flex justify-between items-end">
        <Image
          src={bike[0]?.gallery.modelImage.src}
          alt={bike[0]?.gallery.modelImage.src}
          width={422}
          height={241}
        />
        <div className="flex flex-col gap-2 text-center">
          {bike[0]?.specs! && (
            <ul className="mb-4 flex flex-col gap-2 items-start">
              <li className="flex justify-between items-center gap-4 w-full">
                <p className="font-semibold text-md tracking-tighter text-black text-right basis-1/2">
                  {bike[0].specs.cc}{" "}
                </p>
                <p className="text-neutral-300 font-semibold uppercase text-sm basis-1/2 text-left">
                  cc
                </p>
              </li>
              <li className="flex justify-between items-center gap-4 w-full">
                <p className="font-semibold text-md tracking-tighter text-black text-right basis-1/2">
                  {bike[0].specs.horsePower}
                </p>
                <p className="text-neutral-300 font-semibold uppercase text-sm basis-1/2 text-left">
                  PS
                </p>
              </li>
              <li className="flex justify-between items-center gap-4 w-full">
                <p className="font-semibold text-md tracking-tighter text-black text-right basis-1/2">
                  {bike[0].specs.torque}
                </p>
                <p className="text-neutral-300 font-semibold uppercase text-sm basis-1/2 text-left">
                  NmT
                </p>
              </li>
              <li className="flex justify-between items-center gap-4 w-full">
                <p className="font-semibold text-md tracking-tighter text-black text-right basis-1/2">
                  {bike[0].specs.serviceInterval}
                </p>
                <p className="text-neutral-300 font-semibold uppercase text-sm basis-1/2 text-left">
                  сервисен интервал
                </p>
              </li>
            </ul>
          )}

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
            link={`/motorcycles/${bike[0]?.category}/${bike[0]?.subFamilyCategory}`}
          />
        </div>
      </div>
    </div>
  );
};

export default MotorcycleInfo;
