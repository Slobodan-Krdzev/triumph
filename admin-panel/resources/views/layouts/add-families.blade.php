<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('store-families') }}" method="POST" class="flex flex-col ">
            @csrf
            <h1 class="font-bold text-3xl my-2">Base Info</h1>
            {{-- Sub Family Name --}}
            <label for="subFamilyName">Sub Family Name:</label>
            <input type="text" id="subFamilyName" name="subFamilyName" value="{{ old('subFamilyName') }}">


            {{-- Family Type --}}
            <label for="familyType">Family Type:</label>
            <input type="text" id="familyType" name="familyType" value="{{ old('familyType') }}">

            {{-- Title --}}
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" value="{{ old('title') }}">

            {{-- Price --}}
            <label for="price">Price:</label>
            <input type="text" id="price" name="price" value="{{ old('price') }}">

            {{-- URL --}}
            <label for="url">URL:</label>
            <input type="text" id="url" name="url" value="{{ old('url') }}">

            {{-- Specs --}}

            <h1 class="font-bold text-3xl my-2">Specs</h1>

            @for ($i = 0; $i < 4; $i++)
                <label for="specs[{{ $i }}][desc]">Description:</label>
                <input type="text" id="specs[{{ $i }}][desc]" name="specs[{{ $i }}][desc]"
                    value="{{ old('specs.' . $i . '.desc') }}">

                <label for="specs[{{ $i }}][data]">Data:</label>
                <input type="text" id="specs[{{ $i }}][data]" name="specs[{{ $i }}][data]"
                    value="{{ old('specs.' . $i . '.data') }}">
            @endfor

            <h1 class="font-bold text-3xl my-2">Service</h1>

                <label for="service_title">Service Title:</label>
                <input type="text" id="service_title" name="service[0][title]" placeholder="Enter Service Title" value="{{ old('service.0.title') }}">
                @error('service.0.title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <label for="service_desc">Description:</label>
                <input type="text" id="service_desc" name="service[0][desc]" placeholder="Enter Description" value="{{ old('service.0.desc') }}">
                @error('service.0.desc')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

            {{-- Hero Slogans --}}

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

            {{-- Logo (optional, assuming it's an upload) --}}
            <label for="audioSection_logo">Logo:</label>
            <input type="file" id="audioSection_logo" name="subFamilyPageInfo[audioSection][logo]">



            <h1 class="font-bold text-3xl my-2">Engine & Transmission</h1 class="font-bold text-3xl my-2">
            {{-- Engine & Transmission Fields --}}
            @for ($i = 0; $i < 12; $i++)
                <label for="engineTransmission_{{ $i }}_title">Title:</label>
                <input type="text" id="engineTransmission_{{ $i }}_title"
                    name="engineTransmission[{{ $i }}][title]" placeholder="Enter Title">

                <label for="engineTransmission_{{ $i }}_desc">Description:</label>
                <textarea id="engineTransmission_{{ $i }}_desc" name="engineTransmission[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>
            @endfor

            <h1 class="font-bold text-3xl my-2">Frame</h1 class="font-bold text-3xl my-2">
            {{-- Frame Fields --}}
            @for ($i = 0; $i < 11; $i++)
                <label for="frame_{{ $i }}_title">Title:</label>
                <input type="text" id="frame_{{ $i }}_title" name="frame[{{ $i }}][title]"
                    placeholder="Enter Title">

                <label for="frame_{{ $i }}_desc">Description:</label>
                <textarea id="frame_{{ $i }}_desc" name="frame[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>
            @endfor

            <h1 class="font-bold text-3xl my-2">Dimension</h1 class="font-bold text-3xl my-2">
            {{-- Dimension Fields --}}
            @for ($i = 0; $i < 9; $i++)
                <label for="dimension_{{ $i }}_title">Title:</label>
                <input type="text" id="dimension_{{ $i }}_title"
                    name="dimension[{{ $i }}][title]" placeholder="Enter Title">

                <label for="dimension_{{ $i }}_desc">Description:</label>
                <textarea id="dimension_{{ $i }}_desc" name="dimension[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>
            @endfor

            <h1 class="font-bold text-3xl my-2">Fuel Consumption</h1 class="font-bold text-3xl my-2">
            {{-- Fuel Consumption & Emissions Fields --}}
            @for ($i = 0; $i < 3; $i++)
                <label for="fuelConsumption_{{ $i }}_title">Title:</label>
                <input type="text" id="fuelConsumption_{{ $i }}_title"
                    name="fuelConsumption[{{ $i }}][title]" placeholder="Enter Title">

                <label for="fuelConsumption_{{ $i }}_desc">Description:</label>
                <textarea id="fuelConsumption_{{ $i }}_desc" name="fuelConsumption[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>
            @endfor

            <h1 class="font-bold text-3xl my-2">Gray Carousel</h1 class="font-bold text-3xl my-2">
            @for ($i = 0; $i < 3; $i++)
                <label for="grayCarousell_{{ $i }}_title">Title:</label>
                <input type="text" id="grayCarousell_{{ $i }}_title"
                    name="grayCarousell[{{ $i }}][title]" placeholder="Enter Title">

                <label for="grayCarousell_{{ $i }}_desc">Description:</label>
                <textarea id="grayCarousell_{{ $i }}_desc" name="grayCarousell[{{ $i }}][desc]"
                    placeholder="Enter Description"></textarea>

                <label for="grayCarousell_{{ $i }}_image">Image URL:</label>
                <input type="text" id="grayCarousell_{{ $i }}_image"
                    name="grayCarousell[{{ $i }}][image]" placeholder="Enter Image URL">
            @endfor

            <h1 class="font-bold text-3xl my-2">YouTube Videos Carousel</h1 class="font-bold text-3xl my-2">
            @for ($i = 0; $i < 7; $i++)
                <label for="youtubeVideosCarousellItems_{{ $i }}_src">Video Source:</label>
                <input type="text" id="youtubeVideosCarousellItems_{{ $i }}_src"
                    name="youtubeVideosCarousellItems[{{ $i }}][src]" placeholder="Enter Video Source">

                <label for="youtubeVideosCarousellItems_{{ $i }}_title">Video Title:</label>
                <input type="text" id="youtubeVideosCarousellItems_{{ $i }}_title"
                    name="youtubeVideosCarousellItems[{{ $i }}][title]" placeholder="Enter Video Title">
            @endfor

            <h1 class="font-bold text-3xl my-2">Spec Numbers</h1 class="font-bold text-3xl my-2">
            @for ($i = 0; $i < 4; $i++)
                <label for="specNumbers_{{ $i }}_data">Data:</label>
                <input type="text" id="specNumbers_{{ $i }}_data"
                    name="specNumbers[{{ $i }}][data]" placeholder="Enter Data">

                <label for="specNumbers_{{ $i }}_info">Info:</label>
                <input type="text" id="specNumbers_{{ $i }}_info"
                    name="specNumbers[{{ $i }}][info]" placeholder="Enter Info">
            @endfor


            <h1 class="font-bold text-3xl my-2">Reasons to Drive Banner</h1 class="font-bold text-3xl my-2">
            <label for="reasonsToDrive_banner_image">Banner Image URL:</label>
            <input type="text" id="reasonsToDrive_banner_image" name="reasonsToDrive[banner][image]"
                placeholder="Enter Banner Image URL">

            <h1 class="font-bold text-3xl my-2">Reasons to Drive Info Text</h1 class="font-bold text-3xl my-2">
            <label for="reasonsToDrive_infoText_title">Info Text Title:</label>
            <input type="text" id="reasonsToDrive_infoText_title" name="reasonsToDrive[infoText][title]"
                placeholder="Enter Info Text Title">

            <h1 class="font-bold text-3xl my-2">Reasons</h1 class="font-bold text-3xl my-2">
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

            <h1 class="font-bold text-3xl my-2">Short Spec Info</h1 class="font-bold text-3xl my-2">
            <label for="shortSpecInfo_info1">Info 1:</label>
            <input type="text" id="shortSpecInfo_info1" name="shortSpecInfo[info1]" placeholder="Info 1">

            <label for="shortSpecInfo_info2">Info 2:</label>
            <input type="text" id="shortSpecInfo_info2" name="shortSpecInfo[info2]" placeholder="Info 2">

            <label for="shortSpecInfo_info3">Info 3:</label>
            <input type="text" id="shortSpecInfo_info3" name="shortSpecInfo[info3]" placeholder="Info 3">

            <h1 class="font-bold text-3xl my-2">Gallery</h1 class="font-bold text-3xl my-2">
            <label for="gallery_modelImage_src">Model Image URL:</label>
            <input type="text" id="gallery_modelImage_src" name="gallery[modelImage][src]"
                placeholder="Enter Model Image URL">
            <label for="gallery_modelImage_alt">Model Image Alt Text:</label>
            <input type="text" id="gallery_modelImage_alt" name="gallery[modelImage][alt]"
                placeholder="Enter Model Image Alt Text">

            <label for="gallery_subFamilyHeroVideo_src">Sub Family Hero Video URL:</label>
            <input type="text" id="gallery_subFamilyHeroVideo_src" name="gallery[subFamilyHeroVideo][src]"
                placeholder="Enter Video URL">
            <label for="gallery_subFamilyHeroVideo_alt">Sub Family Hero Video Alt Text:</label>
            <input type="text" id="gallery_subFamilyHeroVideo_alt" name="gallery[subFamilyHeroVideo][alt]"
                placeholder="Enter Video Alt Text">

            <label for="gallery_subFamilyHeroImageMobile_src">Sub Family Hero Image Mobile URL:</label>
            <input type="text" id="gallery_subFamilyHeroImageMobile_src"
                name="gallery[subFamilyHeroImageMobile][src]" placeholder="Enter Mobile Image URL">
            <label for="gallery_subFamilyHeroImageMobile_alt">Sub Family Hero Image Mobile Alt Text:</label>
            <input type="text" id="gallery_subFamilyHeroImageMobile_alt"
                name="gallery[subFamilyHeroImageMobile][alt]" placeholder="Enter Mobile Image Alt Text">

            <label for="gallery_subFamilyTopSectionImage_src">Sub Family Top Section Image URL:</label>
            <input type="text" id="gallery_subFamilyTopSectionImage_src"
                name="gallery[subFamilyTopSectionImage][src]" placeholder="Enter Top Section Image URL">
            <label for="gallery_subFamilyTopSectionImage_alt">Sub Family Top Section Image Alt Text:</label>
            <input type="text" id="gallery_subFamilyTopSectionImage_alt"
                name="gallery[subFamilyTopSectionImage][alt]" placeholder="Enter Top Section Image Alt Text">

            <label for="gallery_subFamilyTopSectionBGImage_src">Sub Family Top Section BG Image URL:</label>
            <input type="text" id="gallery_subFamilyTopSectionBGImage_src"
                name="gallery[subFamilyTopSectionBGImage][src]" placeholder="Enter Top Section BG Image URL">
            <label for="gallery_subFamilyTopSectionBGImage_alt">Sub Family Top Section BG Image Alt Text:</label>
            <input type="text" id="gallery_subFamilyTopSectionBGImage_alt"
                name="gallery[subFamilyTopSectionBGImage][alt]" placeholder="Enter Top Section BG Image Alt Text">


            <h1 class="font-bold text-3xl my-2">Accessory Banner</h1>
            <label for="accessory_banner_image">Banner Image URL:</label>
            <input type="text" id="accessory_banner_image" name="accessory[banner][image]"
                placeholder="Enter Banner Image URL">

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

                <h3>Images</h3>
                <label for="accessory_type_image1_src">Image 1 URL:</label>
                <input type="text" id="accessory_type_image1_src" name="accessory[accessoryTypes][][image1][src]"
                    placeholder="Enter Image 1 URL">
                <label for="accessory_type_image1_alt">Image 1 Alt Text:</label>
                <input type="text" id="accessory_type_image1_alt" name="accessory[accessoryTypes][][image1][alt]"
                    placeholder="Enter Image 1 Alt Text">

                <label for="accessory_type_image2_src">Image 2 URL (if applicable):</label>
                <input type="text" id="accessory_type_image2_src" name="accessory[accessoryTypes][][image2][src]"
                    placeholder="Optional Image 2 URL">
                <label for="accessory_type_image2_alt">Image 2 Alt Text (if applicable):</label>
                <input type="text" id="accessory_type_image2_alt" name="accessory[accessoryTypes][][image2][alt]"
                    placeholder="Optional Image 2 Alt Text">


            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Submit</button>








        </form>

    </div>

</x-app-layout>
