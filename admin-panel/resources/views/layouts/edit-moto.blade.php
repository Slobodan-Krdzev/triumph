<x-app-layout>
    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                 role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="font-bold text-4xl">You are editing model:<span
                class="uppercase text-red-500">{{ $moto->model }}</span></h1>
        <form action="{{ route('update-moto', $moto->id) }}" method="POST" class="flex flex-col"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title"
                               dataValue="{{ $moto->title ?? '' }}"/>

            <x-form.text-input forId="model" placeholder="Model" dataName="model" oldValue="model"
                               dataValue="{{ $moto->model ?? '' }}"/>

            <x-form.text-input forId="category" placeholder="Category" dataName="category" oldValue="category"
                               dataValue="{{ $moto->category ?? '' }}"/>

            <x-form.text-input forId="subFamilyCategory" placeholder="Sub Family Category" dataName="subFamilyCategory"
                               oldValue="subFamilyCategory" dataValue="{{ $moto->subFamilyCategory }}"/>

            <x-form.text-input forId="edition" placeholder="Edition" dataName="edition" oldValue="edition"
                               dataValue="{{ $moto->edition ?? '' }}"/>

            <x-form.text-input forId="price" placeholder="Price" dataName="price" oldValue="price"
                               dataValue="{{ $moto->price ?? '' }}"/>

            <div>
                <h1 class="font-bold text-3xl my-2">Gallery</h1>

                <x-form.input labelText="Gallery Model Image:" imageId="modelImageUrl" name="gallery[modelImage][src]">
                    <img id='modelImageUrl' src="{{ $moto->gallery['modelImage']['src'] ?? '' }}" width="200"
                         height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_modelImage_alt" placeholder="Gallery Model Image Alt Text"
                                   dataName="gallery[modelImage][alt]" oldValue="gallery.modelImage.alt"
                                   dataValue="{{ $moto->gallery['modelImage']['alt'] ?? '' }}"/>

                <x-form.input labelText="Promo Youtube Video URL:" imageId="promoYoutubeVideo"
                              name="gallery[promoYoutubeVideo][src]">
                    <video controls autoplay id='promoYoutubeVideo'
                           src="{{ $moto->gallery['promoYoutubeVideo']['src'] ?? '' }}" width="200" height="150"
                           class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.text-input forId="gallery_promoYoutubeVideo_alt"
                                   placeholder="Promo Youtube Video Alt Text"
                                   dataName="gallery[promoYoutubeVideo][alt]"
                                   oldValue="gallery.promoYoutubeVideo.alt"
                                   dataValue="{{ $moto->gallery['promoYoutubeVideo']['alt'] ?? '' }}"/>
            </div>

            <div>
                <h1 class="font-bold text-3xl my-2">Bike Color Palette Gallery</h1>

                <x-form.input labelText="Default Image:" imageId="defaultImage"
                              name="bikeCollorPalletteGallery[default]">
                    <img id='defaultImage' src="{{ $moto->bikeCollorPalletteGallery['default'] ?? '' }}" width="200"
                         height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <h1 class="font-bold text-xl my-2">Colors</h1>

                <div class="dynamic-section" id="bikeColorPaletteGalleryFields">
                    @if (isset($moto->bikeCollorPalletteGallery['colors']))
                        @for($i=0; $i<count($moto->bikeCollorPalletteGallery['colors']); $i++)
                            <div class="{{ $i > 0 ? 'dynamic-input-wrapper' : '' }}">
                                <x-form.text-input forId="color_{{ $i }}_name" placeholder="Color {{ $i + 1 }} Name"
                                                   dataName="bikeCollorPalletteGallery[colors][{{ $i }}][colorName]"
                                                   oldValue="bikeCollorPalletteGallery.colors.{{ $i }}.colorName"
                                                   dataValue="{{ $moto->bikeCollorPalletteGallery['colors'][$i]['colorName'] ?? '' }}"/>

                                <x-form.input labelText="Color {{ $i+1 }} Image:" imageId="color_{{ $i }}_base_image"
                                              name="bikeCollorPalletteGallery[colors][{{ $i }}][base]">
                                    <img id='color_{{ $i }}_base_image'
                                         src="{{ $moto->bikeCollorPalletteGallery['colors'][$i]['base'] ?? '' }}"
                                         width="200" height="150"
                                         class="object-cover border m-3 border-gray-200"/>
                                </x-form.input>

                                <x-form.input labelText="Color {{ $i+1 }} Reversed Image:"
                                              imageId="color_{{ $i }}_reversed_image"
                                              name="bikeCollorPalletteGallery[colors][{{ $i }}][reversed]">
                                    <img id='color_{{ $i }}_reversed_image'
                                         src="{{ $moto->bikeCollorPalletteGallery['colors'][$i]['reversed'] ?? '' }}"
                                         width="200" height="150"
                                         class="object-cover border m-3 border-gray-200"/>
                                </x-form.input>
                                @if($i > 0)
                                    <x-form.remove-field-button />
                                @endif
                            </div>
                        @endfor
                    @else
                        <div>
                            <x-form.text-input forId="color_0_name" placeholder="Color Name"
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
                    @endif
                </div>
                <button class="add-two-images my-8 bg-lime-200 shadow rounded p-4">Add New Color</button>
            </div>

            <div>
                <h1 class="font-bold text-3xl my-2">Customization Colors</h1>

                <div class="dynamic-section" id="customizationColorsFields">
                    @if(isset($moto->customizationColors))
                        @for($i=0; $i<count($moto->customizationColors); $i++)
                            <div class="{{ $i > 0 ? 'dynamic-input-wrapper' : '' }}">
                                <h1 class="font-bold text-xl my-2">Color {{ $i + 1 }}</h1>

                                <x-form.text-input forId="color_{{ $i }}_name" placeholder="Color Name"
                                                   dataName="customizationColors[{{ $i }}][colorName]"
                                                   oldValue="customizationColors.{{ $i }}.colorName"
                                                   dataValue="{{ $moto->customizationColors[$i]['colorName'] ?? '' }}"/>

                                <x-form.text-input forId="color_{{ $i }}_price" placeholder="Color Price"
                                                   dataName="customizationColors[{{ $i }}][price]"
                                                   oldValue="customizationColors.{{ $i }}.price"
                                                   dataValue="{{ $moto->customizationColors[$i]['price'] ?? '' }}"/>

                                <x-form.input labelText="Color Image:" imageId="color_{{ $i }}_image"
                                              name="customizationColors[{{ $i }}][image]">
                                    <img id='color_0_image' src="{{ $moto->customizationColors[$i]['image'] ?? '' }}"
                                         width="200" height="150"
                                         class="object-cover border m-3 border-gray-200"/>
                                </x-form.input>

                                <x-form.text-input forId="color_{{ $i }}_code" placeholder="Color Code"
                                                   dataName="customizationColors[{{ $i }}][code]"
                                                   oldValue="customizationColors.{{ $i }}.code"
                                                   dataValue="{{ $moto->customizationColors[$i]['code'] ?? '' }}"/>
                                @if($i > 0)
                                    <x-form.remove-field-button />
                                @endif
                            </div>
                        @endfor
                    @else
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
                    @endif
                </div>
                <button class="add-custom-color my-8 bg-lime-200 shadow rounded p-4">Add New Color</button>
            </div>

            <div>
                <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>

                <x-form.text-input forId="shortSpecInfo_info1" placeholder="Short Spec Info 1"
                                   dataName="shortSpecInfo[info1]" oldValue="shortSpecInfo.info1"
                                   dataValue="{{ $moto->shortSpecInfo['info1'] ?? '' }}"/>
                <x-form.text-input forId="shortSpecInfo_info2" placeholder="Short Spec Info 2"
                                   dataName="shortSpecInfo[info2]" oldValue="shortSpecInfo.info2"
                                   dataValue="{{ $moto->shortSpecInfo['info2'] ?? '' }}"/>
                <x-form.text-input forId="shortSpecInfo_info3" placeholder="Short Spec Info 3"
                                   dataName="shortSpecInfo[info3]" oldValue="shortSpecInfo.info3"
                                   dataValue="{{ $moto->shortSpecInfo['info3'] ?? '' }}"/>

            </div>

            <div>
                <h1 class="font-bold text-3xl my-2">Sub Family Promo</h1>

                <x-form.text-input forId="subFamilyPromo_title" placeholder="Sub Family Promo Title"
                                   dataName="subFamilyPromo[title]" oldValue="subFamilyPromo.title"
                                   dataValue="{{ $moto->subFamilyPromo['title'] ?? '' }}"/>

                <x-form.text-input forId="subFamilyPromo_desc" placeholder="Sub Family Promo Description"
                                   dataName="subFamilyPromo[desc]" oldValue="subFamilyPromo.desc"
                                   dataValue="{{ $moto->subFamilyPromo['desc'] ?? '' }}"/>
            </div>

            <x-form.dynamic-text-inputs header="Bike Page Info" divId="bikePageInfoFields"
                                        dataId1="info-desc" dataLabel1="description" dataName="bikePageInfo"
                                        :databaseData="$moto->bikePageInfo"
                                        fieldClass="add-field"/>


            <x-form.dynamic-text-inputs header="Features" divId="featuresFields"
                                        dataId1="features_title" dataLabel1="title"
                                        dataName="features"
                                        dataId2="features_desc" dataLabel2="desc"
                                        :databaseData="$moto->features"
                                        fieldClass="add-two-fields"/>


            <x-form.dynamic-text-inputs header="Bike Page Carousel" divId="bikePageCarousellFields"
                                        dataId1="bikePageCarousell_title" dataLabel1="title"
                                        dataName="bikePageCarousell"
                                        dataId2="bikePageCarousell_desc" dataLabel2="desc" imgLabel="Image"
                                        :databaseData="$moto->bikePageCarousell"
                                        fieldClass="add-two-fields-and-img"/>


            <x-form.dynamic-text-inputs header="Bike Page Promo" divId="bikePagePromoFields"
                                        dataId1="bikePagePromo_title" dataLabel1="title" dataName="bikePagePromo"
                                        dataId2="bikePagePromo_desc" dataLabel2="desc" imgLabel="Image"
                                        :databaseData="$moto->bikePagePromo"
                                        fieldClass="add-two-fields-and-img"/>


            <div>
                <h1 class="font-bold text-3xl my-2">Bike Page Image Gallery</h1>

                <div class="dynamic-section" id="bikePageImageGalleryFields">
                    @if(isset($moto->bikePageImageGallery))
                        @for($i=0; $i<count($moto->bikePageImageGallery); $i++)
                            <div class="{{ $i > 0 ? 'dynamic-input-wrapper' : '' }}">
                                <x-form.text-input forId="bikePageImageGallery_{{ $i }}_alt" placeholder="Image {{ $i + 1 }} Alt"
                                                   dataName="bikePageImageGallery[{{ $i }}][alt]"
                                                   oldValue="bikePageImageGallery.{{ $i }}.alt"
                                                   dataValue="{{ $moto->bikePageImageGallery[$i]['alt'] ?? '' }}"/>

                                <x-form.input labelText="Image {{ $i + 1 }} Src:" imageId="bikePageImageGallery_{{ $i }}_src"
                                              name="bikePageImageGallery[{{ $i }}][src]">
                                    <img id='bikePageImageGallery_{{ $i }}_src' src="{{ $moto->bikePageImageGallery[$i]['src'] ?? '' }}" width="200" height="150"
                                         class="object-cover border m-3 border-gray-200"/>
                                </x-form.input>
                                @if($i > 0)
                                    <x-form.remove-field-button />
                                @endif
                            </div>
                        @endfor
                    @else
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
                    @endif
                </div>
                <button class="add-field-and-image my-8 bg-lime-200 shadow rounded p-4">Add New Image</button>
            </div>

            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
