<x-app-layout>


    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('update-fam-adventure', $family->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')
            <h1 class="font-bold text-4xl">Family Page <span class="text-red-600">Adventure</span></h1>
            <hr class="my-3 w-100">
            {{-- ------------------------------------------------------------------- --}}
            <h1 class="font-bold text-3xl my-2">Base Info</h1>
            <label for="type">Type:</label>
            <input type="text" name="type" value="{{ old('type', $family['type']) }}" required>

            <label for="mainBikeLogoImage[url]">Main Bike Logo Image URL:</label>
            <input type="text" name="mainBikeLogoImage[url]"
                value="{{ old('mainBikeLogoImage.url', optional($family['mainBikeLogoImage'])['url']) }}">

            <label for="mainBikeLogoImage[alt]">Main Bike Logo Image Alt:</label>
            <input type="text" name="mainBikeLogoImage[alt]"
                value="{{ old('mainBikeLogoImage.alt', optional($family['mainBikeLogoImage'])['alt']) }}">

            <label for="familyPageBannerDesc[0]">Family Page Banner Description:</label>
            <textarea rows="8" name="familyPageBannerDesc" required>{{ old('familyPageBannerDesc', $family['familyPageBannerDesc'] ?? '') }}</textarea>

            <label for="familyPageBannerVideo[0]">Family Page Banner Video:</label>
            <input type="text" name="familyPageBannerVideo"
                value="{{ old('familyPageBannerVideo', $family['familyPageBannerVideo'] ?? '') }}" required>

            {{-- ------------------------------------------------------------------- --}}
            <h1 class="font-bold text-3xl my-2">Top Section Info</h1>
            <label for="topSectionInfo[image][src]">Top Section Image Source:</label>
            <input type="text" name="topSectionInfo[image][src]"
                value="{{ old('topSectionInfo.image.src', $family['topSectionInfo']['image']['src'] ?? '') }}" required>

            <label for="topSectionInfo[image][alt]">Top Section Image Alt:</label>
            <input type="text" name="topSectionInfo[image][alt]"
                value="{{ old('topSectionInfo.image.alt', $family['topSectionInfo']['image']['alt'] ?? '') }}" required>

            <label for="topSectionInfo[title]">Top Section Title:</label>
            <input type="text" name="topSectionInfo[title]"
                value="{{ old('topSectionInfo.title', $family['topSectionInfo']['title'] ?? '') }}" required>

            <label for="topSectionInfo[desc1]">Top Section Description 1:</label>
            <input type="text" name="topSectionInfo[desc1]"
                value="{{ old('topSectionInfo.desc1', $family['topSectionInfo']['desc1'] ?? '') }}" required>

            <label for="topSectionInfo[desc2]">Top Section Description 2:</label>
            <input type="text" name="topSectionInfo[desc2]"
                value="{{ old('topSectionInfo.desc2', $family['topSectionInfo']['desc2'] ?? '') }}" required>

            <h1 class="font-bold text-3xl my-2">Promo Info For Family Page</h1>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-white my-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                <a href="{{route('add-promo')}}">Add Promo</a>
            </button>



            @foreach ($promos as $promo)
            @foreach ($promo->promo_data as $data)
                <div class="border-2 border-neutral-500 flex justify-between items-center p-2">
                    <h2>{{ $data['title'] }}</h2>
                    <div class="flex justify-between items-center">
                        <a href="{{ route('edit-promo', ['id' => $promo->id]) }}" class="bg-yellow-300 p-1 mr-3 rounded">Edit</a>
                        <!-- Updated delete link below -->
                        <a href="{{ route('promo-delete', ['id' => $promo->id]) }}" class="bg-red-500 p-1 rounded text-white" onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) document.getElementById('delete-form-{{ $promo->id }}').submit();">Delete</a>

                        <!-- Delete form -->
                        <form id="delete-form-{{ $promo->id }}" action="{{ route('promo-delete', ['id' => $promo->id]) }}" method="POST" style="display: none;">
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
