import React from "react";

const PolicyPage = () => {
  return (
    <>
      <section className="gray-bg text-white flex justify-center items-center py-52">
        <h1 className="text-3xl md:text-5xl lg:text-8xl font-bold uppercase">
          PRIVACY POLICY
        </h1>
      </section>
      <section className="m-auto w-11/12 md:w-6/12 flex flex-col gap-4 py-4 md:py-8 lg:py-16">
        <p className="text-lg md:text-xl">
          Welcome to the Triumph Privacy Policy. At Triumph we take your
          personal privacy very seriously and are committed to protecting your
          personal information.
          <br />
          Please read this privacy policy carefully as it contains important
          information about who we are and how and why we collect, store, use
          and share your personal information, including on our websites and
          applications, such as the My Triumph app for mobile devices (the
          “Application”). It also explains your rights in relation to your
          personal information and how to contact us or the supervisory
          authorities if you have a complaint.
          <br />
          We subject this privacy policy to regular review and when changes are
          made we will notify you via the website and/or by email.
          <br />
          This Privacy Policy was published on May 11, 2018 and was last updated
          on June 29, 2022.
        </p>

        <h2 className="text-1xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-8">WHO WE ARE</h2>
        <p className="text-lg md:text-xl">This policy is for and on behalf of Triumph Motorcycles Limited company registration number 01735844 , in the United Kingdom, whose registered office is at Ashby Road , Measham , Swadlincote , Derbyshire , DE 12 7 JP , and for its affiliated companies collectively referred to as the `Triumph Group`.</p>
        <p className="text-lg md:text-xl"> For the purposes of this policy: a the term `Affiliate` means any entity that directly controls, is controlled by or is under common control with Triumph Motorcycles Limited, and b the term `Control` means the beneficial ownership of of more than 50% of the issued share capital of a company or the legal power to direct or influence the direction of the management of the company, and the terms `Controls` and `Controlled` shall be interpreted accordingly.</p>
        <p className="text-lg md:text-xl">Triumph Motorcycles Limited is the controller responsible for our websites and applications and for processing your personal data for the purposes set out in this privacy policy.</p>
        <p className="text-lg md:text-xl">From time to time, the Triumph Group company in your area may also be a controller responsible for your personal data for the purposes set out in this privacy policy.</p>
        <p className="text-lg md:text-xl">In this privacy policy, all references to Triumph, Triumph Motorcycles, Triumph Motorcycles Limited, the terms `we`, `us`, `our` or verbs in the first plural and/or the company as appropriate will include Triumph Motorcycles Limited and Associated Companies as defined above, as applicable.</p>

        <h2 className="text-1xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-8">contact information</h2>
        <p className="text-lg md:text-xl">If you have any questions about this privacy policy or our privacy practices, you can contact our Legal and Compliance team in the following ways:-</p>
        
        <h2 className="text-1xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-8">Postal Address:</h2>
        <p className="text-lg md:text-xl">Legal and Compliance Team , Triumph Motorcycles Limited , Normandy Way , Hinckley , Leicestershire , LE 10 3 BZ , United Kingdom</p>
        <h2 className="text-1xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-8">Email address:</h2>
        <p className="text-lg md:text-xl"><a href="mailto:TriumphDataProtection @Triumph.co.uk" className="text-red-500 underline font-semibold">TriumphDataProtection @Triumph.co.uk</a></p>

        <h2 className="text-1xl md:text-3xl lg:text-4xl font-bold mb-4 md:mb-8">DATA WE COLLECT ABOUT YOU</h2>
        <p className="text-lg md:text-xl">`Personal Data`, or `personal information`, means any information about a person from which that person can be identified. Data from which identity details have been removed anonymized data is not included.</p>
        <p className="text-lg md:text-xl">We may collect, use, store and transfer different types of personal data about you, which we have grouped as follows:-</p>
        <ul className="marker:text-red-500 list-disc text-xl">
            <li><b>Identity data:</b><span> - First name, first name, last name, username or similar identifier, date of birth and leaf</span></li>
            <li><b>Contact details:</b> - Billing address, delivery address, email address and telephone numbers<span></span></li>
            <li><b>Financial data: </b><span> - Bank account and payment card details</span></li>
            <li><b>Transaction Data:</b><span></span> - Details of payments to and from you and other details about products and services you may have purchased from us</li>
            <li><b>Technical data: </b><span></span></li>
            <li><b>Profile Data: </b><span></span></li>
            <li><b>Usage Data:</b><span></span></li>
            <li><b>Marketing and Communications Data: </b><span></span></li>
            <li><b>Public Data Sources:</b><span></span></li>
            <li><b>Location data:</b><span></span></li>
        </ul>
      </section>
    </>
  );
};

export default PolicyPage;
