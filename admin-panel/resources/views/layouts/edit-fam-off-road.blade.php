<x-app-layout>


    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('update-fam-sport', $famOffRoad->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')
            <h1 class="font-bold text-4xl">Family Page of <span
                    class="capitalize text-red-500">{{ $famOffRoad->type }}</span></h1>
            <hr class="my-3 w-100">

            <h1 class="font-bold text-3xl my-2">Base Info</h1>
            <label for="type">Type:</label>
            <input type="text" id="type" name="type" value="{{ $famOffRoad['type'] }}">

            @if (isset($famOffRoad->familyPageBannerDesc))
                <label for="familyPageBannerDesc">Family Page Banner Description:</label>
                <textarea id="familyPageBannerDesc" name="familyPageBannerDesc">{{ $famOffRoad['familyPageBannerDesc'] }}</textarea>
            @endif



            <x-form.input labelText="Family Page Banner Video:" imageId="familyPageBannerVideo"
                name="familyPageBannerVideo">
                <video src="/storage/{{ $famOffRoad['familyPageBannerVideo'] }}" muted controls autoplay
                    id='familyPageBannerVideo' width="400" height="350"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            <label for="configPageLink">Config Page Link:</label>
            <input type="text" id="configPageLink" name="configPageLink"
                value="{{ $famOffRoad['configPageInfo']['link'] }}">




            <x-form.input labelText="Config Family Page Image:" imageId="configFamilyPageImageSrc"
                name="configFamilyPageImageSrc">
                <img id='configFamilyPageImageSrc'
                    src="/storage/{{ $famOffRoad['configFamilyPageInfo']['image']['src'] }}" width="400"
                    height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            <label for="configFamilyPageImageAlt">Config Family Page Image Alt:</label>
            <input type="text" id="configFamilyPageImageAlt" name="configFamilyPageImageAlt"
                value="{{ $famOffRoad['configFamilyPageInfo']['image']['alt'] }}">


            <label for="youtubeVideo">YouTube Video:</label>
            <input type="text" id="youtubeVideo" name="youtubeVideo" value="{{ $famOffRoad['youtubeVideo'] }}">

            <!-- For editing carousel items, you might consider using a loop to generate the fields dynamically -->
            <h1 class="font-bold text-3xl my-2">Gray Carousel Info</h1>

            @foreach ($famOffRoad['grayCaro'] as $index => $caroItem)
                <h4>Carousel Item {{ $index + 1 }}</h4>

                <label for="carouselItems[{{ $index }}][title]">Title:</label>
                <input type="text" id="carouselItems[{{ $index }}][title]"
                    name="carouselItems[{{ $index }}][title]" value="{{ $caroItem['title'] }}">


                <label for="carouselItems[{{ $index }}][desc]">Description:</label>
                <textarea id="carouselItems[{{ $index }}][desc]" name="carouselItems[{{ $index }}][desc]">{{ $caroItem['desc'] }}</textarea>


{{--                <label for="carouselItems[{{ $index }}][image]">Image:</label>--}}
{{--                <input type="text" id="carouselItems[{{ $index }}][image]"--}}
{{--                    name="carouselItems[{{ $index }}][image]" value="{{ $caroItem['image'] }}">--}}

                    <x-form.input labelText="Image:" imageId="carouselItems[{{ $index }}][image]"
                    name="carouselItems[{{ $index }}][image]">
                    <img id='carouselItems[{{ $index }}][image]'
                        src="/storage{{  $caroItem['image'] }}" width="400"
                        height="300" class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endforeach


            <h1 class="font-bold text-3xl my-2">Promo Info For Family Page</h1>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-white my-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                <a href="{{ route('add-promo-off-road') }}">Add Promo</a>
            </button>



            @foreach ($promos as $promo)
                @foreach ($promo->promo_data as $data)
                    <div class="border-2 border-neutral-500 flex justify-between items-center p-2">
                        <h2>{{ $data['title'] }}</h2>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('edit-promo-off-road', ['id' => $promo->id]) }}"
                                class="bg-yellow-300 p-1 mr-3 rounded">Edit</a>
                            <a href="{{ route('promo-delete', ['id' => $promo->id]) }}"
                                class="bg-red-500 p-1 rounded text-white"
                                onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) document.getElementById('delete-form-{{ $promo->id }}').submit();">Delete</a>
                            <form id="delete-form-{{ $promo->id }}"
                                action="{{ route('promo-off-road-delete', ['id' => $promo->id]) }}" method="POST"
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