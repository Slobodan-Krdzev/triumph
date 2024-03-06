<x-app-layout>

    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="font-bold text-4xl">You are editing model:<span class="uppercase text-red-500">{{$moto->model}}</span></h1>

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

            {{-- <label for="gallery[modelImage][src]">Gallery Image Source:</label>
            <input type="text" name="gallery[modelImage][src]"
                value="{{ old('gallery.modelImage.src', isset($moto) ? $moto->gallery['modelImage']['src'] : '') }}"
                required> --}}


                <x-form.input labelText="Gallery Image:" imageId="galleryModelImage"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='galleryModelImage'  @if (isset($moto->bikeCollorPalletteGallery['color1Reversed'])) src="/storage/{{ $moto->bikeCollorPalletteGallery['color1Reversed'] ?? '' }}" @endif
                    width="600" height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="gallery[modelImage][alt]">Gallery Image Alt:</label>
            <input type="text" name="gallery[modelImage][alt]"
                value="{{ old('gallery.modelImage.alt', isset($moto) ? $moto->gallery['modelImage']['alt'] : '') }}"
                required>



            {{-- <label for="bikeCollorPalletteGallery[color1]">Color 1:</label>
            <input type="text" name="bikeCollorPalletteGallery[color1]"
                value="{{ old('bikeCollorPalletteGallery.color1', isset($moto) ? $moto->bikeCollorPalletteGallery['color1'] : '') }}"
                required> --}}
        <h1 class="font-bold my-5 text-4xl ">Configuration Moto Images</span></h1>
            <hr style="background-color: red; height: 2px;border:none" width="100%">

            <section class="mt-10">
                <x-form.input  labelText="Color 1:" imageId="galleryModelImage"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='galleryModelImage'  @if (isset($moto->bikeCollorPalletteGallery['color1'])) src="/storage/{{ $moto->bikeCollorPalletteGallery['color1']?? '' }}" @endif
                    width="600" height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>
            </section>

            {{-- <label for="bikeCollorPalletteGallery[color1Reversed]">Color 1 Reversed:</label>
            <input type="text" name="bikeCollorPalletteGallery[color1Reversed]"
                value="{{ old('bikeCollorPalletteGallery.color1Reversed', isset($moto) ? $moto->bikeCollorPalletteGallery['color1Reversed'] : '') }}"
                required> --}}



                <x-form.input labelText="Color 1 Reversed:" imageId="galleryModelImage"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='galleryModelImage'  @if (isset($moto->gallery['modelImage']['src'])) src="/storage/{{ $moto->gallery['modelImage']['src'] ?? '' }}" @endif
                    width="600" height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            {{-- <label for="bikeCollorPalletteGallery[color2]">Color 2:</label>
            <input type="text" name="bikeCollorPalletteGallery[color2]"
                value="{{ old('bikeCollorPalletteGallery.color2', isset($moto) ? $moto->bikeCollorPalletteGallery['color2'] : '') }}"
                required> --}}

                <x-form.input labelText="Color 2:" imageId="galleryModelImage"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='galleryModelImage'  @if (isset($moto->bikeCollorPalletteGallery['color2'])) src="/storage/{{ $moto->bikeCollorPalletteGallery['color2'] ?? '' }}" @endif
                    width="600" height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            {{-- <label for="bikeCollorPalletteGallery[color2Reversed]">Color 2 Reversed:</label>
            <input type="text" name="bikeCollorPalletteGallery[color2Reversed]"
                value="{{ old('bikeCollorPalletteGallery.color2Reversed', isset($moto) ? $moto->bikeCollorPalletteGallery['color2Reversed'] : '') }}"
                required> --}}


                <x-form.input labelText="Color 2 Reversed:" imageId="galleryModelImage"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='galleryModelImage'  @if (isset($moto->bikeCollorPalletteGallery['color2Reversed'])) src="/storage/{{ $moto->bikeCollorPalletteGallery['color2Reversed'] ?? '' }}" @endif
                    width="600" height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            {{-- <label for="bikeCollorPalletteGallery[color3]">Color 3:</label>
            <input type="text" name="bikeCollorPalletteGallery[color3]"
                value="{{ old('bikeCollorPalletteGallery.color3', isset($moto) ? $moto->bikeCollorPalletteGallery['color3'] : '') }}"
                required> --}}


                <x-form.input labelText="Color 2:" imageId="galleryModelImage"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='galleryModelImage'  @if (isset($moto->bikeCollorPalletteGallery['color3'])) src="/storage/{{ $moto->bikeCollorPalletteGallery['color3'] ?? '' }}" @endif
                    width="600" height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>
{{--
            <label for="bikeCollorPalletteGallery[color3Reversed]">Color 3 Reversed:</label>
            <input type="text" name="bikeCollorPalletteGallery[color3Reversed]"
                value="{{ old('bikeCollorPalletteGallery.color3Reversed', isset($moto) ? $moto->bikeCollorPalletteGallery['color3Reversed'] : '') }}"
                required> --}}


                <x-form.input labelText="Color 2 Reversed:" imageId="galleryModelImage"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='galleryModelImage'  @if (isset($moto->bikeCollorPalletteGallery['color3Reversed'])) src="/storage/{{ $moto->bikeCollorPalletteGallery['color3Reversed'] ?? '' }}" @endif
                    width="600" height="300" class="object-cover border m-3 border-gray-200" />
            </x-form.input>





            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
