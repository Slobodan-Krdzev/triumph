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
        <form action="{{ route('update-moto', $moto->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ old('title', $moto->title) }}" required>


            <label for="model">Model:</label>
            <input type="text" name="model" value="{{ old('model', $moto->model) }}" required>

            <label for="category">Category:</label>
            <input type="text" name="category" value="{{ old('category', $moto->category) }}" required>


            <label for="subFamilyCategory">Sub Family Category:</label>
            <input type="text" name="subFamilyCategory"
                value="{{ old('subFamilyCategory', $moto->subFamilyCategory) }}" required>

            <label for="edition">Edition:</label>
            <input type="text" name="edition" value="{{ old('edition', $moto->edition) }}" required>

            <label for="price">Price:</label>
            <input type="text" name="price" value="{{ old('price', $moto->price) }}" required>

            <label for="youtubeVideo">Promo YouTube Video</label>
            <input type="text" name="gallery[promoYoutubeVideo][src]"
                value="{{ old('gallery.promoYoutubeVideo.src', $moto->gallery['promoYoutubeVideo']['src'] ?? '') }}"
                required>


            <label for="youtubeVideo">Promo YouTube Alt</label>
            <input type="text" name="gallery[promoYoutubeVideo][alt]"
                value="{{ old('gallery.promoYoutubeVideo.alt', $moto->gallery['promoYoutubeVideo']['alt'] ?? '') }}"
                required>




            <x-form.input labelText="Gallery Image Source:" imageId="gallery[modelImage][src]"
                name="gallery[modelImage][src]">
                <img src="{{ $moto->gallery['modelImage']['src'] }}" id='gallery[modelImage][src]' width="400"
                    height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="gallery[modelImage][alt]">Gallery Image Alt:</label>
            <input type="text" name="gallery[modelImage][alt]"
                value="{{ old('gallery.modelImage.alt', isset($moto) ? $moto->gallery['modelImage']['alt'] : '') }}"
                required>



            <x-form.input labelText="Color 1:" imageId="bikeCollorPalletteGallery[color1]"
                name="bikeCollorPalletteGallery[color1]">
                <img src="{{ $moto->bikeCollorPalletteGallery['color1'] }}" id='bikeCollorPalletteGallery[color1]'
                    width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Color 1 Reversed:" imageId="bikeCollorPalletteGallery[color1Reversed]"
                name="bikeCollorPalletteGallery[color1Reversed]">
                <img src="{{ $moto->bikeCollorPalletteGallery['color1Reversed'] }}"
                    id='bikeCollorPalletteGallery[color1Reversed]' width="400" height="150"
                    class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            @if (isset($moto->bikeCollorPalletteGallery['color2']))
                <x-form.input labelText="Color 2:" imageId="bikeCollorPalletteGallery[color2]"
                    name="bikeCollorPalletteGallery[color2]">
                    <img src="{{ $moto->bikeCollorPalletteGallery['color2'] }}" id='bikeCollorPalletteGallery[color2]'
                        width="400" height="150" class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endif

            @if (isset($moto->bikeCollorPalletteGallery['color2Reversed']))
                <x-form.input labelText="Color 2 Reversed:" imageId="bikeCollorPalletteGallery[color2Reversed]"
                    name="bikeCollorPalletteGallery[color2Reversed]">
                    <img src="{{ $moto->bikeCollorPalletteGallery['color2Reversed'] }}"
                        id='bikeCollorPalletteGallery[color2Reversed]' width="400" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endif

            @if (isset($moto->bikeCollorPalletteGallery['color3']))
                <x-form.input labelText="Color 3:" imageId="bikeCollorPalletteGallery[color3]"
                    name="bikeCollorPalletteGallery[color3]">
                    <img src="{{ $moto->bikeCollorPalletteGallery['color3'] }}" id='bikeCollorPalletteGallery[color3]'
                        width="400" height="150" class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endif

            @if (isset($moto->bikeCollorPalletteGallery['color3Reversed']))
                <x-form.input labelText="Color 3 Reversed:" imageId="bikeCollorPalletteGallery[color3Reversed]"
                    name="bikeCollorPalletteGallery[color3Reversed]">
                    <img src="{{ $moto->bikeCollorPalletteGallery['color3Reversed'] }}"
                        id='bikeCollorPalletteGallery[color3Reversed]' width="400" height="150"
                        class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endif



            <h1 class="font-bold text-3xl my-2">Short Specs Info</h1>
            <label for="">Info 1:</label>
            <input type="text" name="shortSpecInfo[info1]"
                value="{{ old('shortSpecInfo.info1', $moto->shortSpecInfo['info1'] ?? '') }}">
            <label for="">Info 2:</label>
            <input type="text" name="shortSpecInfo[info2]"
                value="{{ old('shortSpecInfo.info2', $moto->shortSpecInfo['info2'] ?? '') }}">
            <label for="">Info 3:</label>

            <input type="text" name="shortSpecInfo[info3]"
                value="{{ old('shortSpecInfo.info3', $moto->shortSpecInfo['info3'] ?? '') }}">





            @php
                $bikePageCarousell = $moto->bikePageCarousell ?? [];
            @endphp




            @if (!empty($moto->bikePageCarousell) && is_array($moto->bikePageCarousell))
                <h1 class="font-bold text-3xl my-2">Bike Page Carousell</h1>
                @foreach ($moto->bikePageCarousell as $index => $carouselItem)
                    <label for="title-{{ $index }}">Title:</label>
                    <input type="text" id="title-{{ $index }}"
                        name="bikePageCarousell[{{ $index }}][title]" value="{{ $carouselItem['title'] }}">

                    <label for="desc-{{ $index }}">Description:</label>
                    <input type="text" id="desc-{{ $index }}"
                        name="bikePageCarousell[{{ $index }}][desc]"
                        value="{{ isset($carouselItem['desc']) ? $carouselItem['desc'] : '' }}">

                    <x-form.input labelText="Image URL:" imageId="image-{{ $index }}"
                        name="bikePageCarousell[{{ $index }}][image]">
                        <img src="/storage{{ $carouselItem['image'] }}" id='image-{{ $index }}'
                            width="400" height="150" class="object-cover border m-3 border-gray-200" />
                    </x-form.input>
                @endforeach
            @endif


            @if (!empty($moto->bikePagePromo) && is_array($moto->bikePagePromo))
                <h1 class="font-bold text-3xl my-2">Bike Page Promo</h1>
                @foreach ($moto->bikePagePromo as $index => $promoItem)
                    <label for="promo-title-{{ $index }}">Title:</label>
                    <input type="text" id="promo-title-{{ $index }}"
                        name="bikePagePromo[{{ $index }}][title]" value="{{ $promoItem['title'] ?? '' }}">

                    <label for="promo-desc-{{ $index }}">Description:</label>
                    <input type="text" id="promo-desc-{{ $index }}"
                        name="bikePagePromo[{{ $index }}][desc]" value="{{ $promoItem['desc'] ?? '' }}">

                    <label for="promo-image-{{ $index }}">Image URL:</label>
                    <input type="text" id="promo-image-{{ $index }}"
                        name="bikePagePromo[{{ $index }}][image]" value="{{ $promoItem['image'] ?? '' }}">

                    @if (isset($promoItem['image']) && !empty($promoItem['image']))
                        <div>
                            <img src="/storage{{ $promoItem['image'] }}"
                                id='promo-image-preview-{{ $index }}' width="400" height="150"
                                class="object-cover border m-3 border-gray-200" />
                        </div>
                    @endif
                @endforeach
            @endif


            <h1 class="font-bold text-3xl my-2">Sub Family Promo</h1>

            <label for="">Title:</label>
            <input type="text" name="subFamilyPromo[title]"
                value="{{ old('subFamilyPromo.title', $moto->subFamilyPromo['title'] ?? '') }}">

            <label for="">Description</label>
            <textarea name="subFamilyPromo[desc]" rows="4" cols="50">{{ old('subFamilyPromo.desc', $moto->subFamilyPromo['desc'] ?? '') }}</textarea>



            @php
                $bikePageImageGallery = $moto->bikePageImageGallery ?? [];
            @endphp

            @if (!empty($moto->bikePageImageGallery) && is_array($moto->bikePageImageGallery))
                <h1 class="font-bold text-3xl my-2">Bike Page Image Gallery</h1>
                @foreach ($moto->bikePageImageGallery as $index => $imagePath)
                    <x-form.input labelText="Image URL:" imageId="image-{{ $index }}"
                        name="bikePageImageGallery[{{ $index }}]">
                        <img src="/storage/{{ asset($imagePath) }}" id='image-{{ $index }}' width="400"
                            height="150" class="object-cover border m-3 border-gray-200" />
                    </x-form.input>
                @endforeach
            @endif







            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
