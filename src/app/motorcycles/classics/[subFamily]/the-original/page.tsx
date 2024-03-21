import PageParagraph from '@/app/components/familiySharedComponents/PageParagraph'
import SectionTitleH2 from '@/app/components/familiySharedComponents/SectionTitleH2'
import React from 'react'

const OriginalThruxtonPage = () => {
  return (
    <>
    <section>
        <div className="m-auto w-11/12 md:w-6/12 py-4 md:py-8 lg:py-16 text-center">
          <p className="font-semibold md:text-2xl">THRUXTON RS</p>
          <h1 className="text-5xl lg:text-8xl font-bold uppercase my-4 md:my-8 border-y-4 border-red-500">
            Оригиналниот <br /> 
            Thruxton
          </h1>
          <p className="font-semibold md:text-2xl">
           Многу мотори на сцената се претставуваат како Cafe-Racer-и, но само Thruxton се одликува со онаа автентичност која треба да ја има секоја Cafe-Racer серија. А сега легендата еволуираше задржувајки го оригиналниот стил и ДНК, но со подоби перформанси и модерни можности.
          </p>
        </div>
        <div
          className="m-auto w-full md:w-9/12"
          style={{
            backgroundImage: `url("/images/classics/thruxtonRS/thruxtonRSOriginal.avif")`,
            backgroundPosition: "center center",
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover",
            height: "70vh",
          }}
        ></div>
      </section>
      <section className="m-auto w-11/12 md:w-8/12 lg:w-6/12 py-4 md:py-8 lg:py-16">
        <SectionTitleH2 text={"Автентичен Thruxton RS"} color={"dark"} />
        <div className="flex flex-col gap-4">
          <PageParagraph
            text={
              "Првата Triumph Bonneville T120 Thruxton Racer серија играше голема улога во раѓањеот на моторциклизмот од двете страни на Атлантикот со мотор кој доминираше во 1950-тите (со победата на Thruxton 500 трката, откаде го доби и своето име) и со постигнувањето на најголемата брзина некогаш постигната од продукциски мотор во 1969 година на трката Isle Of Man."
            }
          />
          <PageParagraph
            text={
              "Паралелно со ова многу тинејџери возачи ја одбираат Bonneville Т120 серијата на Triumph како стартна точка за развивање на свои „cafe-racer“ мотори само заради експлозивниот карактер и уникатниот стил."
            }
          />
          <PageParagraph
            text={
              "Оригиналната Thruxton cafe-racer серија се врати на пазарот во 2004-тата година кога Triumph реши да ги врати своите легенди назад во живот. Од 2016 година па наваму Thruxton RS серијата се катертеризира со одлични перформанси и контрола."
            }
          />
        </div>
      </section>
      <section className="m-auto w-11/12 md:w-8/12 lg:w-6/12 py-4 md:py-8 lg:py-16">
        <SectionTitleH2 text={"Тhruxton RS Денеска"} color={"dark"} />
        <div className="flex flex-col gap-4">
          <PageParagraph
            text={
              "привлечноста на Thruxton RS се сведува на автентичноста, спортскиот карактер и оригиналниот cafe-racer стил како и целосниот пакет на перформанси кои ги нуди Thruxton RS.."
            }
          />
          <PageParagraph
            text={
              "Уникатниот и неспоредлив тркачки карактер кој го поседува новиот RS ги има сите карактеристики како и пополарниот Thruxton 1200 R но отсега со уште повеќе сила и перформанси благодарејки на малата вкупна тежинва, високо перформантни елементи и стил."
            }
          />
          <PageParagraph
            text={
              "Ова е многу повече од оригинален cafe-racer. Ова е најдинамичниот, најмоќниот и нај специфираниот Thruxton некогаш изработен."
            }
          />
        </div>
        <div
          className="m-auto w-full mt-4 md:mt-8"
          style={{
            backgroundImage: `url("/images/classics/thruxtonRS/thruxtonOriginalMidBanner.avif")`,
            backgroundPosition: "center center",
            backgroundRepeat: "no-repeat",
            backgroundSize: "cover",
            height: "70vh",
          }}
        ></div>
      </section>
    </>
  )
}

export default OriginalThruxtonPage