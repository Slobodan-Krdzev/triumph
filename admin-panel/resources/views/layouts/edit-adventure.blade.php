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
        <h1 class="font-bold text-4xl text-end">Edit Sub-Family of <span
                class="text-red-500 capitalize">{{ $subFamData->subFamilyName }}</span></h1>

        <form action="{{ route('update-sub-adventure', $subFamData->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')

            <h2 class="font-bold text-3xl">Basic Info</h2>
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ old('title', $subFamData->title) }}">




            <label for="category">Sub-Family Name:</label>
            <input type="text" name="subFamilyName" value="{{ old('subFamilyName', $subFamData->subFamilyName) }}">

            <label for="category">Url:</label>
            <input type="text" name="url" value="{{ old('url', $subFamData->url) }}">


            <label for="category">Price:</label>
            <input type="text" name="price" value="{{ old('price', $subFamData->price) }}">




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
                        value="{{ old('subFamilyPageInfo.service.' . $index . '.title', $service['title']) }}">

                    <label for="subFamilyPageInfo_service_{{ $index }}_desc">Service Description:</label>
                    <textarea id="subFamilyPageInfo_service_{{ $index }}_desc"
                        name="subFamilyPageInfo[service][{{ $index }}][desc]">{{ old('subFamilyPageInfo.service.' . $index . '.desc', $service['desc']) }}</textarea>
                @endforeach
            @endif


            @if (isset($subFamData->subFamilyPageInfo['audioSection']))
                <h1 class="font-bold my-2 text-red-600">Audio Section</h1>
                <label for="audioSection_title">Audio Section Title:</label>
                <input type="text" id="audioSection_title" name="subFamilyPageInfo[audioSection][title]"
                    value="{{ old('subFamilyPageInfo.audioSection.title', $subFamData->subFamilyPageInfo['audioSection']['title'] ?? '') }}">

                <label for="audioSection_desc">Audio Section Description:</label>
                <textarea id="audioSection_desc" name="subFamilyPageInfo[audioSection][desc]">{{ old('subFamilyPageInfo.audioSection.desc', $subFamData->subFamilyPageInfo['audioSection']['desc'] ?? '') }}</textarea>

                {{-- <label for="audioSection_audio">Audio Section Audio File:</label>
                <input type="text" id="audioSection_audio" name="subFamilyPageInfo[audioSection][audio]"
                    value="{{ old('subFamilyPageInfo.audioSection.audio', $subFamData->subFamilyPageInfo['audioSection']['audio'] ?? '') }}"> --}}

                {{-- AUDIO SECTION TRY --}}
                <section class="my-7 font-bold text-red-600">
                    <x-form.input labelText="Choose Audio" imageId="audioSection_audio"
                        name="subFamilyPageInfo[audioSection][audio]">
                        <audio controls autoplay muted>
                            <source src="/storage{{ $subFamData->subFamilyPageInfo['audioSection']['audio'] }}"
                                type="audio/ogg">
                        </audio>
                    </x-form.input>
                </section>
            @endif

            <h1 class="font-bold my-2 text-red-600">Top Section</h1>

            @if (isset($subFamData->subFamilyPageInfo['topSection']))
                <label for="topSection_title">Top Section Title:</label>
                <input type="text" id="topSection_title" name="subFamilyPageInfo[topSection][title]"
                    value="{{ old('subFamilyPageInfo.topSection.title', $subFamData->subFamilyPageInfo['topSection']['title'] ?? '') }}">

                <label for="topSection_desc">Top Section Description:</label>
                <textarea id="topSection_desc" name="subFamilyPageInfo[topSection][desc]">{{ old('subFamilyPageInfo.topSection.desc', $subFamData->subFamilyPageInfo['topSection']['desc'] ?? '') }}</textarea>

                <label for="topSection_subtitle">Top Section Subtitle:</label>
                <input type="text" id="topSection_subtitle" name="subFamilyPageInfo[topSection][subtitle]"
                    value="{{ old('subFamilyPageInfo.topSection.subtitle', $subFamData->subFamilyPageInfo['topSection']['subtitle'] ?? '') }}">
            @endif


            <h1 class="font-bold text-3xl my-2">Hero Slogans:</h1>

            @foreach ($subFamData['heroSlogans'] as $index => $slogan)
                <label for="heroSlogans_{{ $index }}">Hero Slogan {{ $index + 1 }}:</label>
                <input type="text" id="heroSlogans_{{ $index }}" name="heroSlogans[{{ $index }}]"
                    value="{{ old('heroSlogans.' . $index, $slogan) }}">
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

            {{-- Assuming $subFamData->fuelConsumption might not be set or is empty --}}
            @php
                $fuelConsumptionData = $subFamData->fuelConsumption ?? [['title' => '', 'desc' => '']];
            @endphp

            @foreach ($fuelConsumptionData as $index => $fuelConsumption)
                <label>Title:</label>
                <input type="text" name="fuelConsumption[{{ $index }}][title]"
                    value="{{ old('fuelConsumption.' . $index . '.title', $fuelConsumption['title']) }}">

                <label>Description:</label>
                <input type="text" name="fuelConsumption[{{ $index }}][desc]"
                    value="{{ old('fuelConsumption.' . $index . '.desc', $fuelConsumption['desc']) }}">
            @endforeach


            <h1 class="font-bold text-3xl my-2">Gray Carousel</h1>

            @php
                $grayCarousellData = $subFamData->grayCarousell ?? [];
                if (empty($grayCarousellData)) {
                    $grayCarousellData = [['id' => '', 'title' => '', 'desc' => '', 'image' => '']];
                }
            @endphp

            @foreach ($grayCarousellData as $index => $grayCarousell)
                <div class="mb-4">
                    <label>Title:</label>
                    <input type="text" name="grayCarousell[{{ $index }}][title]"
                        value="{{ old('grayCarousell.' . $index . '.title', $grayCarousell['title'] ?? '') }}"
                        class="block w-full mt-1">

                    <label>Description:</label>
                    <input type="text" name="grayCarousell[{{ $index }}][desc]"
                        value="{{ old('grayCarousell.' . $index . '.desc', $grayCarousell['desc'] ?? '') }}"
                        class="block w-full mt-1">



                    @if (isset($grayCarousell['image']) && !empty($grayCarousell['image']))
                        <img id='grayCarousellImage{{ $index }}'
                            src="{{ asset('storage/' . $grayCarousell['image']) }}" width="600" height="300"
                            class="object-cover border m-3 border-gray-200" />
                    @endif
                </div>
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


            @php
                $reasonsToDrive = $subFamData->reasonsToDrive ?? [];
            @endphp

            {{-- Banner Image --}}
            @if (!empty(old('reasonsToDrive.banner.image', $reasonsToDrive['banner']['image'] ?? '')))
                <h1 class="font-bold text-3xl my-2">Reasons to Ride</h1>
                <x-form.input labelText="Banner Image:" imageId="reasonsToDriveImage"
                    name="reasonsToDrive[banner][image]">
                    <img id='reasonsToDriveImage' src="/storage{{ $reasonsToDrive['banner']['image'] }}"
                        width="600" height="300" class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endif

            {{-- InfoText Title --}}
            @if (!empty(old('reasonsToDrive.infoText.title', $reasonsToDrive['infoText']['title'] ?? '')))
                <label for="infoText_title">InfoText Title:</label>
                <input type="text" id="infoText_title" name="reasonsToDrive[infoText][title]"
                    value="{{ old('reasonsToDrive.infoText.title', $reasonsToDrive['infoText']['title'] ?? '') }}">
            @endif

            {{-- InfoText Description --}}
            @if (!empty(old('reasonsToDrive.infoText.desc', $reasonsToDrive['infoText']['desc'] ?? '')))
                <label for="infoText_desc">InfoText Description:</label>
                <textarea id="infoText_desc" name="reasonsToDrive[infoText][desc]">{{ old('reasonsToDrive.infoText.desc', $reasonsToDrive['infoText']['desc'] ?? '') }}</textarea>
            @endif

            {{-- Reasons --}}
            @php
                $reasons = old('reasonsToDrive.reasons', $reasonsToDrive['reasons'] ?? []);
            @endphp

            @foreach ($reasons as $index => $reason)
                @if (is_array($reason))
                    <label for="reasons_{{ $index }}_title">Reason {{ $index + 1 }} Title:</label>
                    <input type="text" id="reasons_{{ $index }}_title"
                        name="reasonsToDrive[reasons][{{ $index }}][title]"
                        value="{{ $reason['title'] ?? '' }}">

                    <label for="reasons_{{ $index }}_desc">Description:</label>
                    <textarea rows="10" cols="50" id="reasons_{{ $index }}_desc"
                        name="reasonsToDrive[reasons][{{ $index }}][desc]">{{ $reason['desc'] ?? '' }}</textarea>


                    <x-form.input labelText="Image:" imageId="reasonsImage{{ $index }}"
                        name="reasonsToDrive[reasons][{{ $index }}][image]">
                        <img id='reasonsImage{{ $index }}'
                            @if (isset($reason['image'])) src="/storage/{{ $reason['image'] ?? '' }}" @endif
                            width="600" height="150" class="object-cover border m-3 border-gray-200" />
                    </x-form.input>
                @endif
            @endforeach


            <h1 class="font-bold text-3xl my-2">Accesories</h1>

            {{-- <x-form.input labelText="Model Video Source:" imageId="modelVideoSource"
                name="gallery[subFamilyHeroVideo][src]">
                <video src="/storage/{{ $subFamData->gallery['subFamilyHeroVideo']['src'] ?? '' }}" muted controls
                    autoplay id='modelVideoSource' width="400" height="150"
                    class="object-cover border m-3 border-gray-200">
            </x-form.input> --}}

            {{-- <x-form.input labelText="Image Accessory:" imageId="imageAccessory"
                name="reasonsToDrive[reasons][{{ $index }}][image]">
                <img id='imageAccessory'
                    @if (isset($reason['image'])) src="/storage/{{ $reason['image'] ?? '' }}" @endif
                    width="600" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input> --}}



            {{-- Accessory Banner Image --}}
            <x-form.input labelText="Banner Image:" imageId="accessoryBannerImage" name="accessory[banner][image]">
                <img id='accessoryBannerImage' src="/storage{{ $subFamData['accessory']['banner']['image'] ?? '' }}"
                    width="600" height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            {{-- Accessory InfoText Title --}}
            <div class="mb-4">
                <label for="infoTextTitle" class="block text-gray-700 text-sm font-bold mb-2">Accessory Info Text
                    Title:</label>
                <input type="text" id="infoTextTitle" name="accessory[infoText][title]"
                    value="{{ old('accessory.infoText.title', $subFamData['accessory']['infoText']['title'] ?? '') }}"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            @foreach ($subFamData->accessory['accessoryTypes'] as $index => $type)
                <div class="mb-4">
                    <label for="accessoryTypes_{{ $index }}_title"
                        class="block text-gray-700 text-sm font-bold mb-2">Title:</label>
                    <input type="text" id="accessoryTypes_{{ $index }}_title"
                        name="accessory[accessoryTypes][{{ $index }}][title]"
                        value="{{ old('accessory.accessoryTypes.' . $index . '.title', $type['title'] ?? '') }}"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">

                    <label for="accessoryTypes_{{ $index }}_desc"
                        class="block text-gray-700 text-sm font-bold mb-2">Description:</label>
                    <textarea id="accessoryTypes_{{ $index }}_desc" name="accessory[accessoryTypes][{{ $index }}][desc]"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('accessory.accessoryTypes.' . $index . '.desc', $type['desc'] ?? '') }}</textarea>

                    @if(isset($type['itemsList']))
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">Items List:</label>
                        @foreach ($type['itemsList'] as $itemIndex => $item)
                            <input type="text"
                                name="accessory[accessoryTypes][{{ $index }}][itemsList][{{ $itemIndex }}]"
                                value="{{ old('accessory.accessoryTypes.' . $index . '.itemsList.' . $itemIndex, $item) }}"
                                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-2 leading-tight focus:outline-none focus:shadow-outline">
                        @endforeach
                    </div>
                    @endif


                    {{-- Images for each accessoryType --}}
                    @for ($i = 1; $i <= 2; $i++)
                        <x-form.input labelText="Image {{ $i }}:"
                            imageId="accessoryTypeImage{{ $index }}_{{ $i }}"
                            name="accessory[accessoryTypes][{{ $index }}][image{{ $i }}][src]">
                            <img id='accessoryTypeImage{{ $index }}_{{ $i }}'
                                src="/storage{{ $type['image' . $i]['src'] ?? '' }}"
                                alt="{{ $type['image' . $i]['alt'] ?? '' }}" width="600" height="300"
                                class="object-cover border m-3 border-gray-200" />
                        </x-form.input>
                    @endfor
                </div>
            @endforeach


            {{-- <label for="accessory_infoText_title">InfoText Title:</label>
            <input type="text" id="accessory_infoText_title" name="accessory[infoText][title]"
                value="{{ old('accessory.infoText.title', $subFamData->accessory['infoText']['title'] ?? '') }}">

            <label for="accessory_infoText_desc">InfoText Description:</label>
            <textarea id="accessory_infoText_desc" name="accessory[infoText][desc]">{{ old('accessory.infoText.desc', $subFamData->accessory['infoText']['desc'] ?? '') }}</textarea>

            @foreach ($subFamData->accessory['accessoryTypes'] ?? [] as $index => $type)
                <label for="accessory_type_{{ $index }}_title">Type Title:</label>
                <input type="text" id="accessory_type_{{ $index }}_title"
                    name="accessory[accessoryTypes][{{ $index }}][title]" value="{{ $type['title'] ?? '' }}">

                <label for="accessory_type_{{ $index }}_desc">Type Description:</label>
                <textarea id="accessory_type_{{ $index }}_desc" name="accessory[accessoryTypes][{{ $index }}][desc]">{{ $type['desc'] ?? '' }}</textarea>

                @foreach ($type['itemsList'] ?? [] as $itemIndex => $item)
                    <label for="accessory_type_{{ $index }}_item_{{ $itemIndex }}">Item:</label>
                    <input type="text" id="accessory_type_{{ $index }}_item_{{ $itemIndex }}"
                        name="accessory[accessoryTypes][{{ $index }}][itemsList][{{ $itemIndex }}]"
                        value="{{ $item ?? '' }}">
                @endforeach
            @endforeach --}}


            <h1 class="font-bold text-3xl my-2">Short Specs Info</h1>
            <label for="">Info 1:</label>
            <input type="text" name="shortSpecInfo[info1]"
                value="{{ old('shortSpecInfo.info1', $subFamData->shortSpecInfo['info1'] ?? '') }}">
            <label for="">Info 2:</label>
            <input type="text" name="shortSpecInfo[info2]"
                value="{{ old('shortSpecInfo.info2', $subFamData->shortSpecInfo['info2'] ?? '') }}">
            <label for="">Info 3:</label>

            <input type="text" name="shortSpecInfo[info3]"
                value="{{ old('shortSpecInfo.info3', $subFamData->shortSpecInfo['info3'] ?? '') }}">

            <h1 class="font-bold text-3xl my-2">Gallery</h1>




            <x-form.input labelText="Model Image Source:" imageId="modelImageSource"
                name="reasonsToDrive[banner][image]">
                @isset($subFamData->gallery['modelImage']['src'])
                    <img id='modelImageSource' src="/storage/{{ $subFamData->gallery['modelImage']['src'] }}"
                        width="400" height="150" class="object-cover border m-3 border-gray-200" />
                @endisset

            </x-form.input>

            {{-- <label>Model Image Alt Text:</label>
            <input type="text" name="gallery[modelImage][alt]"
                value="{{ old('gallery.modelImage.alt', $subFamData->gallery['modelImage']['alt']) }}"> --}}

            <div class="form-group">
                <label for="modelImageAlt">Model Image Alt Text:</label>
                <input type="text" class="form-control" id="modelImageAlt" name="gallery[modelImage][alt]"
                    value="{{ $subFamData->gallery['modelImage']['alt'] }}">
            </div>






            <x-form.input labelText="Model Video Source:" imageId="modelVideoSource"
                name="gallery[subFamilyHeroVideo][src]">
                @php
                    // Initialize videoSrc with an empty string in case 'subFamilyHeroVideo' or 'src' is not defined
                    $videoSrc = '';
                    // Check if 'subFamilyHeroVideo' and 'src' are set before using them
                    if (
                        isset($subFamData->gallery['subFamilyHeroVideo']) &&
                        isset($subFamData->gallery['subFamilyHeroVideo']['src'])
                    ) {
                        $videoSrc = '/storage/' . $subFamData->gallery['subFamilyHeroVideo']['src'];
                    }
                @endphp
                <video src="{{ $videoSrc }}" muted controls autoplay id='modelVideoSource' width="400"
                    height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>





            <label>Model Video Alt Text:</label>
            <input type="text" name="gallery[subFamilyHeroVideo][alt]"
                value="{{ old('gallery.subFamilyHeroVideo.alt', $subFamData->gallery['subFamilyHeroVideo']['alt'] ?? '') }}">




            <x-form.input labelText="Model Image Source:" imageId="modelImageSource"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='modelImageSource'
                    src="/storage/{{ $subFamData->gallery['subFamilyTopSectionImage']['src'] }}" width="400"
                    height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            <label>Model Image Alt Text:</label>
            <input type="text" name="gallery[subFamilyTopSectionImage][alt]"
                value="{{ old('gallery.subFamilyTopSectionImage.alt', $subFamData->gallery['subFamilyTopSectionImage']['alt']) }}">





            <x-form.input labelText="Model Image Source:" imageId="modelImageSourceTwo"
                name="gallery[subFamilyTopSectionImage][src]">
                @isset($subFamData->gallery['subFamilyTopSectionBGImage']['src'])
                    <img id='modelImageSourceTwo'
                        src="/storage/{{ $subFamData->gallery['subFamilyTopSectionBGImage']['src'] }}" width="400"
                        height="150" class="object-cover border m-3 border-gray-200" />
                @endisset
            </x-form.input>


            <label>Model Image Alt Text:</label>
            <input type="text" name="gallery[subFamilyTopSectionBGImage][alt]"
                value="{{ old('gallery.subFamilyTopSectionBGImage.alt', $subFamData->gallery['subFamilyTopSectionBGImage']['alt']) }}">







            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
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
</x-app-layout>
