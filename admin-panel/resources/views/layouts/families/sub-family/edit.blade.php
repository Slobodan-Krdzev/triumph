<x-app-layout>
    <x-header>
        Edit of <span class="text-red-500">{{ $subFamData->subFamilyName }}</span> Sub-Family
    </x-header>
    <div class="px-8 mt-10 w-full">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                 role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if ($errors->any())
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('update-sub-family', $subFamData->id) }}" method="POST" class="flex flex-col"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Section 1 -->
            <x-form.section-layout sectionId="1">
                <h2 class="font-bold text-3xl">Base Info</h2>

                <x-form.text-input forId="subFamilyName" placeholder="Sub Family Name" dataName="subFamilyName"
                                   oldValue="subFamilyName" dataValue="{{ $subFamData->subFamilyName ?? '' }}"
                                   imageDesc="images/sub-family/SubFamilyName.png"/>

                <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title"
                                   dataValue="{{ $subFamData->title ?? '' }}" imageDesc="images/sub-family/title.png"/>

                <x-form.select-family forId="familyType" placeholder="Family Type" dataName="familyType"
                                      oldValue="familyType"
                                      :families="$families"
                                      :type="$subFamData->familyType"/>

                <input name="price" type="hidden"/>

                <x-form.text-input forId="shortDesc" placeholder="Short Description" dataName="shortDesc"
                                   oldValue="shortDesc" dataValue="{{ $subFamData->shortDesc ?? '' }}"
                                   imageDesc="images/sub-family/shortDesc.png"/>
            </x-form.section-layout>

            <!-- Section 2 -->
            <x-form.section-layout sectionId="2">
                <x-form.dynamic-text-inputs header="Specs" divId="specsFields"
                                            dataId1="specs_desc" dataLabel1="desc" dataName="specs"
                                            dataId2="specs_data" dataLabel2="data"
                                            :databaseData="$subFamData->specs"
                                            fieldClass="add-two-fields" imageDesc1="images/sub-family/specs_desc.png"
                                            imageDesc2="images/sub-family/specs_data.png"/>
            </x-form.section-layout>

            <!-- Section 3 -->
            <x-form.section-layout sectionId="3">
                <x-form.dynamic-text-inputs header="Service" divId="serviceFields"
                                            dataId1="service_title" dataLabel1="title" dataName="service"
                                            dataId2="service_desc" dataLabel2="desc"
                                            :databaseData="$subFamData->service"
                                            fieldClass="add-two-fields"
                                            imageDesc1="images/sub-family/service_title.png"
                                            imageDesc2="images/sub-family/service_desc.png"/>
            </x-form.section-layout>

            <!-- Section 4 -->
            <x-form.section-layout sectionId="4">
                <x-form.dynamic-text-inputs header="Hero Slogans" divId="heroSlogansFields"
                                            dataId1="hero_slogan" dataLabel1="slogan" dataName="heroSlogans"
                                            :databaseData="$subFamData->heroSlogans"
                                            fieldClass="add-field"
                                            imageDesc1="images/sub-family/hero_slogan.png"/>


                <x-form.text-input forId="youtubeVideo" placeholder="YouTube Video URL" dataName="youtubeVideo"
                                   oldValue="youtubeVideo" dataValue="{{ $subFamData->youtubeVideo ?? '' }}"
                                   imageDesc="images/sub-family/youtube_videoURL.png"/>
            </x-form.section-layout>

            <!-- Section 5 -->
            <x-form.section-layout sectionId="5">
                <h1 class="font-bold text-3xl my-2">Top Section</h1>

                <x-form.text-input forId="topSection_title" placeholder="Top Section Title"
                                   dataName="topSection[title]"
                                   oldValue="topSection.title"
                                   dataValue="{{ $subFamData['topSection']['title'] ?? '' }}"
                                   imageDesc="images/sub-family/topSection_title.png"/>

                <x-form.text-input forId="topSection_desc" placeholder="Top Section Description"
                                   dataName="topSection[desc]"
                                   oldValue="topSection.desc"
                                   dataValue="{{ $subFamData['topSection']['desc'] ?? '' }}"
                                   imageDesc="images/sub-family/topSection_desc.png"/>

                <x-form.text-input forId="topSection_subtitle" placeholder="Top Section Subtitle"
                                   dataName="topSection[subtitle]"
                                   oldValue="topSection.subtitle"
                                   dataValue="{{ $subFamData['topSection']['subtitle'] ?? '' }}"
                                   imageDesc="images/sub-family/topSection_subTitle.png"/>
            </x-form.section-layout>

            <!-- Section 6 -->
            <x-form.section-layout sectionId="6">
                <h1 class="font-bold text-3xl my-2">Sub Family Page Info</h1>

                <section class="my-7 font-bold text-red-600">
                    <x-form.input labelText="Choose Audio" imageId="audioSection_audio"
                                  name="subFamilyPageInfo[audioSection][audio]"
                                  value="{{ old('subFamilyPageInfo.audioSection.audio') }}"
                                  imageDesc="images/sub-family/audioSection_audio.png">>
                        <audio id="audioSection_audio"
                               src="{{ $subFamData['subFamilyPageInfo']['audioSection']['audio'] ?? '' }}" controls
                               autoplay muted type="audio/ogg">
                        </audio>
                    </x-form.input>
                </section>

                <x-form.text-input forId="audioSection_title" placeholder="Audio Section Title"
                                   dataName="subFamilyPageInfo[audioSection][title]"
                                   oldValue="subFamilyPageInfo.audioSection.title"
                                   dataValue="{{ $subFamData['subFamilyPageInfo']['audioSection']['title'] ?? '' }}"
                                   imageDesc="images/sub-family/audioSection_title.png"/>

                <x-form.text-input forId="audioSection_desc" placeholder="Audio Section Description"
                                   dataName="subFamilyPageInfo[audioSection][desc]"
                                   oldValue="subFamilyPageInfo.audioSection.desc"
                                   dataValue="{{ $subFamData['subFamilyPageInfo']['audioSection']['desc'] ?? '' }}"
                                   imageDesc="images/sub-family/audioSection_desc.png"/>

                <x-form.input labelText="Logo URL:" imageId="imageLogo" name="subFamilyPageInfo[audioSection][logo]"
                              imageDesc="images/sub-family/audioSection_logo.png">
                    <img id='imageLogo' src="{{ $subFamData['subFamilyPageInfo']['audioSection']['logo'] ?? '' }}"
                         width="200" height="150" class="object-cover border m-3 border-gray-200"/>
                </x-form.input>
            </x-form.section-layout>

            <!-- Section 7 -->
            <x-form.section-layout sectionId="7">
                <x-form.dynamic-text-inputs header="Engine & Transmission" divId="engine&transmissionFields"
                                            dataId1="engineTransmission_title" dataLabel1="title"
                                            dataName="engineTransmission"
                                            dataId2="engineTransmission_desc" dataLabel2="desc"
                                            :databaseData="$subFamData->engineTransmission"
                                            fieldClass="add-two-fields"
                                            imageDesc1="images/sub-family/engineTransmissions_title.png"
                                            imageDesc2="images/sub-family/engineTransmissions_desc.png"/>
            </x-form.section-layout>

            <!-- Section 8 -->
            <x-form.section-layout sectionId="8">
                <x-form.dynamic-text-inputs header="Frame" divId="frameFields"
                                            dataId1="frame_title" dataLabel1="title" dataName="frame"
                                            dataId2="frame_desc" dataLabel2="desc"
                                            :databaseData="$subFamData->frame"
                                            fieldClass="add-two-fields"
                                            imageDesc1="images/sub-family/frame_title.png"
                                            imageDesc2="images/sub-family/frame_desc.png"/>
            </x-form.section-layout>

            <!-- Section 9 -->
            <x-form.section-layout sectionId="9">
                <x-form.dynamic-text-inputs header="Dimension" divId="dimensionFields"
                                            dataId1="dimension_title" dataLabel1="title" dataName="dimension"
                                            dataId2="dimension_desc" dataLabel2="desc"
                                            :databaseData="$subFamData->dimension"
                                            fieldClass="add-two-fields"
                                            imageDesc1="images/sub-family/dimension_title.png"
                                            imageDesc2="images/sub-family/dimension_desc.png"/>
            </x-form.section-layout>

            <!-- Section 10 -->
            <x-form.section-layout sectionId="10">
                <x-form.dynamic-text-inputs header="Fuel Consumption" divId="fuelConsumptionFields"
                                            dataId1="fuelConsumption_title" dataLabel1="title"
                                            dataName="fuelConsumption"
                                            dataId2="fuelConsumption_desc" dataLabel2="desc"
                                            :databaseData="$subFamData->fuelConsumption"
                                            fieldClass="add-two-fields"
                                            imageDesc1="images/sub-family/fuelConsumption_title.png"
                                            imageDesc2="images/sub-family/fuelConsumption_desc.png"/>
            </x-form.section-layout>

            <!-- Section 11 -->
            <x-form.section-layout sectionId="11">
                <x-form.dynamic-text-inputs header="Gray Carousel" divId="grayCarousellFields"
                                            dataId1="grayCarousell_title" dataLabel1="title" dataName="grayCarousell"
                                            dataId2="grayCarousell_desc" dataLabel2="desc" imgLabel="Image"
                                            :databaseData="$subFamData->grayCarousell"
                                            fieldClass="add-two-fields-and-img"
                                            imageDesc1="images/sub-family/grayCarousel_title.png"
                                            imageDesc2="images/sub-family/grayCarousel_desc.png"
                                            imageDesc3="images/sub-family/grayCarousel_image.png"/>
            </x-form.section-layout>

            <!-- Section 12 -->
            <x-form.section-layout sectionId="12">
                <x-form.dynamic-text-inputs header="YouTube Videos Carousel" divId="youtubeVideosCarouselFields"
                                            dataId1="youtubeVideosCarouselItems_title" dataLabel1="src"
                                            dataName="youtubeVideosCarousellItems"
                                            dataId2="youtubeVideosCarouselItems_desc" dataLabel2="title"
                                            :databaseData="$subFamData->youtubeVideosCarousellItems"
                                            fieldClass="add-two-fields"
                                            imageDesc1="images/sub-family/youtubeVideos_src.png"
                                            imageDesc2="images/sub-family/youtubeVideos_title.png"/>
            </x-form.section-layout>

            <!-- Section 13 -->
            <x-form.section-layout sectionId="13">
                <x-form.dynamic-text-inputs header="Spec Numbers" divId="specNumbersFields"
                                            dataId1="specNumbers_data" dataLabel1="data" dataName="specNumbers"
                                            dataId2="specNumbers_desc" dataLabel2="info"
                                            :databaseData="$subFamData->specNumbers"
                                            fieldClass="add-two-fields"
                                            imageDesc1="images/sub-family/specs_data.png"
                                            imageDesc2="images/sub-family/specs_desc.png"/>
            </x-form.section-layout>

            <!-- Section 14 -->
            <x-form.section-layout sectionId="14">
                <h1 class="font-bold text-3xl my-2">ReasonsReasons to Drive Banner</h1>

                <x-form.input labelText="Banner Image URL:" imageId="reasonsBanner"
                              name="reasonsToDrive[banner][image]"
                              imageDesc="images/sub-family/reasonsToDrive_bannerImage.png">
                    <img id='reasonsBanner' src="{{ $subFamData['reasonsToDrive']['banner']['image'] ?? '' }}"
                         width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <h1 class="font-bold text-3xl my-2">Reasons to Drive Info </h1>

                <x-form.text-input forId="reasonsToDrive_infoText_title" placeholder="Info Text Title"
                                   dataName="reasonsToDrive[infoText][title]"
                                   oldValue="reasonsToDrive.infoText.title"
                                   dataValue="{{ $subFamData['reasonsToDrive']['infoText']['title'] ?? '' }}"
                                   imageDesc="images/sub-family/reasonsToDrive_infoText.png"/>

                <x-form.text-input forId="reasonsToDrive_infoText_desc" placeholder="Info Text Description"
                                   dataName="reasonsToDrive[infoText][desc]"
                                   oldValue="reasonsToDrive.infoText.desc"
                                   dataValue="{{ $subFamData['reasonsToDrive']['infoText']['desc'] ?? '' }}"
                                   imageDesc="images/sub-family/reasonsToDrive_infoDesc.png"/>
            </x-form.section-layout>

            <!-- Section 15 -->
            <x-form.section-layout sectionId="15">
                <x-form.dynamic-text-inputs header="Reasons" divId="reasonsFields"
                                            dataId1="reasons_title" dataLabel1="title"
                                            dataName="reasonsToDrive[reasons]"
                                            dataId2="reasons_desc" dataLabel2="desc" imgLabel="Image"
                                            :databaseData="$subFamData['reasonsToDrive']['reasons'] ?? null"
                                            fieldClass="add-two-fields-and-img"
                                            imageDesc1="images/sub-family/reasonsToDrive_reasons_title.png"
                                            imageDesc2="images/sub-family/reasonsToDrive_reasons_desc.png"
                                            imageDesc3="images/sub-family/reasonsToDrive_reasons_image.png"/>
            </x-form.section-layout>

            <!-- Section 16 -->
            <x-form.section-layout sectionId="16">
                <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>

                <x-form.text-input forId="shortSpecInfo_info1" placeholder="Short Spec Info 1"
                                   dataName="shortSpecInfo[info1]" oldValue="shortSpecInfo.info1"
                                   dataValue="{{ $subFamData['shortSpecInfo']['info1'] ?? '' }}"
                                   imageDesc="images/sub-family/shortSpecInfos.png"/>
                <x-form.text-input forId="shortSpecInfo_info2" placeholder="Short Spec Info 2"
                                   dataName="shortSpecInfo[info2]" oldValue="shortSpecInfo.info2"
                                   dataValue="{{ $subFamData['shortSpecInfo']['info2'] ?? '' }}"
                                   imageDesc="images/sub-family/shortSpecInfos.png"/>
                <x-form.text-input forId="shortSpecInfo_info3" placeholder="Short Spec Info 3"
                                   dataName="shortSpecInfo[info3]" oldValue="shortSpecInfo.info3"
                                   dataValue="{{ $subFamData['shortSpecInfo']['info3'] ?? '' }}"
                                   imageDesc="images/sub-family/shortSpecInfos.png"/>
            </x-form.section-layout>

            <!-- Section 17 -->
            <x-form.section-layout sectionId="17">
                <h1 class="font-bold text-3xl my-2">Gallery</h1>

                <x-form.input labelText="Gallery Model Image:" imageId="modelImageUrl" name="gallery[modelImage][src]"
                              imageDesc="images/sub-family/galleryModelImage.png">
                    <img id='modelImageUrl' src="{{ $subFamData['gallery']['modelImage']['src'] ?? '' }}" width="200"
                         height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_modelImage_alt" placeholder="Gallery Model Image Alt Text"
                                   dataName="gallery[modelImage][alt]" oldValue="gallery.modelImage.alt"
                                   dataValue="{{ $subFamData['gallery']['modelImage']['alt'] ?? '' }}"
                                   imageDesc="images/sub-family/galleryModelImage.png"
                                   imageDesc="images/sub-family/galleryModelImage.png"/>

                <x-form.input labelText="Gallery SubFamily Hero Video URL:" imageId="subFamVideo"
                              name="gallery[subFamilyHeroVideo][src]"
                              imageDesc="images/sub-family/gallerySubFamilyHeroVideo.png">
                    <video controls autoplay id='subFamVideo'
                           src="{{ $subFamData['gallery']['subFamilyHeroVideo']['src'] ?? '' }}" width="200"
                           height="150"
                           class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyHeroVideo_alt"
                                   placeholder="Gallery SubFamily Hero Video Alt Text"
                                   dataName="gallery[subFamilyHeroVideo][alt]"
                                   oldValue="gallery.subFamilyHeroVideo.alt"
                                   dataValue="{{ $subFamData['gallery']['subFamilyHeroVideo']['alt'] ?? '' }}"
                                   imageDesc="images/sub-family/gallerySubFamilyHeroVideo.png"/>

                <x-form.input labelText="Gallery SubFamily Hero Image Mobile URL:" imageId="subFamHeroImage"
                              name="gallery[subFamilyHeroImageMobile][src]"
                              imageDesc="images/sub-family/gallerySubFamilyHeroMobileImage.png">
                    <img id='subFamHeroImage'
                         src="{{ $subFamData['gallery']['subFamilyHeroImageMobile']['src'] ?? '' }}" width="200"
                         height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyHeroImageMobile_alt"
                                   placeholder="Gallery SubFamily Hero Image Mobile Alt Text"
                                   dataName="gallery[subFamilyHeroImageMobile][alt]"
                                   oldValue="gallery.subFamilyHeroImageMobile.alt"
                                   dataValue="{{ $subFamData['subFamilyHeroImageMobile']['alt'] ?? '' }}"
                                   imageDesc="images/sub-family/gallerySubFamilyHeroMobileImage.png"/>

                <x-form.input labelText="Gallery SubFamily Top Section Image URL:" imageId="subFamTopSectionImg"
                              name="gallery[subFamilyTopSectionImage][src]"
                              imageDesc="images/sub-family/gallerySubFamilyTopSectionImage.png">
                    <img id='subFamTopSectionImg'
                         src="{{ $subFamData['gallery']['subFamilyTopSectionImage']['src'] ?? '' }}" width="200"
                         height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyTopSectionImage_alt"
                                   placeholder="Gallery SubFamily Top Section Image Alt Text"
                                   dataName="gallery[subFamilyTopSectionImage][alt]"
                                   oldValue="gallery.subFamilyTopSectionImage.alt"
                                   dataValue="{{ $subFamData['subFamilyTopSectionImage']['alt'] ?? '' }}"
                                   imageDesc="images/sub-family/gallerySubFamilyTopSectionImage.png"/>

                <x-form.input labelText="Gallery SubFamily Top Section BG Image URL:" imageId="subFamTopSectionImage"
                              name="gallery[subFamilyTopSectionBGImage][src]"
                              imageDesc="images/sub-family/gallerySubFamilyTopSectionBGImage.png">
                    <img id='subFamTopSectionImage'
                         src="{{ $subFamData['gallery']['subFamilyTopSectionBGImage']['src'] ?? '' }}" width="200"
                         height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_subFamilyTopSectionBGImage_alt"
                                   placeholder="Gallery SubFamily Top Section BG Image Alt Text"
                                   dataName="gallery[subFamilyTopSectionBGImage][alt]"
                                   oldValue="gallery.subFamilyTopSectionBGImage.alt"
                                   dataValue="{{ $subFamData['subFamilyTopSectionBGImage']['alt'] ?? '' }}"
                                   imageDesc="images/sub-family/gallerySubFamilyTopSectionBGImage.png"/>
            </x-form.section-layout>

            <!-- Section 18 -->
            <x-form.section-layout sectionId="18">
                <h1 class="font-bold text-3xl my-2">Accessory</h1>

                <x-form.input labelText="Accessory Banner Image URL:" imageId="bannerImageUrl"
                              name="accessory[banner][image]" imageDesc="images/sub-family/accessory_banner_image.png">
                    <img id='bannerImageUrl' src="{{ $subFamData['accessory']['banner']['image'] ?? '' }}" width="200"
                         height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="accessory_infoText_title" placeholder="Accessory InfoText Title"
                                   dataName="accessory[infoText][title]" oldValue="accessory.infoText.title"
                                   dataValue="{{ $subFamData['accessory']['infoText']['title'] ?? '' }}"
                                   imageDesc="images/sub-family/accessory_infoText_title.png"/>

                <x-form.text-input forId="accessory_infoText_desc" placeholder="Accessory InfoText Description"
                                   dataName="accessory[infoText][desc]" oldValue="accessory.infoText.desc"
                                   dataValue="{{ $subFamData['accessory']['infoText']['desc'] ?? '' }}"
                                   imageDesc="images/sub-family/accessory_infoText_desc.png"/>
            </x-form.section-layout>

            <!-- Section 19 -->
            <x-form.section-layout sectionId="19">
                <h1 class="font-bold text-3xl my-2">Accessory Types</h1>
                <div class="dynamic-section" id="accessoryTypesFields">
                    <x-form.accessory_types :databaseData="$subFamData['accessory']['accessoryTypes'] ?? null"/>
                </div>
                <button class="add-accessory-type my-8 bg-lime-200 shadow rounded p-4">Add Accessory Type</button>
            </x-form.section-layout>

            <button type="submit" class="w-full my-5 bg-yellow-300 hover:bg-yellow-200 shadow rounded p-4">Update
            </button>
        </form>
    </div>
</x-app-layout>
