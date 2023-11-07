import Image from "next/image";
import Link from "next/link";

type FamilyBikesSliderProps = {
  itemsToRender: any[];
};

const FamilyBikesSlider = ({ itemsToRender = [] }: FamilyBikesSliderProps) => {
  
  if (itemsToRender && itemsToRender.length > 3) {
    return (
      <div className="flex justify-start gap-8 overflow-x-scroll bg-white rounded-sm slight-white-bg ">
        
        {itemsToRender.map((item: any) => (
          <div
            key={item.id}
            className="bg-white shadow-xl lg:mb-8 flex flex-col justify-between rounded-md"
          >
            <div className="">
              <Image
                src={item.gallery.modelImage.src}
                alt={item.gallery.modelImage.alt}
                width={271}
                height={150}
              />
            </div>

            <div className="mb-8 p-4 text-center flex flex-col justify-start w-72 grow">
              <h3 className="text-xl font-semibold uppercase tracking-tighter">
                {item.title}
              </h3>
              <p className="text-md mb-4">
                {item.price === "Наскоро"
                  ? "Цени Наскоро."
                  : `Oд ${item.price} €.`}
              </p>

              {item.shortSpecInfo && (
                <ul className="flex flex-col list-disc text-sm px-8 text-start">
                  {item.shortSpecInfo.info1 && (
                    <li>{item.shortSpecInfo.info1}</li>
                  )}
                  {item.shortSpecInfo.info2 && (
                    <li>{item.shortSpecInfo.info2}</li>
                  )}
                  {item.shortSpecInfo.info3 && (
                    <li>{item.shortSpecInfo.info3}</li>
                  )}
                </ul>
              )}
            </div>
            <div className="flex border-t-2 border-gray-300 py-2 items-center text-center ">
              <Link
                href={`/configure/bikes/${item.model}`}
                className="text-sm text-red uppercase w-1/2"
              >
                Конфигурација
              </Link>
              <Link href={''} className="text-md p-2 w-1/2 uppercase text-sm border-l-2 border-gray-300">
                Види Детали
              </Link>
            </div>
          </div>
        ))}
      </div>
    );
  }

  if(itemsToRender && itemsToRender.length < 3) {
    return (
      <div className="flex justify-start gap-8">
      
      {itemsToRender.map((item:any) =><div
            key={item.id}
            className="bg-white shadow-lg lg:mb-8 flex flex-col justify-between rounded-md"
          >
            <div className="basis-2/6">
              <Image
                src={item.gallery.modelImage.src}
                alt={item.gallery.modelImage.alt}
                width={271}
                height={150}
              />
            </div>

            <div className="mb-8 p-4 text-center flex flex-col justify-start basis-2/6 w-72">
              <h3 className="text-xl font-semibold uppercase tracking-tighter">
                {item.title}
              </h3>
              <p className="text-md mb-4">
                {item.price === "Наскоро"
                  ? "Цени Наскоро."
                  : `Oд ${item.price} €.`}
              </p>

              {item.shortSpecInfo && (
                <ul className="flex flex-col list-disc text-sm px-4 text-start">
                  {item.shortSpecInfo.info1 && (
                    <li>{item.shortSpecInfo.info1}</li>
                  )}
                  {item.shortSpecInfo.info2 && (
                    <li>{item.shortSpecInfo.info2}</li>
                  )}
                  {item.shortSpecInfo.info3 && (
                    <li>{item.shortSpecInfo.info3}</li>
                  )}
                </ul>
              )}
            </div>
            <div className="flex border-t-2 border-gray-300 py-2 items-center text-center ">
              <Link
                href={`/configure/bikes/${item.model}`}
                className="text-sm text-red uppercase w-1/2"
              >
                Конфигурација
              </Link>
              <Link href={''} className="text-md p-2 w-1/2 uppercase text-sm border-l-2 border-gray-300">
                Види Детали
              </Link>
            </div>
          </div>)}

      </div>
    )
  }
};

export default FamilyBikesSlider;
