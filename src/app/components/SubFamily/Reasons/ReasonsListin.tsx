import Image from "next/image";

type ReasonType = {
  title: string;
  desc: string;
  image?: string;
  video?: string;
};

type ReasonsListinProps = {
  reasons: ReasonType[];
};

const ReasonsListin = ({ reasons = [] }: ReasonsListinProps) => {
  return (
    <ol className="lg:w-6/12 md:w-10/12 w-11/12 m-auto md:mt-16 mt-4 list-decimal md:text-3xl text-xl font-semibold mb-8 md:mb-16">
      {reasons.map((reason) => (
        <li key={reason.title} className="md:mb-8 mb-4 last:mb-0">
          <h3 className="font-medium md:text-3xl text-xl mb-2">{reason.title}</h3>
          <p className="font-normal md:text-lg text-md">{reason.desc}</p>

          {reason.image && <Image src={reason.image} alt={reason.title} width={1410} height={793} className="mt-2 md:mt-8"/>}
          {reason.video && <iframe className="w-full m-auto mt-2 md:mt-8" width="1280" height="720" src={reason.video} title={reason.title}  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowFullScreen></iframe>
           }
        </li>
      ))}
    </ol>
  );
};

export default ReasonsListin;
