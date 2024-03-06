<x-app-layout>


    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('update-fam-classics', $famClassic->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')
            <h1 class="font-bold text-4xl">Family Page of <span
                    class="capitalize text-red-500">{{ $famClassic->type }}</span></h1>
            <hr class="my-3 w-100">
            {{-- ------------------------------------------------------------------- --}}
            <h1 class="font-bold text-3xl my-2">Base Info</h1>
            <label for="type">Type:</label>
            <input type="text" name="type" value="{{ old('type', $famClassic['type']) }}" required>

            @if (isset($famClassic->familyPageBannerDesc))
                <label for="">Family Page Banner Description:</label>
                <textarea name="familyPageBannerDesc" rows="4">{{ old('familyPageBannerDesc', $famClassic['familyPageBannerDesc']) }}</textarea>
            @endif




            <x-form.input labelText="Family Page Banner Video:" imageId="familyPageBannerVideo"
                name="gallery[subFamilyHeroVideo][src]">
                <video src="/storage/{{ $famClassic['familyPageBannerVideo'] }}" muted controls autoplay
                    id='familyPageBannerVideo' width="400" height="350"
                    class="object-cover border m-3 border-gray-200">
            </x-form.input>


            <label for="">Config Page Description:</label>
            <textarea name="configPageInfo[desc]" rows="4">{{ old('configPageInfo.desc', $famClassic['configPageInfo']['desc']) }}</textarea>

            <h1 class="font-bold text-3xl my-2">Config Page Info</h1>

            <label for="">Config Page Link:</label>
            <input type="text" name="configPageInfo[link]"
                value="{{ old('configPageInfo.link', $famClassic['configPageInfo']['link']) }}" required>

            <label for="">Config Family Page Image:</label>
            <input type="text" name="configFamilyPageInfo[image][src]"
                value="{{ old('configFamilyPageInfo.image.src', $famClassic['configFamilyPageInfo']['image']['src']) }}"
                required>


            <x-form.input labelText="Config Family Page Image:" imageId="configFamilyPageImageSrc"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='configFamilyPageImageSrc'
                    src="/storage{{ $famClassic['configFamilyPageInfo']['image']['src'] }}" width="200"
                    height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="">Config Family Page Info Alt:</label>
            <input type="text" name="configFamilyPageInfo[image][alt]"
                value="{{ old('configFamilyPageInfo.image.alt', $famClassic['configFamilyPageInfo']['image']['alt']) }}"
                required>


            <h1 class="font-bold text-3xl my-2">Gray Carousell Info</h1>

            @foreach ($famClassic['grayCaro'] as $index => $carouselItem)
                <label for="">Title:</label>
                <input type="text" name="grayCaro[{{ $index }}][title]"
                    value="{{ old('grayCaro.' . $index . '.title', $carouselItem['title']) }}" required>

                <label for="">Description:</label>
                <textarea name="grayCaro[{{ $index }}][desc]" rows="4">{{ old('grayCaro.' . $index . '.desc', $carouselItem['desc']) }}</textarea>
{{--
                <label for="">Image:</label>
                <input type="text" name="grayCaro[{{ $index }}][image]"
                    value="{{ old('grayCaro.' . $index . '.image', $carouselItem['image']) }}" required> --}}


                <x-form.input labelText="Gray Carousell Image:" imageId="configFamilyPageImageSrc"
                    name="gallery[subFamilyTopSectionImage][src]">
                    <img id='configFamilyPageImageSrc' src="/storage/{{ $carouselItem['image'] }}" width="200"
                        height="150" class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endforeach


            <h1 class="font-bold text-3xl my-2">Promo Info For Family Page</h1>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-white my-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                <a href="{{ route('add-promo-classics') }}">Add Promo</a>
            </button>



            @foreach ($promos as $promo)
                @foreach ($promo->promo_data as $data)
                    <div class="border-2 border-neutral-500 flex justify-between items-center p-2">
                        <h2>{{ $data['title'] }}</h2>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('edit-promo-classics', ['id' => $promo->id]) }}"
                                class="bg-yellow-300 p-1 mr-3 rounded">Edit</a>
                            <a href="{{ route('promo-delete', ['id' => $promo->id]) }}"
                                class="bg-red-500 p-1 rounded text-white"
                                onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) document.getElementById('delete-form-{{ $promo->id }}').submit();">Delete</a>
                            <form id="delete-form-{{ $promo->id }}"
                                action="{{ route('promo-classics-delete', ['id' => $promo->id]) }}" method="POST"
                                style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                @endforeach
            @endforeach











            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>


</x-app-layout>
