import Image from "next/image";
import Link from "next/link";

type FamilyBikesSliderProps = {
  bikesToRender: any[];
};

const FamilyBikesSlider = ({ bikesToRender = [] }: FamilyBikesSliderProps) => {
  
  if (bikesToRender) {
    return (
      <div className="flex justify-between gap-4 overflow-x-scroll bg-white rounded-sm slight-white-bg">
        {bikesToRender.map((bike: any) => (
          <div
            key={bike.bikeId}
            className="bg-white shadow-lg lg:mb-8 flex flex-col justify-between"
          >
            <div className="basis-2/6">
              <Image
                src={bike.gallery.modelImage.src}
                alt={bike.gallery.modelImage.alt}
                width={271}
                height={150}
              />
            </div>

            <div className="mb-8 p-4 text-center flex flex-col justify-start basis-2/6">
              <h3 className="text-xl font-semibold uppercase tracking-tighter">
                {bike.title}
              </h3>
              <p className="text-md mb-4">
                {bike.startingPrice === "Наскоро"
                  ? "Цени Наскоро."
                  : `Oд ${bike.startingPrice} €.`}
              </p>

              {bike.shortSpecInfo && (
                <ul className="flex flex-col list-disc text-xs">
                  {bike.shortSpecInfo.engine && (
                    <li>{bike.shortSpecInfo.engine}</li>
                  )}
                  {bike.shortSpecInfo.trademarkInfo && (
                    <li>{bike.shortSpecInfo.trademarkInfo}</li>
                  )}
                  {bike.shortSpecInfo.trademarkInfo2 && (
                    <li>{bike.shortSpecInfo.trademarkInfo2}</li>
                  )}
                </ul>
              )}
            </div>
            <div className="flex border-t-2 border-gray-300 py-2 basis-1/6">
              <Link
                href={`/configure/bikes/${bike.model}`}
                className="text-xl  border-r-2 border-gray-300 w-1/2"
              >
                Конфигuрација
              </Link>
              <Link href={''} className="text-md p-2 w-1/2">
                Види Детали
              </Link>
            </div>
          </div>
        ))}
      </div>
    );
  }
};

export default FamilyBikesSlider;
