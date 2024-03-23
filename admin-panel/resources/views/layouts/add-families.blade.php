<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('store-families') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">

            @csrf
            <h1 class="font-bold text-3xl my-2">Base Info</h1>

            <label for="subFamilyName">Sub Family Name:</label>
            <input type="text" id="subFamilyName" name="subFamilyName" value="{{ old('subFamilyName') }}">



            <label for="familyType">Family Type:</label>
            <input type="text" id="familyType" name="familyType" value="{{ old('familyType') }}">


            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">


            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">


            <label for="url">URL:</label>
            <input type="text" id="url" name="url" value="{{ old('url') }}">



            <h1 class="font-bold text-3xl my-2">Specs</h1>

            <div id="dynamic-container">

                @for ($i = 0; $i < 1; $i++)
                    <div>
                        <label for="specs[{{ $i }}][desc]"
                            class="block text-sm font-medium text-gray-700">Description:</label>
                        <div class="">
                            <input type="text" id="specs[{{ $i }}][desc]"
                                name="specs[{{ $i }}][desc]"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                value="{{ old('specs.' . $i . '.desc') }}">
                        </div>
                        <label for="specs[{{ $i }}][data]"
                            class="block text-sm font-medium text-gray-700">Data:</label>
                        <div>
                            <input type="text"
                                class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                id="specs[{{ $i }}][data]" name="specs[{{ $i }}][data]"
                                value="{{ old('specs.' . $i . '.data') }}">
                        </div>
                    </div>
                @endfor
            </div>

            <button id="add-new-spec" class="my-5 bg-lime-200 shadow rounded p-4">Add New</button>


            <h1 class="font-bold text-3xl my-2">Service</h1>

            <label for="service_title">Service Title:</label>
            <input type="text" id="service_title" name="service[0][title]" placeholder="Enter Service Title"
                value="{{ old('service.0.title') }}">
            @error('service.0.title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <label for="service_desc">Description:</label>
            <input type="text" id="service_desc" name="service[0][desc]" placeholder="Enter Description"
                value="{{ old('service.0.desc') }}">
            @error('service.0.desc')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror


            <h1 class="font-bold text-3xl my-2">Hero Slogans</h1>
            @for ($i = 0; $i < 3; $i++)
                <label for="specs[{{ $i }}][data]">Input:</label>
                <input type="text" class="my-2" name="heroSlogans[]" value="{{ old('heroSlogans.' . $i) }}">
            @endfor


            {{-- YouTube Video --}}
            <label for="youtubeVideo">YouTube Video URL:</label>
            <input type="text" id="youtubeVideo" name="youtubeVideo" value="{{ old('youtubeVideo') }}">

            {{-- Short Description --}}
            <label for="shortDesc">Short Description:</label>
            <textarea id="shortDesc" name="shortDesc">{{ old('shortDesc') }}</textarea>

            {{-- Sub Family Page Info - Top Section --}}
            <h1 class="font-bold text-3xl my-2">Sub Family Page Info - Top Section</h1>
            <label for="topSection_title">Title:</label>
            <input type="text" id="topSection_title" name="subFamilyPageInfo[topSection][title]"
                value="{{ old('subFamilyPageInfo.topSection.title') }}">

            <label for="topSection_desc">Description:</label>
            <textarea id="topSection_desc" name="subFamilyPageInfo[topSection][desc]">{{ old('subFamilyPageInfo.topSection.desc') }}</textarea>

            <label for="topSection_subtitle">Subtitle:</label>
            <input type="text" id="topSection_subtitle" name="subFamilyPageInfo[topSection][subtitle]"
                value="{{ old('subFamilyPageInfo.topSection.subtitle') }}">

            {{-- Sub Family Page Info - Audio Section --}}
            <h1 class="font-bold text-3xl my-2">Sub Family Page Info - Audio Section</h1>
            <label for="audioSection_audio">Audio File URL:</label>
            <input type="text" id="audioSection_audio" name="subFamilyPageInfo[audioSection][audio]"
                value="{{ old('subFamilyPageInfo.audioSection.audio') }}">

            <label for="audioSection_title">Title:</label>
            <input type="text" id="audioSection_title" name="subFamilyPageInfo[audioSection][title]"
                value="{{ old('subFamilyPageInfo.audioSection.title') }}">

            <label for="audioSection_desc">Description:</label>
            <textarea id="audioSection_desc" name="subFamilyPageInfo[audioSection][desc]">{{ old('subFamilyPageInfo.audioSection.desc') }}</textarea>

            <x-form.input labelText="Logo URL:" imageId="imageLogo" name="subFamilyPageInfo[audioSection][logo]">
                <img id='imageLogo' width="200" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>



            <h1 class="font-bold text-3xl my-2">Engine & Transmission</h1>
            {{-- Engine & Transmission Fields --}}
            @for ($i = 0; $i < 12; $i++)
                <label for="engineTransmission_{{ $i }}_title">Title:</label>
                <input type="text" id="engineTransmission_{{ $i }}_title"
                    name="engineTransmission[{{ $i }}][title]" placeholder="Enter Title">

                <label for="engineTransmission_{{ $i }}_desc">Description:</label>
                <textarea id="engineTransmission_{{ $i }}_desc" name="engineTransmission[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>
            @endfor

            <h1 class="font-bold text-3xl my-2">Frame</h1>
            @for ($i = 0; $i < 12; $i++)
                <label for="frame_{{ $i }}_title">Title:</label>
                <input type="text" id="frame_{{ $i }}_title" name="frame[{{ $i }}][title]"
                    placeholder="Enter Title">

                <label for="frame_{{ $i }}_desc">Description:</label>
                <textarea id="frame_{{ $i }}_desc" name="frame[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>
            @endfor

            <h1 class="font-bold text-3xl my-2">Dimension</h1>
            {{-- Dimension Fields --}}
            @for ($i = 0; $i < 12; $i++)
                <label for="dimension_{{ $i }}_title">Title:</label>
                <input type="text" id="dimension_{{ $i }}_title"
                    name="dimension[{{ $i }}][title]" placeholder="Enter Title">

                <label for="dimension_{{ $i }}_desc">Description:</label>
                <textarea id="dimension_{{ $i }}_desc" name="dimension[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>
            @endfor

            <h1 class="font-bold text-3xl my-2">Fuel Consumption</h1>
            {{-- Fuel Consumption & Emissions Fields --}}
            @for ($i = 0; $i < 3; $i++)
                <label for="fuelConsumption_{{ $i }}_title">Title:</label>
                <input type="text" id="fuelConsumption_{{ $i }}_title"
                    name="fuelConsumption[{{ $i }}][title]" placeholder="Enter Title">

                <label for="fuelConsumption_{{ $i }}_desc">Description:</label>
                <textarea id="fuelConsumption_{{ $i }}_desc" name="fuelConsumption[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>
            @endfor

            <h1 class="font-bold text-3xl my-2">Gray Carousel</h1>
            @for ($i = 0; $i < 12; $i++)
                <label for="grayCarousell_{{ $i }}_title">Title:</label>
                <input type="text" id="grayCarousell_{{ $i }}_title"
                    name="grayCarousell[{{ $i }}][title]" placeholder="Enter Title">

                <label for="grayCarousell_{{ $i }}_desc">Description:</label>
                <textarea id="grayCarousell_{{ $i }}_desc" name="grayCarousell[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>



                <x-form.input labelText="Image URL:" imageId="imageId_{{ $i }}"
                    name="grayCarousell[{{ $i }}][image]">
                    <img id='imageId_{{ $i }}' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endfor

            <h1 class="font-bold text-3xl my-2">YouTube Videos Carousel</h1>
            @for ($i = 0; $i < 7; $i++)
                <label for="youtubeVideosCarousellItems_{{ $i }}_src">Video Source:</label>
                <input type="text" id="youtubeVideosCarousellItems_{{ $i }}_src"
                    name="youtubeVideosCarousellItems[{{ $i }}][src]" placeholder="Enter Video Source">

                <label for="youtubeVideosCarousellItems_{{ $i }}_title">Video Title:</label>
                <input type="text" id="youtubeVideosCarousellItems_{{ $i }}_title"
                    name="youtubeVideosCarousellItems[{{ $i }}][title]" placeholder="Enter Video Title">
            @endfor

            <h1 class="font-bold text-3xl my-2">Spec Numbers</h1>
            @for ($i = 0; $i < 4; $i++)
                <label for="specNumbers_{{ $i }}_data">Data:</label>
                <input type="text" id="specNumbers_{{ $i }}_data"
                    name="specNumbers[{{ $i }}][data]" placeholder="Enter Data">

                <label for="specNumbers_{{ $i }}_info">Info:</label>
                <input type="text" id="specNumbers_{{ $i }}_info"
                    name="specNumbers[{{ $i }}][info]" placeholder="Enter Info">
            @endfor


            <h1 class="font-bold text-3xl my-2">ReasonsReasons to Drive Banner</h1>
            <x-form.input labelText="Banner Image URL:" imageId="imageId_{{ $i }}"
                name="reasonsToDrive[banner][image]">
                <img id='imageId_{{ $i }}' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <h1 class="font-bold text-3xl my-2">Reasons to Drive Info Text</h1>
            <label for="reasonsToDrive_infoText_title">Info Text Title:</label>
            <input type="text" id="reasonsToDrive_infoText_title" name="reasonsToDrive[infoText][title]"
                placeholder="Enter Info Text Title">


            <h1 class="font-bold text-3xl my-2">Reasons</h1>
            @for ($i = 0; $i < 3; $i++)
                <label for="reasonsToDrive_reasons_{{ $i }}_title">Title:</label>
                <input type="text" id="reasonsToDrive_reasons_{{ $i }}_title"
                    name="reasonsToDrive[reasons][{{ $i }}][title]" placeholder="Enter Reason Title">

                <label for="reasonsToDrive_reasons_{{ $i }}_desc">Description:</label>
                <textarea id="reasonsToDrive_reasons_{{ $i }}_desc"
                    name="reasonsToDrive[reasons][{{ $i }}][desc]" placeholder="Enter Description"></textarea>

                <label for="reasonsToDrive_reasons_{{ $i }}_video">Video URL:</label>
                <input type="text" id="reasonsToDrive_reasons_{{ $i }}_video"
                    name="reasonsToDrive[reasons][{{ $i }}][video]" placeholder="Enter Video URL">
            @endfor

            <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>
            <label for="shortSpecInfo_info1">Info 1:</label>
            <input type="text" id="shortSpecInfo_info1" name="shortSpecInfo[info1]" placeholder="Info 1">

            <label for="shortSpecInfo_info2">Info 2:</label>
            <input type="text" id="shortSpecInfo_info2" name="shortSpecInfo[info2]" placeholder="Info 2">

            <label for="shortSpecInfo_info3">Info 3:</label>
            <input type="text" id="shortSpecInfo_info3" name="shortSpecInfo[info3]" placeholder="Info 3">

            <h1 class="font-bold text-3xl my-2">Gallery</h1>
            <x-form.input labelText="Model Image URL:" imageId="modelImageUrl" name="gallery[modelImage][src]">
                <img id='modelImageUrl' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="gallery_modelImage_alt">Model Image Alt Text:</label>
            <input type="text" id="gallery_modelImage_alt" name="gallery[modelImage][alt]"
                placeholder="Enter Model Image Alt Text">

            <label for="gallery_subFamilyHeroVideo_src">Sub Family Hero Video URL:</label>
            <input type="text" id="gallery_subFamilyHeroVideo_src" name="gallery[subFamilyHeroVideo][src]"
                placeholder="Enter Video URL">

            <x-form.input labelText="Sub Family Hero Video URL:" imageId="subFamVideo"
                name="gallery[subFamilyHeroVideo][src]">
                <video controls autoplay id='subFamVideo' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="gallery_subFamilyHeroVideo_alt">Sub Family Hero Video Alt Text:</label>
            <input type="text" class="my-3" id="gallery_subFamilyHeroVideo_alt"
                name="gallery[subFamilyHeroVideo][alt]" placeholder="Enter Video Alt Text">


            <x-form.input labelText="Sub Family Hero Image Mobile URL:" imageId="subFamHeroImage"
                name="gallery[subFamilyHeroImageMobile][src]">
                <img id='subFamHeroImage' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            <label for="gallery_subFamilyHeroImageMobile_alt">Sub Family Hero Image Mobile Alt Text:</label>
            <input type="text" id="gallery_subFamilyHeroImageMobile_alt"
                name="gallery[subFamilyHeroImageMobile][alt]" placeholder="Enter Mobile Image Alt Text">


            <x-form.input labelText="Sub Family Top Section Image URL:" imageId="subFamTopSectionImg"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='subFamTopSectionImg' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="gallery_subFamilyTopSectionImage_alt">Sub Family Top Section Image Alt Text:</label>
            <input type="text" id="gallery_subFamilyTopSectionImage_alt"
                name="gallery[subFamilyTopSectionImage][alt]" placeholder="Enter Top Section Image Alt Text">



            <x-form.input labelText="Sub Family Top Section BG Image URL:" imageId="subFamTopSectionImage"
                name="gallery[subFamilyTopSectionBGImage][src]">
                <img id='subFamTopSectionImage' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            <label for="gallery_subFamilyTopSectionBGImage_alt">Sub Family Top Section BG Image Alt Text:</label>
            <input type="text" id="gallery_subFamilyTopSectionBGImage_alt"
                name="gallery[subFamilyTopSectionBGImage][alt]" placeholder="Enter Top Section BG Image Alt Text">


            <h1 class="font-bold text-3xl my-2">Accessory Banner</h1>

            <x-form.input labelText="Banner Image URL:" imageId="bannerImageUrl" name="accessory[banner][image]">
                <img id='bannerImageUrl' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <h1 class="font-bold text-3xl my-2">Accessory Info Text</h1>
            <label for="accessory_infoText_title">Title:</label>
            <input type="text" id="accessory_infoText_title" name="accessory[infoText][title]"
                placeholder="Enter Title">

            <label for="accessory_infoText_desc">Description:</label>
            <textarea id="accessory_infoText_desc" name="accessory[infoText][desc]" placeholder="Enter Description"></textarea>

            <h1 class="font-bold text-3xl my-2">Accessory Types</h1>
            <!-- Repeat this section for each accessory type -->

            <label for="accessory_type_title">Title:</label>
            <input type="text" id="accessory_type_title" name="accessory[accessoryTypes][][title]"
                placeholder="Enter Accessory Type Title">

            <label for="accessory_type_desc">Description:</label>
            <textarea id="accessory_type_desc" name="accessory[accessoryTypes][][desc]" placeholder="Enter Description"></textarea>

            <h3>Items List</h3>
            <!-- Repeat for each item in the list -->
            <input type="text" name="accessory[accessoryTypes][][itemsList][]" placeholder="Enter Item">



            <x-form.input labelText="Image 1 URL:" imageId="imageOneUrl"
                name="accessory[accessoryTypes][][image1][src]">
                <img id='imageOneUrl' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="accessory_type_image1_alt">Image 1 Alt Text:</label>
            <input type="text" id="accessory_type_image1_alt" name="accessory[accessoryTypes][][image1][alt]"
                placeholder="Enter Image 1 Alt Text">


            <x-form.input labelText="Image 2 URL:" imageId="imageTwoUrl"
                name="accessory[accessoryTypes][][image2][src]">
                <img id='imageTwoUrl' width="200" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>




            <label for="accessory_type_image2_alt">Image 2 Alt Text:</label>
            <input type="text" id="accessory_type_image2_alt" name="accessory[accessoryTypes][][image2][alt]"
                placeholder="Optional Image 2 Alt Text">


            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Submit</button>








        </form>




    </div>
    <script>
        var loadFile = function(event, imageId) {

            var input = event.target;
            var file = input.files[0];
            var type = file.type;

            console.log(imageId);

            var output = document.getElementById(imageId);


            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script>
        $(document).ready(function() {
            var i = {{ $i }}; // Start index

            $('#add-new-spec').click(function(e) {
                e.preventDefault();

                var newInputGroup = `
                <div class="mt-4">
                    <label for="specs[${i}][desc]" class="block text-sm font-medium text-gray-700">Description:</label>
                    <div class="mt-1">
                        <input type="text" id="specs[${i}][desc]" name="specs[${i}][desc]" value="" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <label for="specs[${i}][data]" class="block text-sm font-medium text-gray-700">Data:</label>
                    <div class="mt-1">
                        <input type="text" id="specs[${i}][data]" name="specs[${i}][data]" value="" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                    </div>
                </div>`;

                $('#dynamic-container').append(newInputGroup);
                i++;
            });
        });
    </script>
</x-app-layout>
