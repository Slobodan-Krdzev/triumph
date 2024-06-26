<x-app-layout>


    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('update-families', $family->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')
            <h1 class="font-bold text-4xl">Family Page</h1>
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
            {{-- ------------------------------------------------------------------- --}}
            {{-- <h1 class="font-bold text-3xl my-2">Promo Info For Family Page</h1>
            <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                class="block text-white my-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                type="button">
                Add Promo
            </button> --}}
{{--
                <div class="border-2 border-neutral-500 flex justify-between items-center p-2">

                    <div class="flex justify-between items-center">
                        <button data-modal-target="authentication-modal" data-modal-toggle="edit-modal"
                            class="mx-2 bg-yellow-400 p-1 rounded text-white">Edit</button>
                        <button class="bg-red-500 p-1 rounded text-white">Delete</button>
                    </div>
                </div> --}}








            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modalButton = document.querySelector('[data-modal-toggle="authentication-modal"]');
            const modal = document.getElementById('authentication-modal');
            const closeButton = modal.querySelector('[data-modal-hide="authentication-modal"]');

            modalButton.addEventListener('click', function() {
                modal.classList.toggle('hidden');
                document.body.classList.toggle('overflow-hidden');
            });

            closeButton.addEventListener('click', function() {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        });


        document.addEventListener('DOMContentLoaded', function() {
            const modalButton = document.querySelector('[data-modal-toggle="edit-modal"]');
            const modal = document.getElementById('edit-modal');
            const closeButton = modal.querySelector('[data-modal-hide="authentication-modal"]');

            modalButton.addEventListener('click', function() {
                modal.classList.toggle('hidden');
                document.body.classList.toggle('overflow-hidden');
            });

            closeButton.addEventListener('click', function() {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
            });
        });
    </script>

</x-app-layout>
