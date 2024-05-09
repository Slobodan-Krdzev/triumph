import Image from "next/image";
import PageParagraph from "../familiySharedComponents/PageParagraph";
import SectionTitleH2 from "../familiySharedComponents/SectionTitleH2";

type TopSectionProps = {
  title: string;
  desc: string;
  subtitle: string;
  image: string;
  bgImage: string
};

const TopSection = ({ title, desc, subtitle, image, bgImage }: TopSectionProps) => {
  return (
    <section className="relative pt-16">
      <div className="xl:w-6/12 pb-4 lg:pb-16 md:px-32 lg:px-56 px-4">
        <SectionTitleH2 text={title} color={"dark"} />
        <PageParagraph text={desc} />
      </div>

      <div className="flex flex-col lg:flex-row  items-center xl:px-56 px-4 py-20" >
        <Image src={image} alt={subtitle} height={788} width={1030} className="w-full lg:w-8/12 xl:w-10/12"/>
        <h2 className="2xl:text-6xl lg:text-3xl text-2xl mt-8 xl:mt-0 font-semibold uppercase xl:pl-20 lg:pl-16 order-1 xl:order-2">{subtitle}</h2>
      </div>

      <div className="w-full xl:-mt-28 mt-8 subFamilyTopSectionBackgroundImage" style={{
        backgroundImage: `url('${bgImage}')`,
        backgroundPosition: 'center',
        backgroundRepeat: 'no-repeat',
        content: '',
      }}>

      </div>
    </section>
  );
};

export default TopSection;
