<x-app-layout>


    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('update-fam-rocket-3', $famRocket3->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')
            <h1 class="font-bold text-4xl">Family Page of <span
                    class="capitalize text-red-500">{{ $famRocket3->type }}</span></h1>
            <hr class="my-3 w-100">

            <h1 class="font-bold text-3xl my-2">Base Info</h1>

            <label for="type">Type:</label>
            <input type="text" id="type" name="type" value="{{ $famRocket3['type'] }}">

            @if (isset($famRocket3->familyPageBannerDesc))
                <label for="familyPageBannerDesc">Family Page Banner Description:</label>
                <textarea id="familyPageBannerDesc" name="familyPageBannerDesc">{{ $famRocket3['familyPageBannerDesc'] }}</textarea>
            @endif

            @if (isset($famRocket3->familyPageBannerVideo))
                <label for="familyPageBannerVideo">Family Page Banner Video:</label>
                <input type="text" id="familyPageBannerVideo" name="familyPageBannerVideo"
                    value="{{ $famRocket3['familyPageBannerVideo'] }}">
            @endif

            <label for="configPageDesc">Config Page Description:</label>
            <textarea id="configPageDesc" name="configPageDesc">{{ $famRocket3['configPageInfo']['desc'] }}</textarea>


            <label for="configPageLink">Config Page Link:</label>
            <input type="text" id="configPageLink" name="configPageLink"
                value="{{ $famRocket3['configPageInfo']['link'] }}">

            <h1 class="font-bold text-3xl my-2">Config Family Page Info</h1>




            <x-form.input labelText="Config Family Page Image:" imageId="configFamilyPageImageSrc"
                name="gallery[subFamilyTopSectionImage][src]">
                <img id='configFamilyPageImageSrc' src="/storage/{{ $famRocket3['configFamilyPageInfo']['image']['src']}}" width="200"
                    height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>


            <label for="configFamilyPageImageAlt">Config Family Page Image Alt:</label>
            <input type="text" id="configFamilyPageImageAlt" name="configFamilyPageImageAlt"
                value="{{ $famRocket3['configFamilyPageInfo']['image']['alt'] }}">



            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>


</x-app-layout>
