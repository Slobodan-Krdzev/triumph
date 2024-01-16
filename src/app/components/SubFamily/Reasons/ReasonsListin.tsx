import Image from "next/image";

type ReasonType = {
  title: string;
  desc: string;
  image?: string;
  video?: string;
};

type ReasonsListinProps = {
  reasons: ReasonType[];
  textWhite?: boolean
};

const ReasonsListin = ({ reasons = [], textWhite }: ReasonsListinProps) => {
  return (
    <ol className="lg:w-10/12 md:w-10/12 w-11/12 m-auto md:mt-16 mt-4 md:text-3xl text-xl font-semibold mb-8 md:mb-16">
      {reasons.map((reason) => (
        <li key={reason.title} className={`md:mb-16 mb-8 last:mb-0 ${textWhite ? "text-white" : ""}`}>
          <div className="md:w-7/12 m-auto">
            <h3 className="font-medium text-3xl lg:text-5xl mb-2">
              {(reasons.indexOf(reason) + 1).toString() + '. '}{reason.title}
            </h3>
            <p className="font-normal md:text-lg text-md">{reason.desc}</p>
          </div>

          <div className="w-11/12 m-auto">
            {reason.image && (
              <Image
                src={reason.image}
                alt={reason.title}
                width={1410}
                height={793}
                className="mt-2 md:mt-8"
              />
            )}
            {reason.video && (
              <iframe
                className="w-full m-auto mt-2 md:mt-8"
                width="1280"
                height="720"
                src={reason.video}
                title={reason.title}
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowFullScreen
              ></iframe>
            )}
          </div>
        </li>
      ))}
    </ol>
  );
};

export default ReasonsListin;
