import dynamic from "next/dynamic";
import Image from "next/image";
import Link from "next/link";
import { useMemo } from "react";
import logo1 from "../../../public/logoBlack.png";
import Breadcrumbs from "../components/Breadcrumbs/Breadcrumbs";

const DealerPage = () => {
  const Map = useMemo(
    () =>
      dynamic(() => import("../components/Map/Map"), {
        loading: () => (
          <Image
            src={"/images/triumphLogo.png"}
            alt="Logo"
            width={500}
            height={500}
          />
        ),
        ssr: false,
      }),
    []
  );

  return (
    <section
      className="w-full bg-white flex justify-center items-center py-8 md:py-16 relative"
      style={{
        backgroundImage: 'url("/images/dealer/dealerBanner.jpg")',
        backgroundSize: "cover",
        backgroundPosition: "center center",
        backgroundRepeat: "no-repeat",
      }}
    >
          <Breadcrumbs/>

      <div className="bg-white m-auto w-11/12 lg:w-10/12 xl:w-7/12 rounded-lg flex flex-col justify-between items-start">
        <div className="flex flex-col justify-center items-center w-full h-full basis-1/5 p-5 md:p-10">
          <Image src={logo1} alt={"Logo"} height={100} width={228} />
        </div>
        <div className="basis-4/5 w-full flex flex-col lg:flex-row justify-between">
          <div className="flex flex-col justify-center items-start basis-1/2 p-4 md:p-20">
            <p className="font-semibold text-xl">Адреса:</p>
            <p className="mb-8 text-lg">
              Св. Кирил и Методиј бр.20, Скопје 1000
            </p>

            <p className="font-semibold text-xl">Email:</p>
            <a
              href="mailto:info@triumphmotorcycles.mk"
              className="underline text-lg"
            >
              info@triumphmotorcycles.mk
            </a>

            <div className="flex justify-between items-center gap-4 mt-4">
              <Link
                href={"https://www.facebook.com/triumphmotorcyclesskopje"}
                target="_blank"
              >
                <Image
                  src={"/facebook.svg"}
                  alt={"Facebook Icon"}
                  width={20}
                  height={20}
                />
              </Link>
              <Link
                href={"https://www.instagram.com/triumph_skopje/"}
                target="_blank"
              >
                <Image
                  src={"/instagram.svg"}
                  alt={"Instagram Icon"}
                  width={20}
                  height={20}
                />
              </Link>
              <Link
                href={"https://twitter.com/OfficialTriumph"}
                target="_blank"
              >
                <Image
                  src={"/twitter.svg"}
                  alt={"Instagram Icon"}
                  width={20}
                  height={20}
                />
              </Link>
              <Link
                href={"https://www.youtube.com/user/OfficialTriumph"}
                target="_blank"
              >
                <Image
                  src={"/youtube.svg"}
                  alt={"Instagram Icon"}
                  width={20}
                  height={20}
                />
              </Link>
            </div>
          </div>

          <div className="flex flex-col justify-center items-center basis-1/2 py-6 lg:py-0 overflow-hidden lg:mb-16">
            <Map />
          </div>
        </div>
      </div>
    </section>
  );
};

export default DealerPage;
