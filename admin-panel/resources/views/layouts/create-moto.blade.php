<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('store-moto') }}" method="POST" class="flex flex-col ">
            @csrf

            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    {{ session('success') }}
                </div>
            @endif
            <h1 class="font-bold text-3xl my-2">Base Info</h1>

            <label for="title">Title:</label>
            <input type="text" name="title">

            <label for="model">Model:</label>
            <input type="text" name="model">

            <label for="model">Category:</label>
            <input type="text" name="category">

            <label for="model">Sub Family Category:</label>
            <input type="text" name="subFamilyCategory">

            <label for="model">Price:</label>
            <input type="text" name="price">

            <label for="model">Edition</label>
            <input type="text" name="edition">

            <h1 class="font-bold text-3xl my-2">Specifications</h1>

            <label for="specs[cc]">CC:</label>
            <input type="text" name="specs[cc]">

            <label for="specs[hp]">HP:</label>
            <input type="text" name="specs[hp]">

            <label for="specs[torque]">Torque:</label>
            <input type="text" name="specs[torque]">

            <label for="gallery[modelImage][src]">Model Image Source:</label>
            <input type="text" name="gallery[modelImage][src]">

            <label for="gallery[modelImage][alt]">Model Image Alt:</label>
            <input type="text" name="gallery[modelImage][alt]">

            <h1 class="font-bold text-3xl my-2">Bike Collor Pallette Gallery</h1>

            <label for="bikeCollorPalletteGallery[default]">Default Image:</label>
            <input type="text" name="bikeCollorPalletteGallery[default]" required>

            <label for="bikeCollorPalletteGallery[color1]">Color 1 Image:</label>
            <input type="text" name="bikeCollorPalletteGallery[color1]" required>

            <label for="bikeCollorPalletteGallery[color1Reversed]">Color 1 Reversed Image:</label>
            <input type="text" name="bikeCollorPalletteGallery[color1Reversed]" required>

            <label for="bikeCollorPalletteGallery[color2]">Color 2 Image:</label>
            <input type="text" name="bikeCollorPalletteGallery[color2]" required>

            <label for="bikeCollorPalletteGallery[color2Reversed]">Color 2 Reversed Image:</label>
            <input type="text" name="bikeCollorPalletteGallery[color2Reversed]" required>

            <label for="bikeCollorPalletteGallery[color3]">Color 3 Image:</label>
            <input type="text" name="bikeCollorPalletteGallery[color3]" required>

            <label for="bikeCollorPalletteGallery[color3Reversed]">Color 3 Reversed Image:</label>
            <input type="text" name="bikeCollorPalletteGallery[color3Reversed]" required>


            <h1 class="font-bold text-3xl my-2">Customization Colors</h1>

            <label for="customizationColors[0][colorName]">Color 1 Name:</label>
            <input type="text" name="customizationColors[0][colorName]" required>

            <label for="customizationColors[0][price]">Color 1 Price:</label>
            <input type="text" name="customizationColors[0][price]" required>

            <label for="customizationColors[0][image]">Color 1 Image:</label>
            <input type="text" name="customizationColors[0][image]" required>

            <label for="customizationColors[0][colorCode]">Color 1 Code:</label>
            <input type="text" name="customizationColors[0][colorCode]" required>


            <label for="customizationColors[1][colorName]">Color 2 Name:</label>
            <input type="text" name="customizationColors[1][colorName]" required>

            <label for="customizationColors[1][price]">Color 2 Price:</label>
            <input type="text" name="customizationColors[1][price]" required>

            <label for="customizationColors[1][image]">Color 2 Image:</label>
            <input type="text" name="customizationColors[1][image]" required>

            <label for="customizationColors[1][colorCode]">Color 2 Code:</label>
            <input type="text" name="customizationColors[1][colorCode]" required>


            <label for="customizationColors[2][colorName]">Color 3 Name:</label>
            <input type="text" name="customizationColors[2][colorName]" required>

            <label for="customizationColors[2][price]">Color 3 Price:</label>
            <input type="text" name="customizationColors[2][price]" required>

            <label for="customizationColors[2][image]">Color 3 Image:</label>
            <input type="text" name="customizationColors[2][image]" required>

            <label for="customizationColors[2][colorCode]">Color 3 Code:</label>
            <input type="text" name="customizationColors[2][colorCode]" required>


            <h1 class="font-bold text-3xl my-2">Short Spec Info</h1>

            <label for="shortSpecInfo[info1]">Short Spec Info 1:</label>
            <input type="text" name="shortSpecInfo[info1]" required>

            <label for="shortSpecInfo[info2]">Short Spec Info 2:</label>
            <input type="text" name="shortSpecInfo[info2]" required>

            <label for="shortSpecInfo[info3]">Short Spec Info 3:</label>
            <input type="text" name="shortSpecInfo[info3]" required>

            <h1 class="font-bold text-3xl my-2">Sub Family Promo</h1>


            <label for="subFamilyPromo[title]">Sub Family Promo Title:</label>
            <input type="text" name="subFamilyPromo[title]" required>

            <label for="subFamilyPromo[desc]">Sub Family Promo Description:</label>
            <input type="text" name="subFamilyPromo[desc]" required>



            <input type="submit" class="my-5 bg-lime-200 shadow rounded p-4" value="Submit">






        </form>

    </div>

</x-app-layout>
