<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('store-families') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">

            @csrf
            <h1 class="font-bold text-3xl my-2">Base Info</h1>

            <x-form.text-input forId="subFamilyName" placeholder="Sub Family Name" dataName="subFamilyName"
                               oldValue="subFamilyName"/>

            <x-form.text-input forId="familyType" placeholder="Family Type" dataName="familyType"
                               oldValue="familyType"/>

            <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title"/>

            <x-form.text-input forId="price" placeholder="Price" dataName="price" oldValue="price"/>

            <x-form.text-input forId="url" placeholder="URL" dataName="url" oldValue="url"/>

            <x-form.dynamic-text-inputs header="Specs" divId="specsFields"
                                        dataId1="specs_desc" dataLabel1="desc" dataName="specs"
                                        dataId2="specs_data" dataLabel2="data" fieldClass="add-two-fields"/>

            <x-form.dynamic-text-inputs header="Service" divId="serviceFields"
                                        dataId1="service_title" dataLabel1="title" dataName="service"
                                        dataId2="service_desc" dataLabel2="desc" fieldClass="add-two-fields"/>

            <x-form.dynamic-text-inputs header="Hero Slogans" divId="heroSlogansFields"
                                        dataId1="hero_slogan" dataLabel1="slogan" dataName="heroSlogans"
                                        fieldClass="add-field"/>

            <x-form.text-input forId="youtubeVideo" placeholder="YouTube Video URL" dataName="youtubeVideo"
                               oldValue="youtubeVideo"/>

            <x-form.text-input forId="shortDesc" placeholder="Short Description" dataName="shortDesc"
                               oldValue="shortDesc"/>


            <div>
                <h1 class="font-bold text-3xl my-2">Sub Family Page Info - Top Section</h1>

                <x-form.text-input forId="topSection_title" placeholder="Top Section Title"
                                   dataName="subFamilyPageInfo[topSection][title]"
                                   oldValue="subFamilyPageInfo.topSection.title"/>

                <x-form.text-input forId="topSection_desc" placeholder="Top Section Description"
                                   dataName="subFamilyPageInfo[topSection][desc]"
                                   oldValue="subFamilyPageInfo.topSection.desc"/>

                <x-form.text-input forId="topSection_subtitle" placeholder="Top Section Subtitle"
                                   dataName="subFamilyPageInfo[topSection][subtitle]"
                                   oldValue="subFamilyPageInfo.topSection.subtitle"/>

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

                <x-form.text-input forId="audioSection_desc" placeholder="Audio Section Description"
                                   dataName="subFamilyPageInfo[audioSection][desc]"
                                   oldValue="subFamilyPageInfo.audioSection.desc"/>

                <x-form.input labelText="Logo URL:" imageId="imageLogo" name="subFamilyPageInfo[audioSection][logo]">
                    <img id='imageLogo' width="200" height="150" class="object-cover border m-3 border-gray-200"/>
                </x-form.input>
            </div>

            <x-form.dynamic-text-inputs header="Engine & Transmission" divId="engine&transmissionFields"
                                        dataId1="engineTransmission_title" dataLabel1="title"
                                        dataName="engineTransmission"
                                        dataId2="engineTransmission_desc" dataLabel2="desc"
                                        fieldClass="add-two-fields"/>

            <x-form.dynamic-text-inputs header="Frame" divId="frameFields"
                                        dataId1="frame_title" dataLabel1="title" dataName="frame"
                                        dataId2="frame_desc" dataLabel2="desc" fieldClass="add-two-fields"/>

            <x-form.dynamic-text-inputs header="Dimension" divId="dimensionFields"
                                        dataId1="dimension_title" dataLabel1="title" dataName="dimension"
                                        dataId2="dimension_desc" dataLabel2="desc" fieldClass="add-two-fields"/>

            <x-form.dynamic-text-inputs header="Fuel Consumption" divId="fuelConsumptionFields"
                                        dataId1="fuelConsumption_title" dataLabel1="title" dataName="fuelConsumption"
                                        dataId2="fuelConsumption_desc" dataLabel2="desc" fieldClass="add-two-fields"/>

            <x-form.dynamic-text-inputs header="Gray Carousel" divId="grayCarousellFields"
                                        dataId1="grayCarousell_title" dataLabel1="title" dataName="grayCarousell"
                                        dataId2="grayCarousell_desc" dataLabel2="desc" imgLabel="Image"
                                        fieldClass="add-two-fields-and-img"/>

            <x-form.dynamic-text-inputs header="YouTube Videos Carousel" divId="youtubeVideosCarouselFields"
                                        dataId1="youtubeVideosCarouselItems_title" dataLabel1="src"
                                        dataName="youtubeVideosCarouselItems"
                                        dataId2="youtubeVideosCarouselItems_desc" dataLabel2="title"
                                        fieldClass="add-two-fields"/>

            <x-form.dynamic-text-inputs header="Spec Numbers" divId="specNumbersFields"
                                        dataId1="specNumbers_data" dataLabel1="data" dataName="specNumbers"
                                        dataId2="specNumbers_desc" dataLabel2="info" fieldClass="add-two-fields"/>

            <div>
                <h1 class="font-bold text-3xl my-2">ReasonsReasons to Drive Banner</h1>

                <x-form.input labelText="Banner Image URL:" imageId="reasonsBanner"
                              name="reasonsToDrive[banner][image]">
                    <img id='reasonsBanner' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <h1 class="font-bold text-3xl my-2">Reasons to Drive Info </h1>

                <x-form.text-input forId="reasonsToDrive_infoText_title" placeholder="Info Text Title"
                                   dataName="reasonsToDrive[infoText][title]"
                                   oldValue="reasonsToDrive.infoText.title"/>

                <x-form.text-input forId="reasonsToDrive_infoText_desc" placeholder="Info Text Description"
                                   dataName="reasonsToDrive[infoText][desc]" oldValue="reasonsToDrive.infoText.desc"/>
            </div>

            <x-form.dynamic-text-inputs header="Reasons" divId="reasonsFields"
                                        dataId1="reasons_title" dataLabel1="title" dataName="reasons"
                                        dataId2="reasons_desc" dataLabel2="desc" fieldClass="add-two-fields"/>

            <div>
                <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>

                <x-form.text-input forId="shortSpecInfo_info1" placeholder="Short Spec Info 1"
                                   dataName="shortSpecInfo[info1]" oldValue="shortSpecInfo.info1"/>
                <x-form.text-input forId="shortSpecInfo_info2" placeholder="Short Spec Info 2"
                                   dataName="shortSpecInfo[info2]" oldValue="shortSpecInfo.info2"/>
                <x-form.text-input forId="shortSpecInfo_info3" placeholder="Short Spec Info 3"
                                   dataName="shortSpecInfo[info3]" oldValue="shortSpecInfo.info3"/>

            </div>

            <div>
                <h1 class="font-bold text-3xl my-2">Gallery</h1>

                <x-form.input labelText="Gallery Model Image:" imageId="modelImageUrl" name="gallery[modelImage][src]">
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
            </div>

            <div>
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

                <div>
                    <h1 class="font-bold text-3xl my-2">Accessory Types</h1>
                    <div class="dynamic-section" id="accessoryTypesFields">
                        <div class="m-3 border-2 rounded border-black p-8">
                            <x-form.text-input forId="accessory_type_0_title" placeholder="Accessory Type Title"
                                               dataName="accessory[accessoryTypes][0][title]"
                                               oldValue="accessory.accessoryTypes.0.title"/>

                            <x-form.text-input forId="accessory_type_0_desc" placeholder="Accessory Type Description"
                                               dataName="accessory[accessoryTypes][0][desc]"
                                               oldValue="accessory.accessoryTypes.0.desc"/>

                            <x-form.dynamic-text-inputs header="Accesory Type Items List"
                                                        divId="accessoryType0ItemsList"
                                                        dataId1="items0" dataLabel1="item Text"
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
                </div>

            </div>

            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Submit</button>
        </form>
    </div>
</x-app-layout>
