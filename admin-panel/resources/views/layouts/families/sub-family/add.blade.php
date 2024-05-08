<x-app-layout>
    <x-header>
        Add Sub-Family
    </x-header>
    <div class="px-8 mt-10 w-full">

        <form id="multiPartForm" action="{{ route('store-sub-family') }}" method="POST" class="flex flex-col"
              enctype="multipart/form-data">
            @csrf

            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                     role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Section 1 -->
            <x-form.section sectionId="1" prevSectionId="1" nextSectionId="2" :totalSections="19">
                <h1 class="font-bold text-3xl my-2">Base Info</h1>

                <x-form.text-input forId="subFamilyName" placeholder="Sub Family Name" dataName="subFamilyName"
                                   oldValue="subFamilyName" imageDesc="images/SubFamilyName.png"/>

                <x-form.select-family forId="familyType" placeholder="Family Type" dataName="familyType"
                                      :families="$families"/>

                <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title"/>

                <x-form.text-input forId="price" placeholder="Price" dataName="price" oldValue="price"/>

                <x-form.text-input forId="url" placeholder="URL" dataName="url" oldValue="url"/>

                <x-form.text-input forId="shortDesc" placeholder="Short Description" dataName="shortDesc"
                                   oldValue="shortDesc"/>
            </x-form.section>

            <!-- Section 2 -->
            <x-form.section sectionId="2" prevSectionId="1" nextSectionId="3" :totalSections="19">
                <x-form.dynamic-text-inputs header="Specs" divId="specsFields" dataId1="specs_desc" dataLabel1="desc"
                                            dataName="specs" dataId2="specs_data" dataLabel2="data"
                                            fieldClass="add-two-fields"/>
            </x-form.section>

            <!-- Section 3 -->
            <x-form.section sectionId="3" prevSectionId="2" nextSectionId="4" :totalSections="19">
                <x-form.dynamic-text-inputs header="Service" divId="serviceFields" dataId1="service_title"
                                            dataLabel1="title" dataName="service" dataId2="service_desc"
                                            dataLabel2="desc"
                                            fieldClass="add-two-fields"/>
            </x-form.section>

            <!-- Section 4 -->
            <x-form.section sectionId="4" prevSectionId="3" nextSectionId="5" :totalSections="19">
                <x-form.dynamic-text-inputs header="Hero Slogans" divId="heroSlogansFields" dataId1="hero_slogan"
                                            dataLabel1="slogan" dataName="heroSlogans" fieldClass="add-field"/>

                <x-form.text-input forId="youtubeVideo" placeholder="YouTube Video URL" dataName="youtubeVideo"
                                   oldValue="youtubeVideo"/>
            </x-form.section>

            <!-- Section 5 -->
            <x-form.section sectionId="5" prevSectionId="4" nextSectionId="6" :totalSections="19">
                <h1 class="font-bold text-3xl my-2">Top Section</h1>

                <x-form.text-input forId="topSection_title" placeholder="Top Section Title" dataName="topSection[title]"
                                   oldValue="topSection.title"/>

                <x-form.text-input forId="topSection_desc" placeholder="Top Section Description"
                                   dataName="topSection[desc]" oldValue="topSection.desc"/>

                <x-form.text-input forId="topSection_subtitle" placeholder="Top Section Subtitle"
                                   dataName="topSection[subtitle]" oldValue="topSection.subtitle"/>
            </x-form.section>

            <!-- Section 6 -->
            <x-form.section sectionId="6" prevSectionId="5" nextSectionId="7" :totalSections="19">
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
                                   dataName="subFamilyPageInfo[audioSection][title]"
                                   oldValue="subFamilyPageInfo.audioSection.title"/>

                <x-form.textarea forId="audioSection_desc" placeholder="Audio Section Description"
                                 dataName="subFamilyPageInfo[audioSection][desc]"
                                 oldValue="subFamilyPageInfo.audioSection.desc"/>

                <x-form.input labelText="Logo URL:" imageId="imageLogo" name="subFamilyPageInfo[audioSection][logo]">
                    <img id='imageLogo' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>
            </x-form.section>

            <!-- Section 7 -->
            <x-form.section sectionId="7" prevSectionId="6" nextSectionId="8" :totalSections="19">
                <x-form.dynamic-text-inputs header="Engine & Transmission" divId="engine&transmissionFields"
                                            dataId1="engineTransmission_title" dataLabel1="title"
                                            dataName="engineTransmission"
                                            dataId2="engineTransmission_desc" dataLabel2="desc"
                                            fieldClass="add-two-fields"/>
            </x-form.section>

            <!-- Section 8 -->
            <x-form.section sectionId="8" prevSectionId="7" nextSectionId="9" :totalSections="19">
                <x-form.dynamic-text-inputs header="Frame" divId="frameFields" dataId1="frame_title" dataLabel1="title"
                                            dataName="frame" dataId2="frame_desc" dataLabel2="desc"
                                            fieldClass="add-two-fields"/>
            </x-form.section>

            <!-- Section 9 -->
            <x-form.section sectionId="9" prevSectionId="8" nextSectionId="10" :totalSections="19">
                <x-form.dynamic-text-inputs header="Dimension" divId="dimensionFields" dataId1="dimension_title"
                                            dataLabel1="title" dataName="dimension" dataId2="dimension_desc"
                                            dataLabel2="desc"
                                            fieldClass="add-two-fields"/>
            </x-form.section>

            <!-- Section 10 -->
            <x-form.section sectionId="10" prevSectionId="9" nextSectionId="11" :totalSections="19">
                <x-form.dynamic-text-inputs header="Fuel Consumption" divId="fuelConsumptionFields"
                                            dataId1="fuelConsumption_title" dataLabel1="title"
                                            dataName="fuelConsumption"
                                            dataId2="fuelConsumption_desc" dataLabel2="desc"
                                            fieldClass="add-two-fields"/>
            </x-form.section>

            <!-- Section 11 -->
            <x-form.section sectionId="11" prevSectionId="10" nextSectionId="12" :totalSections="19">
                <x-form.dynamic-text-inputs header="Gray Carousel" divId="grayCarousellFields"
                                            dataId1="grayCarousell_title" dataLabel1="title" dataName="grayCarousell"
                                            dataId2="grayCarousell_desc" dataLabel2="desc" imgLabel="Image"
                                            fieldClass="add-two-fields-and-img"/>
            </x-form.section>

            <!-- Section 12 -->
            <x-form.section sectionId="12" prevSectionId="11" nextSectionId="13" :totalSections="19">
                <x-form.dynamic-text-inputs header="YouTube Videos Carousel" divId="youtubeVideosCarouselFields"
                                            dataId1="youtubeVideosCarouselItems_title" dataLabel1="src"
                                            dataName="youtubeVideosCarousellItems"
                                            dataId2="youtubeVideosCarouselItems_desc" dataLabel2="title"
                                            fieldClass="add-two-fields"/>
            </x-form.section>

            <!-- Section 13 -->
            <x-form.section sectionId="13" prevSectionId="12" nextSectionId="14" :totalSections="19">
                <x-form.dynamic-text-inputs header="Spec Numbers" divId="specNumbersFields" dataId1="specNumbers_data"
                                            dataLabel1="data" dataName="specNumbers" dataId2="specNumbers_desc"
                                            dataLabel2="info"
                                            fieldClass="add-two-fields"/>
            </x-form.section>

            <!-- Section 14 -->
            <x-form.section sectionId="14" prevSectionId="13" nextSectionId="15" :totalSections="19">
                <h1 class="font-bold text-3xl my-2">ReasonsReasons to Drive Banner</h1>

                <x-form.input labelText="Banner Image URL:" imageId="reasonsBanner"
                              name="reasonsToDrive[banner][image]">
                    <img id='reasonsBanner' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <h1 class="font-bold text-3xl my-2">Reasons to Drive Info </h1>

                <x-form.text-input forId="reasonsToDrive_infoText_title" placeholder="Info Text Title"
                                   dataName="reasonsToDrive[infoText][title]" oldValue="reasonsToDrive.infoText.title"/>

                <x-form.text-input forId="reasonsToDrive_infoText_desc" placeholder="Info Text Description"
                                   dataName="reasonsToDrive[infoText][desc]" oldValue="reasonsToDrive.infoText.desc"/>
            </x-form.section>

            <!-- Section 15 -->
            <x-form.section sectionId="15" prevSectionId="14" nextSectionId="16" :totalSections="19">
                <x-form.dynamic-text-inputs header="Reasons" divId="reasonsFields" dataId1="reasons_title"
                                            dataLabel1="title" dataName="reasonsToDrive[reasons]" dataId2="reasons_desc"
                                            dataLabel2="desc"
                                            imgLabel="Image" fieldClass="add-two-fields-and-img"/>
            </x-form.section>

            <!-- Section 16 -->
            <x-form.section sectionId="16" prevSectionId="15" nextSectionId="17" :totalSections="19">
                <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>

                <x-form.text-input forId="shortSpecInfo_info1" placeholder="Short Spec Info 1"
                                   dataName="shortSpecInfo[info1]" oldValue="shortSpecInfo.info1"/>
                <x-form.text-input forId="shortSpecInfo_info2" placeholder="Short Spec Info 2"
                                   dataName="shortSpecInfo[info2]" oldValue="shortSpecInfo.info2"/>
                <x-form.text-input forId="shortSpecInfo_info3" placeholder="Short Spec Info 3"
                                   dataName="shortSpecInfo[info3]" oldValue="shortSpecInfo.info3"/>
            </x-form.section>

            <!-- Section 17 -->
            <x-form.section sectionId="17" prevSectionId="16" nextSectionId="18" :totalSections="19">
                <h1 class="font-bold text-3xl my-2">Gallery</h1>

                <x-form.input labelText="Gallery Model Image:" imageId="modelImageUrl"
                              name="gallery[modelImage][src]">
                    <img id='modelImageUrl' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_modelImage_alt" placeholder="Gallery Model Image Alt Text"
                                   dataName="gallery[modelImage][alt]" oldValue="gallery.modelImage.alt"/>

                <x-form.input labelText="Gallery SubFamily Hero Video URL:" imageId="subFamVideo"
                              name="gallery[subFamilyHeroVideo][src]">
                    <video controls autoplay id='subFamVideo' width="200" height="150"
                           class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyHeroVideo_alt"
                                   placeholder="Gallery SubFamily Hero Video Alt Text"
                                   dataName="gallery[subFamilyHeroVideo][alt]"
                                   oldValue="gallery.subFamilyHeroVideo.alt"/>

                <x-form.input labelText="Gallery SubFamily Hero Image Mobile URL:" imageId="subFamHeroImage"
                              name="gallery[subFamilyHeroImageMobile][src]">
                    <img id='subFamHeroImage' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyHeroImageMobile_alt"
                                   placeholder="Gallery SubFamily Hero Image Mobile Alt Text"
                                   dataName="gallery[subFamilyHeroImageMobile][alt]"
                                   oldValue="gallery.subFamilyHeroImageMobile.alt"/>

                <x-form.input labelText="Gallery SubFamily Top Section Image URL:" imageId="subFamTopSectionImg"
                              name="gallery[subFamilyTopSectionImage][src]">
                    <img id='subFamTopSectionImg' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyTopSectionImage_alt"
                                   placeholder="Gallery SubFamily Top Section Image Alt Text"
                                   dataName="gallery[subFamilyTopSectionImage][alt]"
                                   oldValue="gallery.subFamilyTopSectionImage.alt"/>

                <x-form.input labelText="Gallery SubFamily Top Section BG Image URL:" imageId="subFamTopSectionImage"
                              name="gallery[subFamilyTopSectionBGImage][src]">
                    <img id='subFamTopSectionImage' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyTopSectionBGImage_alt"
                                   placeholder="Gallery SubFamily Top Section BG Image Alt Text"
                                   dataName="gallery[subFamilyTopSectionBGImage][alt]"
                                   oldValue="gallery.subFamilyTopSectionBGImage.alt"/>
            </x-form.section>

            <!-- Section 18 -->
            <x-form.section sectionId="18" prevSectionId="17" nextSectionId="19" :totalSections="19">
                <h1 class="font-bold text-3xl my-2">Accessory</h1>

                <x-form.input labelText="Accessory Banner Image URL:" imageId="bannerImageUrl"
                              name="accessory[banner][image]">
                    <img id='bannerImageUrl' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="accessory_infoText_title" placeholder="Accessory InfoText Title"
                                   dataName="accessory[infoText][title]" oldValue="accessory.infoText.title"/>

                <x-form.text-input forId="accessory_infoText_desc" placeholder="Accessory InfoText Description"
                                   dataName="accessory[infoText][desc]" oldValue="accessory.infoText.desc"/>
            </x-form.section>

            <!-- Section 19 -->
            <x-form.section sectionId="19" prevSectionId="18" nextSectionId="19" :totalSections="19">
                <h1 class="font-bold text-3xl my-2">Accessory Types</h1>
                <div class="dynamic-section" id="accessoryTypesFields">
                    <div class="m-3 border-2 rounded border-black p-8">
                        <x-form.text-input forId="accessory_type_0_title" placeholder="Accessory Type Title"
                                           dataName="accessory[accessoryTypes][0][title]"
                                           oldValue="accessory.accessoryTypes.0.title"/>

                        <x-form.textarea forId="accessory_type_0_desc" placeholder="Accessory Type Description"
                                         dataName="accessory[accessoryTypes][0][desc]"
                                         oldValue="accessory.accessoryTypes.0.desc"/>

                        <x-form.dynamic-text-inputs header="Accesory Type Items List"
                                                    divId="accessoryType0ItemsList" dataId1="items0"
                                                    dataLabel1="item Text"
                                                    dataName="accessory[accessoryTypes][0][itemsList]"
                                                    fieldClass="add-field"/>

                        <x-form.input labelText="Accesory Type Image 1 URL:" imageId="accessoryType0Image1Url"
                                      name="accessory[accessoryTypes][0][image1][src]">
                            <img id='accessoryType0Image1Url' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>

                        <x-form.text-input forId="accessory_type_0_image1_alt"
                                           placeholder="Accessory Type Image 1 Alt Text"
                                           dataName="accessory[accessoryTypes][0][image1][alt]"
                                           oldValue="accessory.accessoryTypes.0.image1.alt"/>

                        <x-form.input labelText="Accesory Type Image 2 URL:" imageId="accessoryType0Image2Url"
                                      name="accessory[accessoryTypes][0][image2][src]">
                            <img id='accessoryType0Image2Url' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>

                        <x-form.text-input forId="accessory_type_0_image2_alt"
                                           placeholder="Accessory Type Image 2 Alt Text"
                                           dataName="accessory[accessoryTypes][0][image2][alt]"
                                           oldValue="accessory.accessoryTypes.0.image2.alt"/>

                    </div>
                </div>
                <button class="add-accessory-type my-8 bg-lime-200 shadow rounded p-4">Add Accessory Type</button>
            </x-form.section>
        </form>
        <div id="sectionIndicator" class="text-right pr-10 pt-5 font-bold text-lg mb-5">
            Section <span id="currentSection">1</span> of 19
        </div>
    </div>
</x-app-layout>
