import Image from "next/image";
import logo1 from "../../../public/logoBlack.png";
import Link from "next/link";

const DealerPage = () => {
  return (
    <section
      className="w-full bg-white flex justify-center items-center"
      style={{
        height: "100vh",
        backgroundImage: 'url("/images/dealer/dealerBanner.jpg")',
        backgroundSize: "cover",
        backgroundPosition: "center center",
        backgroundRepeat: "no-repeat",
      }}
    >
      <div
        className="bg-white m-auto w-6/12 rounded-lg flex flex-col justify-between items-start"
        style={{ height: "60vh" }}
      >
        <div className="flex justify-center items-center w-full h-full basis-1/5 pt-12">
          <Image src={logo1} alt={"Logo"} height={100} width={228} />
        </div>
        <div className="basis-4/5 w-full flex justify-between">
          <div className="flex flex-col justify-center items-start basis-1/2 p-20">
            <p className="font-semibold text-lg">Адреса:</p>
            <p className="mb-8">Св. Кирил и Методиј бр.20, Скопје 1000</p>

            <p className="font-semibold text-lg">Телефони за контакт:</p>
            <ul className="mb-8">
              <li>
                <a href="tel:+389 2 312 0706" className="underline">+389 2 312 0706</a>
              </li>
              <li>
                <a href="tel:+389 78 255 535" className="underline">+389 78 255 535</a>
              </li>
            </ul>

            <p className="font-semibold text-lg">Email:</p>
            <a href="mailto:info@triumphmotorcycles.mk" className="underline">
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
                href={"https://www.instagram.com/triumphmotorcycles_skopje/"}
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

          <div className="flex flex-col justify-center items-center basis-1/2">
            mapta
          </div>
        </div>
      </div>
    </section>
  );
};

export default DealerPage;
