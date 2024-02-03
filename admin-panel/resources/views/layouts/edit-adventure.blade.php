<x-app-layout>
    <div class="px-8 mt-10 w-8/12">
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
        <h1 class="font-bold text-4xl text-end">Edit Sub-Family Adventure of {{ $subFamData->model_name }}</h1>

        <form action="{{ route('update-sub-adventure', $subFamData->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')

            <h2 class="font-bold text-3xl">Basic Info</h2>
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ old('title', $subFamData->title) }}" required>


            <label for="model">Model Name:</label>
            <input type="text" name="model_name" value="{{ old('model_name', $subFamData->model_name) }}" required>

            <label for="category">Sub-Family Name:</label>
            <input type="text" name="subFamilyName" value="{{ old('subFamilyName', $subFamData->subFamilyName) }}"
                required>

            <label for="category">Url:</label>
            <input type="text" name="url" value="{{ old('url', $subFamData->url) }}" required>


            <label for="category">Price:</label>
            <input type="text" name="price" value="{{ old('price', $subFamData->price) }}" required>




            <h1 class="font-bold text-3xl my-2">Engine Transmission</h1>

            @foreach ($subFamData->engineTransmission as $engineTransmission)
                <label>Title:</label>
                <input type="text" name="engineTransmission[{{ $loop->index }}][title]"
                    value="{{ old('engineTransmission.' . $loop->index . '.title', $engineTransmission['title']) }}">


                <label>Description:</label>
                <input type="text" name="engineTransmission[{{ $loop->index }}][desc]"
                    value="{{ old('engineTransmission.' . $loop->index . '.desc', $engineTransmission['desc']) }}">
            @endforeach




            <h1 class="font-bold text-3xl my-2">Youtube Video</h1>

            <label for="youtubeVideo">Youtube Video:</label>
            <input type="text" name="youtubeVideo" value="{{ old('youtubeVideo', $subFamData->youtubeVideo) }}">


            <h1 class="font-bold text-3xl my-2">Sub Family Page Info:</h1>


            @if (isset($subFamData->subFamilyPageInfo['service']) && is_array($subFamData->subFamilyPageInfo['service']))
            <h1 class="font-bold my-2 text-red-600">Service</h1>
                @foreach ($subFamData->subFamilyPageInfo['service'] as $index => $service)
                    <label for="subFamilyPageInfo_service_{{ $index }}_title">Service Title:</label>
                    <input type="text" id="subFamilyPageInfo_service_{{ $index }}_title"
                        name="subFamilyPageInfo[service][{{ $index }}][title]"
                        value="{{ old('subFamilyPageInfo.service.' . $index . '.title', $service['title']) }}"
                        required>

                    <label for="subFamilyPageInfo_service_{{ $index }}_desc">Service Description:</label>
                    <textarea id="subFamilyPageInfo_service_{{ $index }}_desc"
                        name="subFamilyPageInfo[service][{{ $index }}][desc]">{{ old('subFamilyPageInfo.service.' . $index . '.desc', $service['desc']) }}</textarea>
                @endforeach
            @endif


            @if (isset($subFamData->subFamilyPageInfo['audioSection']))
            <h1 class="font-bold my-2 text-red-600">Audio Section</h1>
                <label for="audioSection_title">Audio Section Title:</label>
                <input type="text" id="audioSection_title" name="subFamilyPageInfo[audioSection][title]"
                    value="{{ old('subFamilyPageInfo.audioSection.title', $subFamData->subFamilyPageInfo['audioSection']['title'] ?? '') }}"
                    required>

                <label for="audioSection_desc">Audio Section Description:</label>
                <textarea id="audioSection_desc" name="subFamilyPageInfo[audioSection][desc]">{{ old('subFamilyPageInfo.audioSection.desc', $subFamData->subFamilyPageInfo['audioSection']['desc'] ?? '') }}</textarea>

                <label for="audioSection_audio">Audio Section Audio File:</label>
                <input type="text" id="audioSection_audio" name="subFamilyPageInfo[audioSection][audio]"
                    value="{{ old('subFamilyPageInfo.audioSection.audio', $subFamData->subFamilyPageInfo['audioSection']['audio'] ?? '') }}"
                    required>
            @endif

            <h1 class="font-bold my-2 text-red-600">Top Section</h1>

            @if (isset($subFamData->subFamilyPageInfo['topSection']))
                <label for="topSection_title">Top Section Title:</label>
                <input type="text" id="topSection_title" name="subFamilyPageInfo[topSection][title]"
                    value="{{ old('subFamilyPageInfo.topSection.title', $subFamData->subFamilyPageInfo['topSection']['title'] ?? '') }}"
                    required>

                <label for="topSection_desc">Top Section Description:</label>
                <textarea id="topSection_desc" name="subFamilyPageInfo[topSection][desc]">{{ old('subFamilyPageInfo.topSection.desc', $subFamData->subFamilyPageInfo['topSection']['desc'] ?? '') }}</textarea>

                <label for="topSection_subtitle">Top Section Subtitle:</label>
                <input type="text" id="topSection_subtitle" name="subFamilyPageInfo[topSection][subtitle]"
                    value="{{ old('subFamilyPageInfo.topSection.subtitle', $subFamData->subFamilyPageInfo['topSection']['subtitle'] ?? '') }}"
                    required>
            @endif


            <h1 class="font-bold text-3xl my-2">Hero Slogans:</h1>

            @foreach ($subFamData['heroSlogans'] as $index => $slogan)
                <label for="heroSlogans_{{ $index }}">Hero Slogan {{ $index + 1 }}:</label>
                <input type="text" id="heroSlogans_{{ $index }}" name="heroSlogans[{{ $index }}]"
                    value="{{ old('heroSlogans.' . $index, $slogan) }}" required>
            @endforeach



            <h1 class="font-bold text-3xl my-2">Frame</h1>

            @foreach ($subFamData->frame as $frame)
                <label>Title:</label>
                <input type="text" name="frame[{{ $loop->index }}][title]"
                    value="{{ old('frame.' . $loop->index . '.title', $frame['title']) }}">


                <label>Description:</label>
                <input type="text" name="frame[{{ $loop->index }}][desc]"
                    value="{{ old('frame.' . $loop->index . '.desc', $frame['desc']) }}">
            @endforeach


            <h1 class="font-bold text-3xl my-2">Dimension</h1>

            @foreach ($subFamData->dimension as $dimension)
                <label>Title:</label>
                <input type="text" name="dimension[{{ $loop->index }}][title]"
                    value="{{ old('dimension.' . $loop->index . '.title', $dimension['title']) }}">


                <label>Description:</label>
                <input type="text" name="dimension[{{ $loop->index }}][desc]"
                    value="{{ old('dimension.' . $loop->index . '.desc', $dimension['desc']) }}">
            @endforeach


            <h1 class="font-bold text-3xl my-2">Fuel Consumption</h1>

            @foreach ($subFamData->fuelConsumption as $fuelConsumption)
                <label>Title:</label>
                <input type="text" name="fuelConsumption[{{ $loop->index }}][title]"
                    value="{{ old('fuelConsumption.' . $loop->index . '.title', $fuelConsumption['title']) }}">


                <label>Description:</label>
                <input type="text" name="fuelConsumption[{{ $loop->index }}][desc]"
                    value="{{ old('fuelConsumption.' . $loop->index . '.desc', $fuelConsumption['desc']) }}">
            @endforeach


            <h1 class="font-bold text-3xl my-2">Gray Carousel</h1>

            @foreach ($subFamData->grayCarousell as $grayCarousell)
                <label>Title:</label>
                <input type="text" name="grayCarousell[{{ $loop->index }}][title]"
                    value="{{ old('grayCarousell.' . $loop->index . '.title', $grayCarousell['title']) }}">


                <label>Description:</label>
                <input type="text" name="grayCarousell[{{ $loop->index }}][desc]"
                    value="{{ old('grayCarousell.' . $loop->index . '.desc', $grayCarousell['desc']) }}">


                <label>Image:</label>
                <input type="text" name="grayCarousell[{{ $loop->index }}][image]"
                    value="{{ old('grayCarousell.' . $loop->index . '.image', $grayCarousell['image']) }}">
            @endforeach


            <h1 class="font-bold text-3xl my-2">Special Numbers</h1>

            @foreach ($subFamData->specNumbers as $specNumbers)
                <label>Title:</label>
                <input type="text" name="specNumbers[{{ $loop->index }}][data]"
                    value="{{ old('specNumbers.' . $loop->index . '.data', $specNumbers['data']) }}">


                <label>Description:</label>
                <input type="text" name="specNumbers[{{ $loop->index }}][info]"
                    value="{{ old('specNumbers.' . $loop->index . '.info', $specNumbers['info']) }}">
            @endforeach


            <h1 class="font-bold text-3xl my-2">Reasons to Ride</h1>

            {{-- Banner Image --}}
            <label for="banner_image">Banner Image:</label>
            <input type="text" id="banner_image" name="reasonsToDrive[banner][image]"
                value="{{ old('reasonsToDrive.banner.image', $subFamData->reasonsToDrive['banner']['image']) }}"
                required>

            {{-- InfoText Title --}}
            <label for="infoText_title">InfoText Title:</label>
            <input type="text" id="infoText_title" name="reasonsToDrive[infoText][title]"
                value="{{ old('reasonsToDrive.infoText.title', $subFamData->reasonsToDrive['infoText']['title']) }}"
                required>

            {{-- InfoText Description --}}
            <label for="infoText_desc">InfoText Description:</label>
            <textarea id="infoText_desc" name="reasonsToDrive[infoText][desc]">{{ old('reasonsToDrive.infoText.desc', $subFamData->reasonsToDrive['infoText']['desc']) }}</textarea>

            {{-- Reasons --}}
            @php
                $reasons = old('reasonsToDrive.reasons', $subFamData->reasonsToDrive['reasons'] ?? []);
            @endphp

            @foreach ($reasons as $index => $reason)
                {{-- Safely accessing 'title' with a default empty string if not set --}}
                <label for="reasons_{{ $index }}_title">Reason {{ $index + 1 }} Title:</label>
                <input type="text" id="reasons_{{ $index }}_title"
                    name="reasonsToDrive[reasons][{{ $index }}][title]" value="{{ $reason['title'] ?? '' }}">

                {{-- Safely accessing 'desc' with a default empty string if not set --}}
                <label for="reasons_{{ $index }}_desc">Description:</label>
                <textarea rows="10" cols="50" id="reasons_{{ $index }}_desc"
                    name="reasonsToDrive[reasons][{{ $index }}][desc]">{{ $reason['desc'] ?? '' }}</textarea>

                {{-- Already adjusted for 'image' --}}
                <label for="reasons_{{ $index }}_image">Image:</label>
                <input type="text" id="reasons_{{ $index }}_image"
                    name="reasonsToDrive[reasons][{{ $index }}][image]" value="{{ $reason['image'] ?? '' }}">
            @endforeach

            <h1 class="font-bold text-3xl my-2">Accesories</h1>

            {{-- Accessory Banner Image --}}
            <label for="accessory_banner_image">Accessory Banner Image:</label>
            <input type="text" id="accessory_banner_image" name="accessory[banner][image]"
                value="{{ old('accessory.banner.image', $subFamData->accessory['banner']['image'] ?? '') }}" required>

            {{-- Accessory InfoText Title --}}
            <label for="accessory_infoText_title">InfoText Title:</label>
            <input type="text" id="accessory_infoText_title" name="accessory[infoText][title]"
                value="{{ old('accessory.infoText.title', $subFamData->accessory['infoText']['title'] ?? '') }}"
                required>

            {{-- Accessory InfoText Description --}}
            <label for="accessory_infoText_desc">InfoText Description:</label>
            <textarea id="accessory_infoText_desc" name="accessory[infoText][desc]">{{ old('accessory.infoText.desc', $subFamData->accessory['infoText']['desc'] ?? '') }}</textarea>

            {{-- Iterating over Accessory Types --}}
            @foreach ($subFamData->accessory['accessoryTypes'] ?? [] as $index => $type)
                <label for="accessory_type_{{ $index }}_title">Type Title:</label>
                <input type="text" id="accessory_type_{{ $index }}_title"
                    name="accessory[accessoryTypes][{{ $index }}][title]" value="{{ $type['title'] ?? '' }}"
                    required>

                <label for="accessory_type_{{ $index }}_desc">Type Description:</label>
                <textarea id="accessory_type_{{ $index }}_desc" name="accessory[accessoryTypes][{{ $index }}][desc]"
                    required>{{ $type['desc'] ?? '' }}</textarea>

                @foreach ($type['itemsList'] ?? [] as $itemIndex => $item)
                    <label for="accessory_type_{{ $index }}_item_{{ $itemIndex }}">Item:</label>
                    <input type="text" id="accessory_type_{{ $index }}_item_{{ $itemIndex }}"
                        name="accessory[accessoryTypes][{{ $index }}][itemsList][{{ $itemIndex }}]"
                        value="{{ $item ?? '' }}" required>
                @endforeach
            @endforeach


            <h1 class="font-bold text-3xl my-2">Short Specs Info</h1>
            <label for="">Info 1:</label>
            <input type="text" name="shortSpecInfo[info1]"
                value="{{ old('shortSpecInfo.info1', $motorcycle->shortSpecInfo['info1'] ?? '') }}"
                placeholder="660cc мотор">
            <label for="">Info 2:</label>
            <input type="text" name="shortSpecInfo[info2]"
                value="{{ old('shortSpecInfo.info2', $motorcycle->shortSpecInfo['info2'] ?? '') }}"
                placeholder="Водечки во класата по способност и ракување">
            <label for="">Info 3:</label>

            <input type="text" name="shortSpecInfo[info3]"
                value="{{ old('shortSpecInfo.info3', $motorcycle->shortSpecInfo['info3'] ?? '') }}"
                placeholder="Далечински прилагодлива Showa суспензија">

            <h1 class="font-bold text-3xl my-2">Gallery</h1>


            <label>Model Image Source:</label>
            <input type="text" name="gallery[modelImage][src]"
                value="{{ old('gallery.modelImage.src', $subFamData->gallery['modelImage']['src']) }}">
            <label>Model Image Alt Text:</label>
            <input type="text" name="gallery[modelImage][alt]"
                value="{{ old('gallery.modelImage.alt', $subFamData->gallery['modelImage']['alt']) }}">


            <label>Model Video Source:</label>
            <input type="text" name="gallery[subFamilyHeroVideo][src]"
                value="{{ old('gallery.subFamilyHeroVideo.src', $subFamData->gallery['subFamilyHeroVideo']['src']) }}">
            <label>Model Video Alt Text:</label>
            <input type="text" name="gallery[subFamilyHeroVideo][alt]"
                value="{{ old('gallery.subFamilyHeroVideo.alt', $subFamData->gallery['subFamilyHeroVideo']['alt']) }}">


            <label>Model Image Source:</label>
            <input type="text" name="gallery[subFamilyTopSectionImage][src]"
                value="{{ old('gallery.subFamilyTopSectionImage.src', $subFamData->gallery['subFamilyTopSectionImage']['src']) }}">
            <label>Model Image Alt Text:</label>
            <input type="text" name="gallery[subFamilyTopSectionImage][alt]"
                value="{{ old('gallery.subFamilyTopSectionImage.alt', $subFamData->gallery['subFamilyTopSectionImage']['alt']) }}">



            <label>Model Image Source:</label>
            <input type="text" name="gallery[subFamilyTopSectionBGImage][src]"
                value="{{ old('gallery.subFamilyTopSectionBGImage.src', $subFamData->gallery['subFamilyTopSectionBGImage']['src']) }}">
            <label>Model Image Alt Text:</label>
            <input type="text" name="gallery[subFamilyTopSectionBGImage][alt]"
                value="{{ old('gallery.subFamilyTopSectionBGImage.alt', $subFamData->gallery['subFamilyTopSectionBGImage']['alt']) }}">







            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
