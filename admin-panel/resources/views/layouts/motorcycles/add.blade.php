<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('store-motorcycle') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
            @csrf

            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                     role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                     role="alert">
                    {{ session('error') }}
                </div>
            @endif
            <h1 class="font-bold text-3xl my-2">Base Info</h1>

            <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title"/>

            <x-form.text-input forId="model" placeholder="Model" dataName="model" oldValue="model"/>

            <x-form.select-family forId="category" placeholder="Category" dataName="category" :families="$families" />

            <x-form.select-sub-family forId="subFamilyCategory" placeholder="Sub Family Category" dataName="subFamilyCategory"
                               :subFamilies="$subFamilies"/>

            <x-form.text-input forId="edition" placeholder="Edition" dataName="edition" oldValue="edition"/>

            <x-form.text-input forId="price" placeholder="Price" dataName="price" oldValue="price"/>

            <div>
                <h1 class="font-bold text-3xl my-2">Gallery</h1>

                <x-form.input labelText="Gallery Model Image:" imageId="modelImageUrl" name="gallery[modelImage][src]">
                    <img id='modelImageUrl' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_modelImage_alt" placeholder="Gallery Model Image Alt Text"
                                   dataName="gallery[modelImage][alt]" oldValue="gallery.modelImage.alt"/>

                <x-form.input labelText="Promo Youtube Video URL:" imageId="promoYoutubeVideo"
                              name="gallery[promoYoutubeVideo][src]">
                    <video controls autoplay id='promoYoutubeVideo' width="200" height="150"
                           class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_promoYoutubeVideo_alt"
                                   placeholder="Promo Youtube Video Alt Text"
                                   dataName="gallery[promoYoutubeVideo][alt]"
                                   oldValue="gallery.promoYoutubeVideo.alt"/>
            </div>

            <div>
                <h1 class="font-bold text-3xl my-2">Bike Color Palette Gallery</h1>

                <x-form.input labelText="Default Image:" imageId="defaultImage"
                              name="bikeCollorPalletteGallery[default]">
                    <img id='defaultImage' width="200" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <h1 class="font-bold text-xl my-2">Colors</h1>

                <div class="dynamic-section" id="bikeColorPaletteGalleryFields">
                    <div>
                        <x-form.text-input forId="color_0_name" placeholder="Color 1 Name"
                                           dataName="bikeCollorPalletteGallery[colors][0][colorName]"
                                           oldValue="bikeCollorPalletteGallery.colors.0.colorName"/>

                        <x-form.input labelText="Color 1 Image:" imageId="color_0_base_image"
                                      name="bikeCollorPalletteGallery[colors][0][base]">
                            <img id='color_0_base_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>


                        <x-form.input labelText="Color 1 Reversed Image:" imageId="color_0_reversed_image"
                                      name="bikeCollorPalletteGallery[colors][0][reversed]">
                            <img id='color_0_reversed_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>
                    </div>
                </div>
                <button class="add-two-images my-8 bg-lime-200 shadow rounded p-4">Add New Color</button>
            </div>

            <div>
                <h1 class="font-bold text-3xl my-2">Customization Colors</h1>

                <div class="dynamic-section" id="customizationColorsFields">
                    <div>
                        <h1 class="font-bold text-xl my-2">Color 1</h1>

                        <x-form.text-input forId="color_0_name" placeholder="Color Name"
                                           dataName="customizationColors[0][colorName]"
                                           oldValue="customizationColors.0.colorName"/>

                        <x-form.text-input forId="color_0_price" placeholder="Color Price"
                                           dataName="customizationColors[0][price]"
                                           oldValue="customizationColors.0.price"/>

                        <x-form.input labelText="Color Image:" imageId="color_0_image"
                                      name="customizationColors[0][image]">
                            <img id='color_0_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>

                        <x-form.text-input forId="color_0_code" placeholder="Color Code"
                                           dataName="customizationColors[0][code]"
                                           oldValue="customizationColors.0.code"/>
                    </div>
                </div>
                <button class="add-custom-color my-8 bg-lime-200 shadow rounded p-4">Add New Color</button>
            </div>

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
                <h1 class="font-bold text-3xl my-2">Sub Family Promo</h1>

                <x-form.text-input forId="subFamilyPromo_title" placeholder="Sub Family Promo Title"
                                   dataName="subFamilyPromo[title]" oldValue="subFamilyPromo.title"/>

                <x-form.text-input forId="subFamilyPromo_desc" placeholder="Sub Family Promo Description"
                                   dataName="subFamilyPromo[desc]" oldValue="subFamilyPromo.desc"/>
            </div>

            <x-form.dynamic-text-inputs header="Bike Page Info" divId="bikePageInfoFields"
                                        dataId1="info-desc" dataLabel1="description" dataName="bikePageInfo"
                                        fieldClass="add-field"/>


            <x-form.dynamic-text-inputs header="Features" divId="featuresFields"
                                        dataId1="features_title" dataLabel1="title"
                                        dataName="features"
                                        dataId2="features_desc" dataLabel2="desc"
                                        fieldClass="add-two-fields"/>

            <x-form.dynamic-text-inputs header="Bike Page Carousel" divId="bikePageCarousellFields"
                                        dataId1="bikePageCarousell_title" dataLabel1="title"
                                        dataName="bikePageCarousell"
                                        dataId2="bikePageCarousell_desc" dataLabel2="desc" imgLabel="Image"
                                        fieldClass="add-two-fields-and-img"/>

            <x-form.dynamic-text-inputs header="Bike Page Promo" divId="bikePagePromoFields"
                                        dataId1="bikePagePromo_title" dataLabel1="title" dataName="bikePagePromo"
                                        dataId2="bikePagePromo_desc" dataLabel2="desc" imgLabel="Image"
                                        fieldClass="add-two-fields-and-img"/>

            <div>
                <h1 class="font-bold text-3xl my-2">Bike Page Image Gallery</h1>

                <div class="dynamic-section" id="bikePageImageGalleryFields">
                    <div>
                        <x-form.text-input forId="bikePageImageGallery_0_alt" placeholder="Image 1 Alt"
                                           dataName="bikePageImageGallery[0][alt]"
                                           oldValue="bikePageImageGallery.0.alt"/>

                        <x-form.input labelText="Image 1 Src:" imageId="bikePageImageGallery_0_src"
                                      name="bikePageImageGallery[0][src]">
                            <img id='bikePageImageGallery_0_src' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>
                    </div>
                </div>
                <button class="add-field-and-image my-8 bg-lime-200 shadow rounded p-4">Add New Image</button>
            </div>


            <input type="submit" class="my-5 bg-lime-200 shadow rounded p-4" value="Submit">

        </form>

    </div>

</x-app-layout>
