import SecondaryPagesHeroSection from "@/app/components/SubFamily/SecondaryPagesHeroSection";
import YoutubeVideoCarousell, {
    YoutubeVideoCarousellItemType,
} from "@/app/components/SubFamily/YoutubeVideoCarousell/YoutubeVideoCarousell";
import BikeInfoTextImageBtn from "@/app/components/familiySharedComponents/BikeInfoTextImageBtn";

const videoItems: YoutubeVideoCarousellItemType[] = [
  {
    src: "https://www.youtube.com/embed/y7IGShCe__c",
    title: "Како Да ја Користите Апликацијата",
  },
  {
    src: "https://www.youtube.com/embed/oKaTvrQZykU",
    title: "Како Да ја Користите Апликацијата",
  },
  {
    src: "https://www.youtube.com/embed/IqKMfAgGT6Y",
    title: "Како Да ја Користите Апликацијата",
  },
  {
    src: "https://www.youtube.com/embed/j9q4gZrTqd4",
    title: "Како Да ја Користите Апликацијата",
  },
  {
    src: "https://www.youtube.com/embed/Kwl6Y9nkN3",
    title: "Како Да ја Користите Апликацијата",
  },
  {
    src: "https://www.youtube.com/embed/x7oW9oAJwDE",
    title: "Како Да ја Користите Апликацијата",
  },
];

const MyTriumphApp = () => {
  return (
    <>
      <SecondaryPagesHeroSection
        bannerImage={"/images/owners/myTriumphAppHeroBanner.avif"}
        text={`My Triumph App`}
      />

      <main className="bg-white">
        <section className="m-auto w-11/12 md:w-8/12">
          <BikeInfoTextImageBtn
            desc={
              "My-Triumph App е бесплатна апликација наменета за iOS ™ и Android ™ системи која се состои од навигации, сумирање на авантурата и ексклузивни My Garage опции."
            }
            ctaBtn={{
              text: "Google Play",
              link: "https://play.google.com/store/apps/details?id=uk.co.triumphmotorcycles.mytriumph",
            }}
            ctaBtn2={{
              text: "App Store",
              link: "https://apps.apple.com/us/app/my-triumph/id1470040586",
            }}
            image={{
              src: "/images/owners/myТriumphАppPromo1.avif",
              alt: "My Triumph App",
            }}
            blackBtn={false}
          />
        </section>
        
        <YoutubeVideoCarousell items={videoItems} />
      </main>
    </>
  );
};

export default MyTriumphApp;
