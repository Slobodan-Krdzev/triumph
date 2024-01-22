<x-app-layout>
    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="font-bold text-4xl text-end">Edit Adventure</h1>

        <form action="{{ route('update-moto', $moto->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')

            <h2 class="font-bold text-3xl">Basic Info</h2>
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

            <h1 class="font-bold text-3xl my-2">Specifications</h1>
            <label for="specs[cc]">Specs[CC]:</label>
            <input type="text" name="specs[cc]" value="{{ old('specs[cc]', $moto->specs['cc'] ?? '') }}" required>

            <label for="specs[hp]">Specs[HP]:</label>
            <input type="text" name="specs[hp]" value="{{ old('specs[hp]', $moto->specs['hp'] ?? '') }}" required>

            <label for="specs[torque]">Specs[Torque]:</label>
            <input type="text" name="specs[torque]" value="{{ old('specs[torque]', $moto->specs['torque'] ?? '') }}" required>


            <h1 class="font-bold text-3xl my-2">Gallery</h1>

            <label for="gallery[modelImage][src]">Gallery Image Source:</label>
            <input type="text" name="gallery[modelImage][src]"
                value="{{ old('gallery.modelImage.src', isset($moto) ? $moto->gallery['modelImage']['src'] : '') }}"
                required>

            <label for="gallery[modelImage][alt]">Gallery Image Alt:</label>
            <input type="text" name="gallery[modelImage][alt]"
                value="{{ old('gallery.modelImage.alt', isset($moto) ? $moto->gallery['modelImage']['alt'] : '') }}"
                required>


                <h1 class="font-bold text-3xl my-2">Bike Collor Pallette Gallery</h1>

            <label for="bikeCollorPalletteGallery[color1]">Color 1:</label>
            <input type="text" name="bikeCollorPalletteGallery[color1]"
                value="{{ old('bikeCollorPalletteGallery.color1', isset($moto) ? $moto->bikeCollorPalletteGallery['color1'] : '') }}"
                required>

            <label for="bikeCollorPalletteGallery[color1Reversed]">Color 1 Reversed:</label>
            <input type="text" name="bikeCollorPalletteGallery[color1Reversed]"
                value="{{ old('bikeCollorPalletteGallery.color1Reversed', isset($moto) ? $moto->bikeCollorPalletteGallery['color1Reversed'] : '') }}"
                required>

            <label for="bikeCollorPalletteGallery[color2]">Color 2:</label>
            <input type="text" name="bikeCollorPalletteGallery[color2]"
                value="{{ old('bikeCollorPalletteGallery.color2', isset($moto) ? $moto->bikeCollorPalletteGallery['color2'] : '') }}"
                required>

            <label for="bikeCollorPalletteGallery[color2Reversed]">Color 2 Reversed:</label>
            <input type="text" name="bikeCollorPalletteGallery[color2Reversed]"
                value="{{ old('bikeCollorPalletteGallery.color2Reversed', isset($moto) ? $moto->bikeCollorPalletteGallery['color2Reversed'] : '') }}"
                required>

            <label for="bikeCollorPalletteGallery[color3]">Color 3:</label>
            <input type="text" name="bikeCollorPalletteGallery[color3]"
                value="{{ old('bikeCollorPalletteGallery.color3', isset($moto) ? $moto->bikeCollorPalletteGallery['color3'] : '') }}"
                required>

            <label for="bikeCollorPalletteGallery[color3Reversed]">Color 3 Reversed:</label>
            <input type="text" name="bikeCollorPalletteGallery[color3Reversed]"
                value="{{ old('bikeCollorPalletteGallery.color3Reversed', isset($moto) ? $moto->bikeCollorPalletteGallery['color3Reversed'] : '') }}"
                required>

                <h1 class="font-bold text-3xl my-2">Customization Colors</h1>

                @foreach ($moto->customizationColors as $index => $color)
                <label for="customizationColors[{{ $index }}][colorName]">Color Name:</label>
                <input type="text" name="customizationColors[{{ $index }}][colorName]"
                    value="{{ old("customizationColors.$index.colorName", $color['colorName'] ?? '') }}" required>

                <label for="customizationColors[{{ $index }}][price]">Price:</label>
                <input type="text" name="customizationColors[{{ $index }}][price]"
                    value="{{ old("customizationColors.$index.price", $color['price'] ?? '') }}" required>

                <label for="customizationColors[{{ $index }}][image]">Image:</label>
                <input type="text" name="customizationColors[{{ $index }}][image]"
                    value="{{ old("customizationColors.$index.image", $color['image'] ?? '') }}" required>

                <label for="customizationColors[{{ $index }}][colorCode]">Color Code:</label>
                <input type="text" name="customizationColors[{{ $index }}][colorCode]"
                    value="{{ old("customizationColors.$index.colorCode", $color['colorCode'] ?? '') }}" required>

            @endforeach





            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
