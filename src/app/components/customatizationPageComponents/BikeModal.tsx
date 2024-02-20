import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import BikeModelImage from "./BikeModelImage";
import ImageActions from "./ImageActions";
import { faX } from "@fortawesome/free-solid-svg-icons";

type BikeModalProps = {
  bike: any;
  handleClose: () => void;
};

const BikeModal = ({ bike, handleClose }: BikeModalProps) => {
  console.log(bike.title);

  return (
    <section
      className="bikeModal fixed left-0 right-0 bottom-0 bg-white z-50 flex justify-center items-center "
      style={{
        top: "64px",
      }}
    >
      <div className="w-10/12 h-full flex flex-col ">
        <div className="flex justify-end items-center basis-2/12 gap-8">
          <div className="basis-1/12"></div>
          <h2 className="basis-10/12 text-center m-auto text-2xl font-semibold uppercase">
            {bike.title ?? ""}
          </h2>

          <div className="basis-1/12 flex justify-center">
            <button onClick={handleClose}>
              <FontAwesomeIcon icon={faX} size="xl" />
            </button>
          </div>
        </div>
        <div className="basis-9/12 flex flex-col items-center justify-between">
          <div>
            <BikeModelImage bike={bike} />
          </div>
          <div className="flex justify-center">
            <ImageActions modalVersion />
          </div>
        </div>
      </div>
    </section>
  );
};

export default BikeModal;
