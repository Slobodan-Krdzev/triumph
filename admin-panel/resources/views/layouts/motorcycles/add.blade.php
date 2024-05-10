<x-app-layout>
    <x-header>
        Add Motorcycle
    </x-header>

    <div class="px-8 mt-10 w-full">

        <form action="{{ route('store-motorcycle') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
            @csrf

            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Section 1 -->
            <x-form.section sectionId="1" prevSectionId="1" nextSectionId="2" :totalSections="10">
                <h1 class="font-bold text-3xl my-2">Base Info</h1>

                <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title" imageDesc="images/motorcycle/title.png"/>

                <input name="model" type="hidden"/>

                <x-form.select-family forId="category" placeholder="Category" dataName="category" :families="$families" />

                <x-form.select-sub-family forId="subFamilyCategory" placeholder="Sub Family Category" dataName="subFamilyCategory"
                                          :subFamilies="$subFamilies"/>

                <x-form.text-input forId="edition" placeholder="Edition" dataName="edition" oldValue="edition" imageDesc="images/motorcycle/edition.png"/>
                <p class="text-md text-gray-500">(Ако е од фамилија Classics се става од опциите(400cc, 900cc, 1200cc) ако не се става името на фамилијата)</p>

                <x-form.text-input forId="price" placeholder="Price" dataName="price" oldValue="price" imageDesc="images/motorcycle/price.png"/>
            </x-form.section>

            <!-- Section 2 -->
            <x-form.section sectionId="2" prevSectionId="1" nextSectionId="3" :totalSections="10">
                <h1 class="font-bold text-3xl my-2">Gallery</h1>

                <x-form.input labelText="Gallery Model Image:" imageId="modelImageUrl" name="gallery[modelImage][src]" imageDesc="images/motorcycle/galleryModelImage.png">
                    <img id='modelImageUrl' width="200" height="150"
                         class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <x-form.text-input forId="gallery_modelImage_alt" placeholder="Gallery Model Image Alt Text"
                                   dataName="gallery[modelImage][alt]" oldValue="gallery.modelImage.alt" imageDesc="images/motorcycle/galleryModelImage.png"/>

                <x-form.text-input forId="gallery_promoYoutubeVideo_src" placeholder="Promo Youtube Video URL"
                                   dataName="gallery[promoYoutubeVideo][src]" oldValue="gallery.promoYoutubeVideo.src" imageDesc="images/motorcycle/youtubeVideoPromo.png"/>

                <x-form.text-input forId="gallery_promoYoutubeVideo_alt" placeholder="Promo Youtube Video Alt Text"
                                   dataName="gallery[promoYoutubeVideo][alt]" oldValue="gallery.promoYoutubeVideo.alt" imageDesc="images/motorcycle/youtubeVideoPromo.png"/>
            </x-form.section>

            <!-- Section 3 -->
            <x-form.section sectionId="3" prevSectionId="2" nextSectionId="4" :totalSections="10">
                <h1 class="font-bold text-3xl my-2">Customization Colors</h1>

                <div class="dynamic-section" id="customizationColorsFields">
                    <div>
                        <h1 class="font-bold text-xl my-2">Color 1</h1>

                        <x-form.text-input forId="color_0_name" placeholder="Color 1 Name"
                                           dataName="customizationColors[0][colorName]" oldValue="customizationColors.0.colorName" imageDesc="images/motorcycle/customizationColorName.png"/>

                        <x-form.text-input forId="color_0_price" placeholder="Color 1 Price"
                                           dataName="customizationColors[0][price]" oldValue="customizationColors.0.price" imageDesc="images/motorcycle/customizationColorPrice.png"/>

                        <x-form.input labelText="Color 1 Image:" imageId="color_0_image"
                                      name="customizationColors[0][image]" imageDesc="images/motorcycle/customizationColorImage.png">
                            <img id='color_0_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200" />
                        </x-form.input>

                        <x-form.input labelText="Color 1 Base Motorcycle Image:" imageId="color_0_base_image"
                                      name="customizationColors[0][base]" imageDesc="images/motorcycle/customizationBaseMotorcycleColor.png">
                            <img id='color_0_base_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200" />
                        </x-form.input>


                        <x-form.input labelText="Color 1 Reversed Motorcycle Image:" imageId="color_0_reversed_image"
                                      name="customizationColors[0][reversed]" imageDesc="images/motorcycle/customizationReversedMotorcyclesColor.png">
                            <img id='color_0_reversed_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200" />
                        </x-form.input>
                    </div>
                </div>
                <button class="add-custom-color my-8 bg-lime-200 shadow rounded p-4">Add New Color</button>
            </x-form.section>

            <!-- Section 4 -->
            <x-form.section sectionId="4" prevSectionId="3" nextSectionId="5" :totalSections="10">
                    <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>

                    <x-form.text-input forId="shortSpecInfo_info1" placeholder="Short Spec Info 1"
                                       dataName="shortSpecInfo[info1]" oldValue="shortSpecInfo.info1" imageDesc="images/motorcycle/shortSpecInfo.png"/>
                    <x-form.text-input forId="shortSpecInfo_info2" placeholder="Short Spec Info 2"
                                       dataName="shortSpecInfo[info2]" oldValue="shortSpecInfo.info2" imageDesc="images/motorcycle/shortSpecInfo.png"/>
                    <x-form.text-input forId="shortSpecInfo_info3" placeholder="Short Spec Info 3"
                                       dataName="shortSpecInfo[info3]" oldValue="shortSpecInfo.info3" imageDesc="images/motorcycle/shortSpecInfo.png"/>
            </x-form.section>

            <!-- Section 5 -->
            <x-form.section sectionId="5" prevSectionId="4" nextSectionId="6" :totalSections="10">
                <h1 class="font-bold text-3xl my-2">Sub Family Promo</h1>

                <x-form.text-input forId="subFamilyPromo_title" placeholder="Sub Family Promo Title"
                                   dataName="subFamilyPromo[title]" oldValue="subFamilyPromo.title" imageDesc="images/motorcycle/subFamilyPromoTitle.png"/>

                <x-form.text-input forId="subFamilyPromo_desc" placeholder="Sub Family Promo Description"
                                   dataName="subFamilyPromo[desc]" oldValue="subFamilyPromo.desc" imageDesc="images/motorcycle/subFamilyPromoDescription.png"/>
            </x-form.section>

            <!-- Section 6 -->
            <x-form.section sectionId="6" prevSectionId="5" nextSectionId="7" :totalSections="10">
                <x-form.dynamic-text-inputs header="Bike Page Info" divId="bikePageInfoFields" dataId1="info-desc"
                                            dataLabel1="description" dataName="bikePageInfo" fieldClass="add-field" imageDesc1="images/motorcycle/bikePageInfo.png"/>
            </x-form.section>

            <!-- Section 7 -->
            <x-form.section sectionId="7" prevSectionId="6" nextSectionId="8" :totalSections="10">
                <x-form.dynamic-text-inputs header="Features" divId="featuresFields" dataId1="features_title"
                                            dataLabel1="title" dataName="features" dataId2="features_desc" dataLabel2="desc"
                                            fieldClass="add-two-fields" imageDesc1="images/motorcycle/featuresTitle.png" imageDesc2="images/motorcycle/featuresDescription.png"/>
            </x-form.section>

            <!-- Section 8 -->
            <x-form.section sectionId="8" prevSectionId="7" nextSectionId="9" :totalSections="10">
                <x-form.dynamic-text-inputs header="Bike Page Carousel" divId="bikePageCarousellFields"
                                            dataId1="bikePageCarousell_title" dataLabel1="title" dataName="bikePageCarousell"
                                            dataId2="bikePageCarousell_desc" dataLabel2="desc" imgLabel="Image"
                                            fieldClass="add-two-fields-and-img" imageDesc1="images/motorcycle/bikePageCaroTitle.png" imageDesc2="images/motorcycle/bikePageCaroDescription.png" imageDesc3="images/motorcycle/bikePageCaroImage.png"/>
            </x-form.section>

            <!-- Section 9 -->
            <x-form.section sectionId="9" prevSectionId="8" nextSectionId="10" :totalSections="10">
                <x-form.dynamic-text-inputs header="Bike Page Promo" divId="bikePagePromoFields"
                                            dataId1="bikePagePromo_title" dataLabel1="title" dataName="bikePagePromo"
                                            dataId2="bikePagePromo_desc" dataLabel2="desc" imgLabel="Image"
                                            fieldClass="add-two-fields-and-img"
                                            imageDesc1="images/motorcycle/bikePagePromoTitle.png" imageDesc2="images/motorcycle/bikePagePromoDescription.png" imageDesc3="images/motorcycle/bikePagePromoImage.png"/>
            </x-form.section>

            <!-- Section 10 -->
            <x-form.section sectionId="10" prevSectionId="9" nextSectionId="11" :totalSections="10">
                <h1 class="font-bold text-3xl my-2">Bike Page Image Gallery</h1>

                <div class="dynamic-section" id="bikePageImageGalleryFields">
                    <div>
                        <x-form.text-input forId="bikePageImageGallery_0_alt" placeholder="Image 1 Alt"
                                           dataName="bikePageImageGallery[0][alt]" oldValue="bikePageImageGallery.0.alt" imageDesc="images/motorcycle/bikePageImageGallery.png"/>

                        <x-form.input labelText="Image 1 Src:" imageId="bikePageImageGallery_0_src"
                                      name="bikePageImageGallery[0][src]" imageDesc="images/motorcycle/bikePageImageGallery.png">
                            <img id='bikePageImageGallery_0_src' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200" />
                        </x-form.input>
                    </div>
                </div>
                <button class="add-field-and-image my-8 bg-lime-200 shadow rounded p-4">Add New Image</button>
            </x-form.section>
        </form>
        <div id="sectionIndicator" class="text-right pr-10 pt-5 font-bold text-lg mb-5">
            Section <span id="currentSection">1</span> of 10
        </div>
    </div>
</x-app-layout>
