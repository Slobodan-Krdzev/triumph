import Image from "next/image";
import MainBtn from "../../MainBtn";

type MotorcycleInfoProps = {
  bike: any;
  bikes: any[];
};

const MotorcycleInfo = ({ bike }: MotorcycleInfoProps) => {

  console.log(bike);
  

  return (
    <div className="px-8 relative">
      <h2 className="text-7xl text-light-color font-bold uppercase">
        {bike[0]?.title ?? "Triumph"}
      </h2>
      {bike[0]?.gallery.modelImage.src && (
        <p className="text-neutral-700 text-lg font-semibold">
          {bike[0]?.price ? (
            <>
              Цена <br />
              <span>{bike[0]?.price}.00 €</span>
            </>
          ) : (
            "Цена Наскоро"
          )}
        </p>
      )}

      <div className="flex justify-between items-end">
        <Image
          src={bike[0]?.gallery.modelImage.src ?? "/images/triumphLogo.png"}
          alt={bike[0]?.gallery.modelImage.src}
          width={422}
          height={241}
          className="basis-1/2"
        />
        <div className="flex flex-col gap-2 text-center basis-1/2">
          {bike[0]?.specs! && (
            <ul className="mb-4 flex flex-col gap-2 items-start">
              {bike[0].specs?.map(
                (
                  spec: { desc: string; data: number | string },
                  idx: number
                ) => {
                  return (
                    <li
                      key={`${spec.data} -- ${idx}`}
                      className="flex justify-start items-center gap-4 w-full"
                    >
                      <p className=" font-semibold text-md tracking-tighter text-black basis-1/6">
                        {spec.data ?? ""}
                      </p>
                      <p className="text-neutral-300 font-semibold uppercase text-sm  text-left basis-5/6">
                        {spec.desc ?? ""}
                      </p>
                    </li>
                  );
                }
              )}
            </ul>
          )}

          {bike[0]?.gallery.modelImage.src && (
            <>
              <MainBtn
                text={"Конфигурирај"}
                bgBlack={false}
                isLink={true}
                link={`/configure/bikes/${bike[0]?.subFamilyName}`}
              />
              <MainBtn
                text={"Детали"}
                bgBlack={true}
                isLink={true}
                link={`/motorcycles/${bike[0]?.familyType}/${bike[0]?.subFamilyName}`}
              />
            </>
          )}
        </div>
      </div>
    </div>
  );
};

export default MotorcycleInfo;
