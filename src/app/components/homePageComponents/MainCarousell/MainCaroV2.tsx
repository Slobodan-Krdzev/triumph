import "swiper/css";
import { Autoplay, Navigation } from "swiper/modules";
// import 'swiper/css/navigation';
import { Swiper, SwiperSlide } from "swiper/react";
import "swiper/swiper-bundle.css";
import MainBtn from "../../MainBtn";
2
type MainCaroV2Props = {
  items: any[];
};

const MainCaroV2 = ({ items }: MainCaroV2Props) => {
  return (
    <section className="hidden lg:block">
      <Swiper
        navigation={true}
        modules={[Navigation, Autoplay]}
        className="mainCaroSwiper"
        autoplay={{
          delay: 5000,
          disableOnInteraction: false,
        }}
      >
        {items.map((item) => (
          <SwiperSlide
            key={item.title}
            style={{
              backgroundImage: `url('${item.image ?? ""}')`,
              backgroundPosition: "center center",
              backgroundRepeat: "no-repeat",
              backgroundSize: "cover",
              height: "100vh",
            }}
          >
            {item.video && item.video !== null && (
              <div className="h-full " style={{ width: "100vw" }}>
                <>
                  <video
                    className="relative object-fill "
                    autoPlay
                    muted
                    loop
                    style={{
                      height: "auto",
                      minWidth: "100%",
                      filter: "brightness(80%)",
                    }}
                  >
                    <source
                      className="absolute w-full h-full top-0 left-0"
                      src={item.video}
                      type="video/webm"
                    />
                  </video>
                </>

                <div className="ml-44 absolute" style={{ top: "15%" }}>
                  <h2 className="mb-4 uppercase font-bold lg:text-4xl xl:text-7xl text-white w-2/4">
                    {item.title}
                  </h2>
                  <p className="mb-4 w-2/4 text-white text-2xl font-semibold">
                    {item.desc}
                  </p>
                  <div className="flex gap-4">
                    {item.link1 && (
                      <MainBtn
                        text={item.link1.text}
                        bgBlack={false}
                        isLink={true}
                        link={item.link1.url}
                      />
                    )}
                    {item.link2 && (
                      <MainBtn
                        text={item.link2.text}
                        bgBlack={true}
                        isLink={true}
                        link={item.link2.url}
                      />
                    )}
                  </div>
                </div>
              </div>
            )}

            {item.video === null && (
              <div className="ml-44 absolute" style={{ top: "15%" }}>
                <h2 className="mb-4 uppercase font-bold lg:text-6xl xl:text-7xl text-white w-2/4">
                  {item.title}
                </h2>
                <p className="mb-4 w-2/4 text-white lg:text-xl xl:text-2xl font-semibold">
                  {item.desc}
                </p>
                <div className="flex gap-4">
                  {item.link1 && (
                    <MainBtn
                      text={item.link1.text}
                      bgBlack={false}
                      isLink={true}
                      link={item.link1.url}
                    />
                  )}
                  {item.link2 && (
                    <MainBtn
                      text={item.link2.text}
                      bgBlack={true}
                      isLink={true}
                      link={item.link2.url}
                    />
                  )}
                </div>
              </div>
            )}
          </SwiperSlide>
        ))}
      </Swiper>
    </section>
  );
};

export default MainCaroV2;
