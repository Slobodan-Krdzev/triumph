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
            {{-- Title --}}
            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ old('title', $moto['title'] ?? '') }}" required>

            {{-- Model --}}
            <label for="model">Model:</label>
            <input type="text" name="model" value="{{ old('model', $moto['model'] ?? '') }}" required>

            {{-- Category --}}
            <label for="category">Category:</label>
            <input type="text" name="category" value="{{ old('category', $moto['category'] ?? '') }}" required>

            {{-- Sub Family Category --}}
            <label for="subFamilyCategory">Sub Family Category:</label>
            <input type="text" name="subFamilyCategory"
                value="{{ old('subFamilyCategory', $moto['subFamilyCategory'] ?? '') }}" required>

            {{-- Edition --}}
            <label for="edition">Edition:</label>
            <input type="text" name="edition" value="{{ old('edition', $moto['edition'] ?? '') }}" required>

            {{-- Price --}}
            <label for="price">Price:</label>
            <input type="number" step="0.01" name="price" value="{{ old('price', $moto['price'] ?? '') }}"
                required>

            {{-- Specs --}}
            @foreach ($moto['specs'] ?? [] as $specKey => $specValue)
                <label for="specs[{{ $specKey }}]">{{ ucfirst($specKey) }}:</label>
                <input type="text" name="specs[{{ $specKey }}]"
                    value="{{ old('specs.' . $specKey, $specValue ?? '') }}" required>
            @endforeach

            {{-- Gallery --}}
            @foreach ($moto['gallery'] ?? [] as $galleryKey => $galleryItem)
                <label for="gallery[{{ $galleryKey }}][src]">{{ ucfirst($galleryKey) }} Source:</label>
                <input type="text" name="gallery[{{ $galleryKey }}][src]"
                    value="{{ old('gallery.' . $galleryKey . '.src', $galleryItem['src'] ?? '') }}" required>

                <label for="gallery[{{ $galleryKey }}][alt]">{{ ucfirst($galleryKey) }} Alt Text:</label>
                <input type="text" name="gallery[{{ $galleryKey }}][alt]"
                    value="{{ old('gallery.' . $galleryKey . '.alt', $galleryItem['alt'] ?? '') }}" required>
            @endforeach

            {{-- Bike Color Pallette Gallery --}}
            @foreach ($moto['bikeCollorPalletteGallery'] ?? [] as $colorKey => $colorValue)
                <label for="bikeCollorPalletteGallery[{{ $colorKey }}]">{{ ucfirst($colorKey) }}:</label>
                <input type="text" name="bikeCollorPalletteGallery[{{ $colorKey }}]"
                    value="{{ old('bikeCollorPalletteGallery.' . $colorKey, $colorValue ?? '') }}" required>
            @endforeach

            {{-- Customization Colors --}}
            @foreach ($moto['customizationColors'] ?? [] as $index => $customColor)
                <label for="customizationColors[{{ $index }}][colorName]">Custom Color Name:</label>
                <input type="text" name="customizationColors[{{ $index }}][colorName]"
                    value="{{ old('customizationColors.' . $index . '.colorName', $customColor['colorName'] ?? '') }}"
                    required>

                <label for="customizationColors[{{ $index }}][price]">Custom Color Price:</label>
                <input type="number" step="0.01" name="customizationColors[{{ $index }}][price]"
                    value="{{ old('customizationColors.' . $index . '.price', $customColor['price'] ?? '') }}">

                <label for="customizationColors[{{ $index }}][image]">Custom Color Image:</label>
                <input type="text" name="customizationColors[{{ $index }}][image]"
                    value="{{ old('customizationColors.' . $index . '.image', $customColor['image'] ?? '') }}"
                    required>

                <label for="customizationColors[{{ $index }}][colorCode]">Custom Color Code:</label>
                <input type="text" name="customizationColors[{{ $index }}][colorCode]"
                    value="{{ old('customizationColors.' . $index . '.colorCode', $customColor['colorCode'] ?? '') }}"
                    required>
            @endforeach

            {{-- Short Spec Info --}}
            @foreach ($moto['shortSpecInfo'] ?? [] as $infoKey => $infoValue)
                <label for="shortSpecInfo[{{ $infoKey }}]">Short Spec {{ ucfirst($infoKey) }}:</label>
                <input type="text" name="shortSpecInfo[{{ $infoKey }}]"
                    value="{{ old('shortSpecInfo.' . $infoKey, $infoValue ?? '') }}" required>
            @endforeach

            {{-- Sub Family Promo --}}
            <label for="subFamilyPromo[title]">Sub Family Promo Title:</label>
            <input type="text" name="subFamilyPromo[title]"
                value="{{ old('subFamilyPromo.title', $moto['subFamilyPromo']['title'] ?? '') }}" required>

            <label for="subFamilyPromo[desc]">Sub Family Promo Description:</label>
            <input type="text" name="subFamilyPromo[desc]"
                value="{{ old('subFamilyPromo.desc', $moto['subFamilyPromo']['desc'] ?? '') }}" required>

            {{-- Bike Page Info --}}
                <label for="bikePageInfo[topDesc][desc1]">Description 1:</label>
                <textarea name="bikePageInfo[topDesc][desc1]" required>{{ old('bikePageInfo.topDesc.desc1', $moto->bikePageInfo['topDesc']['desc1'] ?? '') }}</textarea>

                <label for="bikePageInfo[topDesc][desc2]">Description 2:</label>
                <textarea name="bikePageInfo[topDesc][desc2]" required>{{ old('bikePageInfo.topDesc.desc2', $moto->bikePageInfo['topDesc']['desc2'] ?? '') }}</textarea>

                <label for="bikePageInfo[topDesc][desc3]">Description 3:</label>
                <textarea name="bikePageInfo[topDesc][desc3]" required>{{ old('bikePageInfo.topDesc.desc3', $moto->bikePageInfo['topDesc']['desc3'] ?? '') }}</textarea>

                <label for="bikePageInfo[topDesc][desc4]">Description 4:</label>
                <textarea name="bikePageInfo[topDesc][desc4]" required>{{ old('bikePageInfo.topDesc.desc4', $moto->bikePageInfo['topDesc']['desc4'] ?? '') }}</textarea>



            @foreach ($moto->features as $index => $feature)
                <label for="features[{{ $index }}][title]">Title:</label>
                <input type="text" name="features[{{ $index }}][title]"
                    value="{{ old('features.' . $index . '.title', $feature['title'] ?? '') }}" required>

                <label for="features[{{ $index }}][desc]">Description:</label>
                <textarea name="features[{{ $index }}][desc]" required>{{ old('features.' . $index . '.desc', $feature['desc'] ?? '') }}</textarea>
            @endforeach




            @foreach ($moto->bikePageCarousell as $index => $carousel)
                    <label for="bikePageCarousell[{{ $index }}][title]">Title:</label>
                    <input type="text" name="bikePageCarousell[{{ $index }}][title]"
                        value="{{ old('bikePageCarousell.' . $index . '.title', $carousel['title'] ?? '') }}" required>

                    <label for="bikePageCarousell[{{ $index }}][desc]">Description:</label>
                    <textarea name="bikePageCarousell[{{ $index }}][desc]" required>{{ old('bikePageCarousell.' . $index . '.desc', $carousel['desc'] ?? '') }}</textarea>

                    <label for="bikePageCarousell[{{ $index }}][image]">Image Path:</label>
                    <input type="text" name="bikePageCarousell[{{ $index }}][image]"
                        value="{{ old('bikePageCarousell.' . $index . '.image', $carousel['image'] ?? '') }}" required>
            @endforeach



            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
