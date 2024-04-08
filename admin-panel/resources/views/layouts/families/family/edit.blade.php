<x-app-layout>


    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                 role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                 role="alert">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{ route('update-family', $family->id) }}" method="POST" class="flex flex-col"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <h1 class="font-bold text-4xl">Family Page of <span
                    class="capitalize text-red-500">{{ $family->type }}</span></h1>
            <hr class="my-3 w-100">
            <h1 class="font-bold text-3xl my-2">Base Info</h1>

            <x-form.text-input forId="type" placeholder="Type" dataName="type" oldValue="type"
                               dataValue="{{ $family->type }}"/>

            <x-form.input labelText="Main Bike Logo Image URL:" imageId="mainBikeLogoImage"
                          name="mainBikeLogoImage[url]">
                <img id='mainBikeLogoImage' src="{{ $family['mainBikeLogoImage']['url'] ?? ''}}" width="200"
                     height="150" class="object-cover border m-3 border-gray-200"/>
            </x-form.input>

            <x-form.text-input forId="mainBikeLogoImageALt" placeholder="Main Bike Logo Image Alt"
                               dataName="mainBikeLogoImage[alt]" oldValue="mainBikeLogoImage.alt"
                               dataValue="{{ $family->mainBikeLogoImage['alt'] ?? '' }}"/>

            <x-form.textarea forId="familyPageBannerDesc" placeholder="Family Page Banner Desc"
                             dataName="familyPageBannerDesc" oldValue="familyPageBannerDesc"
                             dataValue="{{ $family->familyPageBannerDesc ?? ''}}"/>

            <x-form.input labelText="Family Page Banner Video:" imageId="familyPageBannerVideo"
                          name="familyPageBannerVideo">
                <video src="{{ $family->familyPageBannerVideo }}" muted controls autoplay
                       id='familyPageBannerVideo' width="200" height="150"
                       class="object-cover border m-3 border-gray-200"/>
            </x-form.input>

            <x-form.textarea forId="configPageInfoDesc" placeholder="Config Page Info Description"
                             dataName="configPageInfo[desc]" oldValue="configPageInfo.desc"
                             dataValue="{{ $family->configPageInfo['desc'] ?? ''}}"/>

            <x-form.text-input forId="configPageInfoLink" placeholder="Config Page Info Link"
                               dataName="configPageInfo[link]" oldValue="configPageInfo.link"
                               dataValue="{{ $family->configPageInfo['link'] ?? ''}}"/>


            <x-form.input labelText="Config Family Page Info:" imageId="configFamilyPageInfoImageSrc"
                          name="configFamilyPageInfo[image][src]">
                <img id='configFamilyPageInfoImageSrc' src="{{ $family->configFamilyPageInfo['image']['src'] ?? '' }}"
                     width="200"
                     height="150" class="object-cover border m-3 border-gray-200"/>
            </x-form.input>

            <x-form.text-input forId="configFamilyPageInfoImageAlt" placeholder="Config Family Page Info Image Alt"
                               dataName="configFamilyPageInfo[image][alt]" oldValue="configFamilyPageInfo.image.alt"
                               dataValue="{{ $family->configFamilyPageInfo['image']['alt'] ?? ''}}"/>

            <x-form.text-input forId="configFamilyPageInfoTitle" placeholder="Config Family Page Info Title"
                               dataName="configFamilyPageInfo[title]" oldValue="configFamilyPageInfo.title"
                               dataValue="{{ $family->configFamilyPageInfo['title'] ?? ''}}"/>

            <x-form.text-input forId="configFamilyPageInfoLink" placeholder="Config Family Page Info Link"
                               dataName="configFamilyPageInfo[link]" oldValue="configFamilyPageInfo.link"
                               dataValue="{{ $family->configFamilyPageInfo['link'] ?? ''}}"/>

            <x-form.text-input forId="youtubeVideo" placeholder="YouTube Video Link" dataName="youtubeVideo"
                               oldValue="youtubeVideo" dataValue="{{ $family->youtubeVideo ?? ''}}"/>

            <section class="my-7 font-bold text-red-600">
                <x-form.input labelText="Choose Audio" imageId="audioSection_audio"
                              name="audioSection[audio]"
                              value="{{ old('audioSection.audio') }}">
                    <audio id="audioSection_audio" src="{{ $family->audioSection['audio'] ?? '' }}" controls autoplay
                           muted type="audio/ogg">
                    </audio>
                </x-form.input>
            </section>

            <x-form.text-input forId="audioSection_title" placeholder="Audio Section Title"
                               dataName="audioSection[title]" oldValue="audioSection.title"
                               dataValue="{{ $family->audioSection['title'] ?? ''}}"/>

            <x-form.textarea forId="audioSection_desc" placeholder="Audio Section Description"
                             dataName="audioSection[desc]" oldValue="audioSection.desc"
                             dataValue="{{ $family->audioSection['desc'] ?? ''}}"/>

            <x-form.input labelText="Audio Section Logo" imageId="audioSection_logo"
                          name="audioSection[logo]">
                <img id='audioSection_logo' src="{{ $family->audioSection['logo'] ?? '' }}" width="200"
                     height="150" class="object-cover border m-3 border-gray-200"/>
            </x-form.input>

            <x-form.dynamic-text-inputs header="Gray Carousel" divId="grayCarousellFields"
                                        dataId1="grayCarousell_title" dataLabel1="title" dataName="grayCaro"
                                        dataId2="grayCarousell_desc" dataLabel2="desc" imgLabel="Image"
                                        :databaseData="$family->grayCaro"
                                        fieldClass="add-two-fields-and-img"/>



            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update Family</button>
        </form>
            <h1 class="font-bold text-3xl my-2">Promo Info For Family Page</h1>
            <a href="{{ route('create-promo', ['family' => $family->type]) }}"
               class="block text-white my-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Add Promo
            </a>
            <div class="pb-12">
                @foreach ($promos as $promo)
                    <div class="border-2 border-neutral-500 flex justify-between items-center p-2">
                        <h2>{{ $promo['title'] }}</h2>
                        <div class="flex justify-between items-center">
                            <a href="{{ route('edit-promo', ['id' => $promo->id]) }}"
                               class="bg-yellow-300 p-1 mr-3 rounded">Edit</a>
                            <a href="#" class="bg-red-500 p-1 rounded text-white"
                               onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) document.getElementById('delete-form-{{ $promo->id }}').submit();">Delete</a>
                            <form id="delete-form-{{ $promo->id }}"
                                  action="{{ route('delete-promo', ['id' => $promo->id]) }}" method="POST"
                                  style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
    </div>

</x-app-layout>
