<x-app-layout>

    <div class="px-8 mt-10 w-full">

        <form id="multiPartForm" action="{{ route('store-sub-family') }}" method="POST" class="flex flex-col"
            enctype="multipart/form-data">
            @csrf

            <div id="section1" class="bg-white p-6 rounded-lg shadow-md my-4">
                <h1 class="font-bold text-3xl my-2">Base Info</h1>


                <div class="flex flex-row">
                    <div class="w-full">
                        <x-form.text-input forId="subFamilyName" placeholder="Sub Family Name" dataName="subFamilyName"
                            oldValue="subFamilyName" />
                    </div>


                </div>

                <!-- Modal Structure -->
                <div id="myModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full">
                    <div class="relative top-5 mx-auto p-5 border w-8/12 shadow-lg rounded-md bg-white">
                        <div class="mt-3 text-center">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Input Details</h3>
                            <div class="mt-2 px-7">
                                <img src="{{ asset('images/SubFamilyName.png')}}" alt="Triumph Logo" class="mx-auto" >
                                <p class="text-sm text-gray-500 mt-4">
                                    This input changes the sub family name within the database. It is important to ensure the name is accurate
                                    as it affects how family data is categorized and displayed.
                                </p>
                            </div>
                            <div class="mt-4 flex justify-center">
                                <button onclick="toggleModal()" class="mx-auto px-4 py-2 bg-blue-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                    Close
                                </button>
                            </div>
                        </div>
                    </div>
                </div>





                <x-form.select-family forId="familyType" placeholder="Family Type" dataName="familyType"
                    :families="$families" />

                <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title" />

                <x-form.text-input forId="price" placeholder="Price" dataName="price" oldValue="price" />

                <x-form.text-input forId="url" placeholder="URL" dataName="url" oldValue="url" />

                <x-form.text-input forId="shortDesc" placeholder="Short Description" dataName="shortDesc"
                oldValue="shortDesc" />

                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(1, 2)">Next</button>
            </div>

            <div id="section2" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Specs" divId="specsFields" dataId1="specs_desc" dataLabel1="desc"
                dataName="specs" dataId2="specs_data" dataLabel2="data" fieldClass="add-two-fields" />

                <button type="button" onclick="previousSection(2, 1)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(2, 3)">Next</button>
            </div>

            <div id="section3" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Service" divId="serviceFields" dataId1="service_title"
                dataLabel1="title" dataName="service" dataId2="service_desc" dataLabel2="desc"
                fieldClass="add-two-fields" />

                <button type="button" onclick="previousSection(3, 2)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(3, 4)">Next</button>
            </div>

            <div id="section4" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Hero Slogans" divId="heroSlogansFields" dataId1="hero_slogan"
                dataLabel1="slogan" dataName="heroSlogans" fieldClass="add-field" />

            <x-form.text-input forId="youtubeVideo" placeholder="YouTube Video URL" dataName="youtubeVideo"
                oldValue="youtubeVideo" />

                <button type="button" onclick="previousSection(4, 3)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(4, 5)">Next</button>
            </div>

            <div id="section5" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <h1 class="font-bold text-3xl my-2">Top Section</h1>

                <x-form.text-input forId="topSection_title" placeholder="Top Section Title" dataName="topSection[title]"
                    oldValue="topSection.title" />

                <x-form.text-input forId="topSection_desc" placeholder="Top Section Description"
                    dataName="topSection[desc]" oldValue="topSection.desc" />

                <x-form.text-input forId="topSection_subtitle" placeholder="Top Section Subtitle"
                    dataName="topSection[subtitle]" oldValue="topSection.subtitle" />

                <button type="button" onclick="previousSection(5, 4)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(5, 6)">Next</button>
            </div>

            <div id="section6" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <h1 class="font-bold text-3xl my-2">Sub Family Page Info</h1>

                <section class="my-7 font-bold text-red-600">
                    <x-form.input labelText="Choose Audio" imageId="audioSection_audio"
                        name="subFamilyPageInfo[audioSection][audio]"
                        value="{{ old('subFamilyPageInfo.audioSection.audio') }}">
                        <audio id="audioSection_audio" src="" controls autoplay muted type="audio/ogg">
                        </audio>
                    </x-form.input>
                </section>

                <x-form.text-input forId="audioSection_title" placeholder="Audio Section Title"
                    dataName="subFamilyPageInfo[audioSection][title]" oldValue="subFamilyPageInfo.audioSection.title" />

                <x-form.text-input forId="audioSection_desc" placeholder="Audio Section Description"
                    dataName="subFamilyPageInfo[audioSection][desc]" oldValue="subFamilyPageInfo.audioSection.desc" />

                <x-form.input labelText="Logo URL:" imageId="imageLogo" name="subFamilyPageInfo[audioSection][logo]">
                    <img id='imageLogo' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <button type="button" onclick="previousSection(6, 5)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(6, 7)">Next</button>
            </div>


            <div id="section7" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Engine & Transmission" divId="engine&transmissionFields"
                dataId1="engineTransmission_title" dataLabel1="title" dataName="engineTransmission"
                dataId2="engineTransmission_desc" dataLabel2="desc" fieldClass="add-two-fields" />

                <button type="button" onclick="previousSection(7, 6)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(7, 8)">Next</button>
            </div>

            <div id="section8" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Frame" divId="frameFields" dataId1="frame_title" dataLabel1="title"
                dataName="frame" dataId2="frame_desc" dataLabel2="desc" fieldClass="add-two-fields" />

                <button type="button" onclick="previousSection(8, 7)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(8, 9)">Next</button>
            </div>

            <div id="section9" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Dimension" divId="dimensionFields" dataId1="dimension_title"
                dataLabel1="title" dataName="dimension" dataId2="dimension_desc" dataLabel2="desc"
                fieldClass="add-two-fields" />

                <button type="button" onclick="previousSection(9, 8)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(9, 10)">Next</button>
            </div>

            <div id="section10" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Fuel Consumption" divId="fuelConsumptionFields"
                dataId1="fuelConsumption_title" dataLabel1="title" dataName="fuelConsumption"
                dataId2="fuelConsumption_desc" dataLabel2="desc" fieldClass="add-two-fields" />

                <button type="button" onclick="previousSection(10, 9)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(10, 11)">Next</button>
            </div>

            <div id="section11" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Gray Carousel" divId="grayCarousellFields"
                dataId1="grayCarousell_title" dataLabel1="title" dataName="grayCarousell"
                dataId2="grayCarousell_desc" dataLabel2="desc" imgLabel="Image"
                fieldClass="add-two-fields-and-img" />

                <button type="button" onclick="previousSection(11, 10)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(11, 12)">Next</button>
            </div>

            <div id="section12" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="YouTube Videos Carousel" divId="youtubeVideosCarouselFields"
                dataId1="youtubeVideosCarouselItems_title" dataLabel1="src" dataName="youtubeVideosCarousellItems"
                dataId2="youtubeVideosCarouselItems_desc" dataLabel2="title" fieldClass="add-two-fields" />

                <button type="button" onclick="previousSection(12, 11)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(12, 13)">Next</button>
            </div>

            <div id="section13" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Spec Numbers" divId="specNumbersFields" dataId1="specNumbers_data"
                dataLabel1="data" dataName="specNumbers" dataId2="specNumbers_desc" dataLabel2="info"
                fieldClass="add-two-fields" />

                <button type="button" onclick="previousSection(13, 12)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(13, 14)">Next</button>
            </div>

            <div id="section14" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <h1 class="font-bold text-3xl my-2">ReasonsReasons to Drive Banner</h1>

                <x-form.input labelText="Banner Image URL:" imageId="reasonsBanner"
                    name="reasonsToDrive[banner][image]">
                    <img id='reasonsBanner' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <h1 class="font-bold text-3xl my-2">Reasons to Drive Info </h1>

                <x-form.text-input forId="reasonsToDrive_infoText_title" placeholder="Info Text Title"
                    dataName="reasonsToDrive[infoText][title]" oldValue="reasonsToDrive.infoText.title" />

                <x-form.text-input forId="reasonsToDrive_infoText_desc" placeholder="Info Text Description"
                    dataName="reasonsToDrive[infoText][desc]" oldValue="reasonsToDrive.infoText.desc" />

                <button type="button" onclick="previousSection(14, 13)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(14, 15)">Next</button>
            </div>

            <div id="section15" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <x-form.dynamic-text-inputs header="Reasons" divId="reasonsFields" dataId1="reasons_title"
                    dataLabel1="title" dataName="reasonsToDrive[reasons]" dataId2="reasons_desc" dataLabel2="desc"
                    imgLabel="Image" fieldClass="add-two-fields-and-img" />

                <button type="button" onclick="previousSection(15, 14)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(15, 16)">Next</button>
            </div>

            <div id="section16" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>

                <x-form.text-input forId="shortSpecInfo_info1" placeholder="Short Spec Info 1"
                    dataName="shortSpecInfo[info1]" oldValue="shortSpecInfo.info1" />
                <x-form.text-input forId="shortSpecInfo_info2" placeholder="Short Spec Info 2"
                    dataName="shortSpecInfo[info2]" oldValue="shortSpecInfo.info2" />
                <x-form.text-input forId="shortSpecInfo_info3" placeholder="Short Spec Info 3"
                    dataName="shortSpecInfo[info3]" oldValue="shortSpecInfo.info3" />

                <button type="button" onclick="previousSection(16, 15)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(16, 17)">Next</button>
            </div>


            <div id="section17" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <h1 class="font-bold text-3xl my-2">Gallery</h1>

                <x-form.input labelText="Gallery Model Image:" imageId="modelImageUrl"
                    name="gallery[modelImage][src]">
                    <img id='modelImageUrl' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <x-form.text-input forId="gallery_modelImage_alt" placeholder="Gallery Model Image Alt Text"
                    dataName="gallery[modelImage][alt]" oldValue="gallery.modelImage.alt" />

                <x-form.input labelText="Gallery SubFamily Hero Video URL:" imageId="subFamVideo"
                    name="gallery[subFamilyHeroVideo][src]">
                    <video controls autoplay id='subFamVideo' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyHeroVideo_alt"
                    placeholder="Gallery SubFamily Hero Video Alt Text" dataName="gallery[subFamilyHeroVideo][alt]"
                    oldValue="gallery.subFamilyHeroVideo.alt" />

                <x-form.input labelText="Gallery SubFamily Hero Image Mobile URL:" imageId="subFamHeroImage"
                    name="gallery[subFamilyHeroImageMobile][src]">
                    <img id='subFamHeroImage' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyHeroImageMobile_alt"
                    placeholder="Gallery SubFamily Hero Image Mobile Alt Text"
                    dataName="gallery[subFamilyHeroImageMobile][alt]"
                    oldValue="gallery.subFamilyHeroImageMobile.alt" />

                <x-form.input labelText="Gallery SubFamily Top Section Image URL:" imageId="subFamTopSectionImg"
                    name="gallery[subFamilyTopSectionImage][src]">
                    <img id='subFamTopSectionImg' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyTopSectionImage_alt"
                    placeholder="Gallery SubFamily Top Section Image Alt Text"
                    dataName="gallery[subFamilyTopSectionImage][alt]"
                    oldValue="gallery.subFamilyTopSectionImage.alt" />

                <x-form.input labelText="Gallery SubFamily Top Section BG Image URL:" imageId="subFamTopSectionImage"
                    name="gallery[subFamilyTopSectionBGImage][src]">
                    <img id='subFamTopSectionImage' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyTopSectionBGImage_alt"
                    placeholder="Gallery SubFamily Top Section BG Image Alt Text"
                    dataName="gallery[subFamilyTopSectionBGImage][alt]"
                    oldValue="gallery.subFamilyTopSectionBGImage.alt" />

                <button type="button" onclick="previousSection(17, 16)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(17, 18)">Next</button>
            </div>




            <div id="section18" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <h1 class="font-bold text-3xl my-2">Accessory</h1>

                <x-form.input labelText="Accessory Banner Image URL:" imageId="bannerImageUrl"
                    name="accessory[banner][image]">
                    <img id='bannerImageUrl' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <x-form.text-input forId="accessory_infoText_title" placeholder="Accessory InfoText Title"
                    dataName="accessory[infoText][title]" oldValue="accessory.infoText.title" />

                <x-form.text-input forId="accessory_infoText_desc" placeholder="Accessory InfoText Description"
                    dataName="accessory[infoText][desc]" oldValue="accessory.infoText.desc" />

                <button type="button" onclick="previousSection(18, 17)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                    Previous
                </button>
                <button class="mt-4 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow" type="button" onclick="nextSection(18, 19)">Next</button>
            </div>


            <div id="section19" class="form-section hidden bg-white p-6 rounded-lg shadow-md my-4">
                <h1 class="font-bold text-3xl my-2">Accessory Types</h1>
                    <div class="dynamic-section" id="accessoryTypesFields">
                        <div class="m-3 border-2 rounded border-black p-8">
                            <x-form.text-input forId="accessory_type_0_title" placeholder="Accessory Type Title"
                                dataName="accessory[accessoryTypes][0][title]"
                                oldValue="accessory.accessoryTypes.0.title" />

                            <x-form.textarea forId="accessory_type_0_desc" placeholder="Accessory Type Description"
                                dataName="accessory[accessoryTypes][0][desc]"
                                oldValue="accessory.accessoryTypes.0.desc" />

                            <x-form.dynamic-text-inputs header="Accesory Type Items List"
                                divId="accessoryType0ItemsList" dataId1="items0" dataLabel1="item Text"
                                dataName="accessory[accessoryTypes][0][itemsList]" fieldClass="add-field" />

                            <x-form.input labelText="Accesory Type Image 1 URL:" imageId="accessoryType0Image1Url"
                                name="accessory[accessoryTypes][0][image1][src]">
                                <img id='accessoryType0Image1Url' width="200" height="150"
                                    class="object-cover border m-3 border-gray-200" />
                            </x-form.input>

                            <x-form.text-input forId="accessory_type_0_image1_alt"
                                placeholder="Accessory Type Image 1 Alt Text"
                                dataName="accessory[accessoryTypes][0][image1][alt]"
                                oldValue="accessory.accessoryTypes.0.image1.alt" />

                            <x-form.input labelText="Accesory Type Image 2 URL:" imageId="accessoryType0Image2Url"
                                name="accessory[accessoryTypes][0][image2][src]">
                                <img id='accessoryType0Image2Url' width="200" height="150"
                                    class="object-cover border m-3 border-gray-200" />
                            </x-form.input>

                            <x-form.text-input forId="accessory_type_0_image2_alt"
                                placeholder="Accessory Type Image 2 Alt Text"
                                dataName="accessory[accessoryTypes][0][image2][alt]"
                                oldValue="accessory.accessoryTypes.0.image2.alt" />

                        </div>
                    </div>
                    <button class="add-accessory-type my-8 bg-lime-200 shadow rounded p-4">Add Accessory Type</button>
                    <div class="flex flex-col">

                        <div>
                            <button type="button" onclick="previousSection(19, 18)" class="mt-4 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow">
                                Previous
                            </button>
                        </div>
                    <button type="submit" class="w-full my-5 bg-cyan-500 shadow rounded p-4">Submit</button>
                    </div>
            </div>
        </form>
        <div id="sectionIndicator" class="text-right pr-10 pt-5 font-bold text-lg">
            Section <span id="currentSection">1</span> of 19
        </div>
    </div>
</x-app-layout>

<script>
    function toggleModal() {
    var modal = document.getElementById('myModal');
    modal.classList.toggle('hidden');
}
    function nextSection(currentSectionId, nextSectionId) {
    // Hide the current section
    document.getElementById(`section${currentSectionId}`).classList.add('hidden');

    // Show the next section
    document.getElementById(`section${nextSectionId}`).classList.remove('hidden');

    // Update the section number display
    document.getElementById('currentSection').textContent = nextSectionId;
}

function previousSection(currentSectionId, previousSectionId) {
    // Hide the current section
    document.getElementById(`section${currentSectionId}`).classList.add('hidden');

    // Show the previous section
    document.getElementById(`section${previousSectionId}`).classList.remove('hidden');

    // Update the section number display
    document.getElementById('currentSection').textContent = previousSectionId;
}
</script>
