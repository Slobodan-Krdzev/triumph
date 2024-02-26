import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import BikeModelImage from "./BikeModelImage";
import ImageActions from "./ImageActions";
import { faX } from "@fortawesome/free-solid-svg-icons";

type BikeModalProps = {
  bike: any;
  handleClose: () => void;
};

const BikeModal = ({ bike, handleClose }: BikeModalProps) => {
  return (
    <section
      className="fixed h-screen left-0 right-0 bg-white z-50 flex justify-center items-center "
      style={{
        top: "64px",
      }}
    >
      <div className="w-10/12 h-full relative hidden lg:block">
        <button onClick={handleClose} style={{
          position: 'absolute',
          top: '5%',
          right: 0
        }}>
          <FontAwesomeIcon icon={faX} size="xl" />
        </button>
        <div className="flex flex-col justify-end items-center basis-2/12 gap-8">
          <div className="basis-2/12"></div>
          <h2 className="basis-3/12 text-center m-auto text-4xl font-semibold uppercase">
            {bike.title ?? ""}
          </h2>
          <div className="flex justify-center">
            <ImageActions modalVersion />
          </div>
        </div>
        <div className="basis-7/12 flex flex-col items-center justify-between">
            <BikeModelImage bike={bike} modalImage/>
        </div>
      </div>

      <div className="w-10/12 h-full relative flex flex-col justify-start pt-16 lg:hidden">
        <button onClick={handleClose} style={{
          position: 'absolute',
          top: '2%',
          right: 0
        }}>
          <FontAwesomeIcon icon={faX} size="xl" />
        </button>
        <div className="flex flex-col justify-start items-center basis-2/12 gap-8">
          <div className="basis-2/12"></div>
          <h2 className="basis-3/12 text-center m-auto text-4xl font-semibold uppercase">
            {bike.title ?? ""}
          </h2>
          
        </div>
        <div className="basis-4/12 flex flex-col items-center justify-between">
            <BikeModelImage bike={bike} modalImage/>
        </div>
        <div className="flex justify-center">
            <ImageActions modalVersion />
          </div>
      </div>
    </section>
  );
};

export default BikeModal;
