<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('store-moto') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
            @csrf

            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="font-bold text-3xl my-2">Base Info</h1>

            <label for="title">Title:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="title">

            <label for="model">Model:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="model">

            <label for="model">Category:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="category">

            <label for="model">Sub Family Category:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="subFamilyCategory">

            <label for="model">Price:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="price">

            <label for="model">Edition</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="edition">

            <h1 class="font-bold text-3xl my-2">Specifications</h1>

            <label for="specs[cc]">CC:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="specs[cc]">

            <label for="specs[hp]">HP:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="specs[hp]">

            <label for="specs[torque]">Torque:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="specs[torque]">

            <x-form.input labelText="Model Image Source:" imageId="gallery[modelImage][src]" name="gallery[modelImage][src]">
                <img id='gallery[modelImage][src]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="gallery[modelImage][alt]">Model Image Alt:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="gallery[modelImage][alt]">

            <h1 class="font-bold text-3xl my-2">Bike Collor Pallette Gallery</h1>

            <x-form.input labelText="Default Image:" imageId="bikeCollorPalletteGallery[default]" name="bikeCollorPalletteGallery[default]">
                <img id='bikeCollorPalletteGallery[default]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Color 1 Image:" imageId="bikeCollorPalletteGallery[color1]" name="bikeCollorPalletteGallery[color1]">
                <img id='bikeCollorPalletteGallery[color1]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Color 1 Reversed Image:" imageId="bikeCollorPalletteGallery[color1Reversed]" name="bikeCollorPalletteGallery[color1Reversed]">
                <img id='bikeCollorPalletteGallery[color1Reversed]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Color 2 Image:" imageId="bikeCollorPalletteGallery[color2]" name="bikeCollorPalletteGallery[color2]">
                <img id='bikeCollorPalletteGallery[color2]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Color 2 Reversed Image:" imageId="bikeCollorPalletteGallery[color2Reversed]" name="bikeCollorPalletteGallery[color2Reversed]">
                <img id='bikeCollorPalletteGallery[color2Reversed]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Color 3 Image:" imageId="bikeCollorPalletteGallery[color3]" name="bikeCollorPalletteGallery[color3]">
                <img id='bikeCollorPalletteGallery[color3]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Color 3 Reversed Image:" imageId="bikeCollorPalletteGallery[color3Reversed]" name="bikeCollorPalletteGallery[color3Reversed]">
                <img id='bikeCollorPalletteGallery[color3Reversed]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            <h1 class="font-bold text-3xl my-2">Customization Colors</h1>

            <label for="customizationColors[0][colorName]">Color 1 Name:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[0][colorName]" required>

            <label for="customizationColors[0][price]">Color 1 Price:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[0][price]" required>

            <x-form.input labelText="Color 1 Image:" imageId="customizationColors[0][image]" name="customizationColors[0][image]">
                <img id='customizationColors[0][image]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="customizationColors[0][colorCode]">Color 1 Code:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[0][colorCode]" required>


            <label for="customizationColors[1][colorName]">Color 2 Name:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[1][colorName]" required>

            <label for="customizationColors[1][price]">Color 2 Price:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[1][price]" required>

            <x-form.input labelText="Color 2 Image:" imageId="customizationColors[1][image]" name="customizationColors[1][image]">
                <img id='customizationColors[1][image]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="customizationColors[1][colorCode]">Color 2 Code:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[1][colorCode]" required>


            <label for="customizationColors[2][colorName]">Color 3 Name:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[2][colorName]" required>

            <label for="customizationColors[2][price]">Color 3 Price:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[2][price]" required>

            <x-form.input labelText="Color 3 Image:" imageId="customizationColors[2][image]" name="customizationColors[2][image]">
                <img id='customizationColors[2][image]' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <label for="customizationColors[2][colorCode]">Color 3 Code:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="customizationColors[2][colorCode]" required>


            <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>

            <label for="shortSpecInfo[info1]">Short Spec Info 1:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="shortSpecInfo[info1]" required>

            <label for="shortSpecInfo[info2]">Short Spec Info 2:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="shortSpecInfo[info2]" required>

            <label for="shortSpecInfo[info3]">Short Spec Info 3:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="shortSpecInfo[info3]" required>

            <h1 class="font-bold text-3xl my-2">Sub Family Promo</h1>


            <label for="subFamilyPromo[title]">Sub Family Promo Title:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="subFamilyPromo[title]" required>

            <label for="subFamilyPromo[desc]">Sub Family Promo Description:</label>
            <input type="text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm" name="subFamilyPromo[desc]" required>





            <input type="submit" class="my-5 bg-lime-200 shadow rounded p-4" value="Submit">

            <h1 class="font-bold text-3xl my-2">Bike Page Carousell</h1>
            @for ($i = 0; $i < 8; $i++)
            <div class="mb-4">
                <label for="title-{{ $i }}" class="block text-sm font-medium text-gray-700">Title:</label>
                <input type="text" id="title-{{ $i }}" name="bikePageCarousell[{{ $i }}][title]" value="{{ $bikePageCarousell[$i]['title'] ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">

                <label for="desc-{{ $i }}" class="block text-sm font-medium text-gray-700">Description:</label>
                <textarea id="desc-{{ $i }}" name="bikePageCarousell[{{ $i }}][desc]" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">{{ $bikePageCarousell[$i]['desc'] ?? '' }}</textarea>

                {{-- <label for="image-{{ $i }}" class="block text-sm font-medium text-gray-700">Image URL:</label>
                <input type="text" id="image-{{ $i }}" name="bikePageCarousell[{{ $i }}][image]" value="{{ $bikePageCarousell[$i]['image'] ?? '' }}" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"> --}}

                <x-form.input labelText="Image:" imageId="image-{{ $i }}" name="bikePageCarousell[{{ $i }}][image]">
                    <img id='image-{{ $i }}' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            </div>
        @endfor




        </form>

    </div>

</x-app-layout>
