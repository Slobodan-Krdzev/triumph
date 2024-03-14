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
{{--
            <label for="gallery[modelImage][src]">Gallery Image Source:</label>
            <input type="text" name="gallery[modelImage][src]"
                value="{{ old('gallery.modelImage.src', isset($moto) ? $moto->gallery['modelImage']['src'] : '') }}"
                required> --}}

            <x-form.input labelText="Gallery Image Source:" imageId="gallery[modelImage][src]" name="gallery[modelImage][src]">
                <img src="/storage{{$moto->gallery['modelImage']['src']}}" id='gallery[modelImage][src]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="gallery[modelImage][alt]">Gallery Image Alt:</label>
            <input type="text" name="gallery[modelImage][alt]"
                   value="{{ old('gallery.modelImage.alt', isset($moto) ? $moto->gallery['modelImage']['alt'] : '') }}"
                   required>


                   @if(isset($moto->bikeCollorPalletteGallery['color1']))
                   <x-form.input labelText="Color 1:" imageId="bikeCollorPalletteGallery[color1]" name="bikeCollorPalletteGallery[color1]">
                       <img src="/storage{{$moto->bikeCollorPalletteGallery['color1'] }}" id='bikeCollorPalletteGallery[color1]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                   </x-form.input>
               @endif

               @if(isset($moto->bikeCollorPalletteGallery['color1Reversed']))
                   <x-form.input labelText="Color 1 Reversed:" imageId="bikeCollorPalletteGallery[color1Reversed]" name="bikeCollorPalletteGallery[color1Reversed]">
                       <img src="/storage{{$moto->bikeCollorPalletteGallery['color1Reversed'] }}" id='bikeCollorPalletteGallery[color1Reversed]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                   </x-form.input>
               @endif

               @if(isset($moto->bikeCollorPalletteGallery['color2']))
                   <x-form.input labelText="Color 2:" imageId="bikeCollorPalletteGallery[color2]" name="bikeCollorPalletteGallery[color2]">
                       <img src="/storage{{$moto->bikeCollorPalletteGallery['color2'] }}" id='bikeCollorPalletteGallery[color2]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                   </x-form.input>
               @endif

               @if(isset($moto->bikeCollorPalletteGallery['color2Reversed']))
                   <x-form.input labelText="Color 2 Reversed:" imageId="bikeCollorPalletteGallery[color2Reversed]" name="bikeCollorPalletteGallery[color2Reversed]">
                       <img src="/storage{{$moto->bikeCollorPalletteGallery['color2Reversed'] }}" id='bikeCollorPalletteGallery[color2Reversed]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                   </x-form.input>
               @endif

               @if(isset($moto->bikeCollorPalletteGallery['color3']))
                   <x-form.input labelText="Color 3:" imageId="bikeCollorPalletteGallery[color3]" name="bikeCollorPalletteGallery[color3]">
                       <img src="/storage{{$moto->bikeCollorPalletteGallery['color3'] }}" id='bikeCollorPalletteGallery[color3]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                   </x-form.input>
               @endif

               @if(isset($moto->bikeCollorPalletteGallery['color3Reversed']))
                   <x-form.input labelText="Color 3 Reversed:" imageId="bikeCollorPalletteGallery[color3Reversed]" name="bikeCollorPalletteGallery[color3Reversed]">
                       <img src="/storage{{$moto->bikeCollorPalletteGallery['color3Reversed'] }}" id='bikeCollorPalletteGallery[color3Reversed]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                   </x-form.input>
               @endif








            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
