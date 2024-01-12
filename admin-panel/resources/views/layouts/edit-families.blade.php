<x-app-layout>

    <div class="px-8 mt-10 w-8/12 ">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('update-families', $family->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')

            <label for="type">Type:</label>
            <input type="text" name="type" value="{{ old('type', $family['type']) }}" required>

            <label for="mainBikeLogoImage[url]">Main Bike Logo Image URL:</label>
            <input type="text" name="mainBikeLogoImage[url]"
                value="{{ old('mainBikeLogoImage.url', optional($family['mainBikeLogoImage'])['url']) }}">

            <label for="mainBikeLogoImage[alt]">Main Bike Logo Image Alt:</label>
            <input type="text" name="mainBikeLogoImage[alt]"
                value="{{ old('mainBikeLogoImage.alt', optional($family['mainBikeLogoImage'])['alt']) }}">

            <label for="shortDesc[0]">Short Description:</label>
            <textarea rows="8" name="shortDesc[0]" required>{{ old('shortDesc.0', $family['shortDesc'][0]) }}</textarea>

            <label for="familyPageBannerDesc[0]">Family Page Banner Description:</label>
            <textarea rows="8" name="familyPageBannerDesc[0]" required>{{ old('familyPageBannerDesc.0', $family['familyPageBannerDesc'][0]) }}</textarea>

            <label for="familyPageBannerVideo[0]">Family Page Banner Video:</label>
            <input type="text" name="familyPageBannerVideo[0]"
                value="{{ old('familyPageBannerVideo.0', $family['familyPageBannerVideo'][0]) }}" required>

            <label for="topSectionInfo[image][src]">Top Section Image Source:</label>
            <input type="text" name="topSectionInfo[image][src]"
                value="{{ old('topSectionInfo.image.src', $family['topSectionInfo']['image']['src']) }}" required>

            <label for="topSectionInfo[image][alt]">Top Section Image Alt:</label>
            <input type="text" name="topSectionInfo[image][alt]"
                value="{{ old('topSectionInfo.image.alt', $family['topSectionInfo']['image']['alt']) }}" required>

            <label for="topSectionInfo[title]">Top Section Title:</label>
            <input type="text" name="topSectionInfo[title]"
                value="{{ old('topSectionInfo.title', $family['topSectionInfo']['title']) }}" required>

            <label for="topSectionInfo[desc1]">Top Section Description 1:</label>
            <input type="text" name="topSectionInfo[desc1]"
                value="{{ old('topSectionInfo.desc1', $family['topSectionInfo']['desc1']) }}" required>

            <label for="topSectionInfo[desc2]">Top Section Description 2:</label>
            <input type="text" name="topSectionInfo[desc2]"
                value="{{ old('topSectionInfo.desc2', $family['topSectionInfo']['desc2']) }}" required>
            <!-- Repeat similar blocks for other fields in the data structure -->










            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
