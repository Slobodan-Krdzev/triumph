import ImageCarousell from "@/app/components/ClothingComponents/ImageCarousell";
import MainBtn from "@/app/components/MainBtn";
import PageParagraph from "@/app/components/familiySharedComponents/PageParagraph";
import Image from "next/image";

const caroItems = [{
    id: 1,
    src: "/images/clothes/esentialCaro1.avif",
    alt: "Облека за Возење (Есенцијално парче)"
},
{
    id: 2,
    src: "/images/clothes/esentialCaro2.avif",
    alt: "Облека за Возење (Есенцијално парче)"
},
{
    id: 3,
    src: "/images/clothes/esentialCaro3.avif",
    alt: "Облека за Возење (Есенцијално парче)"
},
{
    id: 4,
    src: "/images/clothes/esentialCaro4.avif",
    alt: "Облека за Возење (Есенцијално парче)"
},
{
    id: 5,
    src: "/images/clothes/esentialCaro5.avif",
    alt: "Облека за Возење (Есенцијално парче)"
},
{
    id: 6,
    src: "/images/clothes/esentialCaro6.avif",
    alt: "Облека за Возење (Есенцијално парче)"
}]


const RidingEssentialsPage = () => {
  return (
    <>
      <section
        className="flex justify-center items-center"
        style={{
          backgroundImage: 'url("/images/clothes/esentialWearBanner.avif")',
          backgroundPosition: "center center",
          backgroundRepeat: "no-repeat",
          backgroundSize: "cover",
          height: "100vh",
        }}
      >
        <div
          className="flex justify-center items-center h-full w-full"
          style={{
            backgroundImage:
              "radial-gradient(50% 47%,#b6b6b6af 50%,rgba(34,34,34,0) 100%)",
          }}
        >
          <h1 className="text-4xl md:text-6x lg:text-8xl font-bold text-center text-white uppercase border-b-4 border-red-600 m-auto w-10/12">
            Есенцијална Облека <br /> за Возење
          </h1>
        </div>
      </section>
      <section className="m-auto lg:gap-8 gap-4 flex flex-col justify-center items-center py-4 md:py-8 lg:py-16 bg-white px-4">

        <Image
          src={"/images/clothes/essentialImg1.avif"}
          alt="Облека за Возење Слика 1"
          height={793}
          width={1410}
        />


        <Image
          src={"/images/clothes/essentialImg2.avif"}
          alt="Облека за Возење Слика 2"
          height={793}
          width={1410}
        />
      </section>

      <section className="m-auto px-4 md:px-8 bg-white">
      <ImageCarousell items={caroItems} />

      </section>


      <section className="text-center pb-4 md:pb-8 lg:pb-16 bg-white">
        <h2 className="text-2xl md:text-5xl font-bold uppercase border-b-4 border-red-600 w-3/4 m-auto pb-4 mb-4">
          Достапни Веднаш
        </h2>
        <p className="text-md md:text-2xl font-semibold uppercase mb-8">
          Лоцирајте ја нашата најблиска продавница.
        </p>
        <MainBtn
          text={"Најди Продавница"}
          bgBlack={true}
          isLink={true}
          link={`/`}
        />
      </section>
    </>
  );
};

export default RidingEssentialsPage;
