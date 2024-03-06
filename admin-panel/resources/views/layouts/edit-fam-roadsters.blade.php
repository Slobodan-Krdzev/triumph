<x-app-layout>


    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('update-fam-roadster', $famRoadsters->id) }}" method="POST" class="flex flex-col">
            @csrf
            @method('PUT')
            <h1 class="font-bold text-4xl">Family Page of <span class="capitalize text-red-500">{{$famRoadsters->type}}</span></h1>
            <hr class="my-3 w-100">

                 <h1 class="font-bold text-3xl my-2">Base Info</h1>

                <label for="type">Type:</label>
                <input type="text" id="type" name="type" value="{{ $famRoadsters['type'] }}">


                <label for="familyPageBannerDesc">Family Page Banner Description:</label>
                <textarea id="familyPageBannerDesc" name="familyPageBannerDesc">{{ $famRoadsters['familyPageBannerDesc'] }}</textarea>


                <label for="familyPageBannerVideo">Family Page Banner Video:</label>
                <input type="text" id="familyPageBannerVideo" name="familyPageBannerVideo" value="{{ $famRoadsters['familyPageBannerVideo'] }}">

                <x-form.input labelText="Family Page Banner Video:" imageId="familyPageBannerVideo"
                name="familyPageBannerVideo">
                <video src="/storage/{{$famRoadsters['familyPageBannerVideo'] }}" muted controls autoplay
                    id='familyPageBannerVideo' width="400" height="350"
                    class="object-cover border m-3 border-gray-200">
            </x-form.input>


                <label for="configPageDesc">Config Page Description:</label>
                <textarea id="configPageDesc" name="configPageDesc">{{ $famRoadsters['configPageInfo']['desc'] }}</textarea>


                <label for="configPageLink">Config Page Link:</label>
                <input type="text" id="configPageLink" name="configPageLink" value="{{ $famRoadsters['configPageInfo']['link'] }}">

                <h1 class="font-bold text-3xl my-2">Config Family Page Info</h1>


                <label for="configFamilyPageImageSrc">Config Family Page Image Source:</label>
                <input type="text" id="configFamilyPageImageSrc" name="configFamilyPageImageSrc" value="{{ $famRoadsters['configFamilyPageInfo']['image']['src'] }}">

                <x-form.input labelText="Config Family Page Image:" imageId="configFamilyPageImageSrc"
                name="configFamilyPageImageSrc">
                <img id='configFamilyPageImageSrc'
                    src="/storage/{{ $famRoadsters['configFamilyPageInfo']['image']['src']  }}" width="200"
                    height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>


                <label for="configFamilyPageImageAlt">Config Family Page Image Alt:</label>
                <input type="text" id="configFamilyPageImageAlt" name="configFamilyPageImageAlt" value="{{ $famRoadsters['configFamilyPageInfo']['image']['alt'] }}">

                <h1 class="font-bold text-3xl my-2">Audio Section</h1>

                {{-- AUDIO SECTION TRY --}}
                  <x-form.input  labelText="Choose Audio" imageId="audioSectionAudio"
                  name="audioSectionAudio">
                  <audio controls autoplay muted>
                    <source src="/storage/{{ $famRoadsters['audioSection']['audio'] }}" type="audio/ogg">
                  </audio>
              </x-form.input>


                <label for="audioSectionTitle">Audio Section Title:</label>
                <input type="text" id="audioSectionTitle" name="audioSectionTitle" value="{{ $famRoadsters['audioSection']['title'] }}">


                <label for="audioSectionDesc">Audio Section Description:</label>
                <textarea id="audioSectionDesc" name="audioSectionDesc">{{ $famRoadsters['audioSection']['desc'] }}</textarea>


                <label for="audioSectionLogo">Audio Section Logo:</label>
                <input type="text" id="audioSectionLogo" name="audioSectionLogo" value="{{ $famRoadsters['audioSection']['logo'] }}">

                <x-form.input labelText="Config Family Page Image:" imageId="audioSectionLogo"
                name="audioSectionLogo">
                <img id='audioSectionLogo'
                    src="/storage{{$famRoadsters['audioSection']['logo']}}" width="400"
                    height="350" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

                <h1 class="font-bold text-3xl my-2">Promo Info For Family Page</h1>
                <button data-modal-target="authentication-modal" data-modal-toggle="authentication-modal"
                    class="block text-white my-2 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">
                    <a href="{{ route('add-promo-roadsters') }}">Add Promo</a>
                </button>



                @foreach ($promos as $promo)
                    @foreach ($promo->promo_data as $data)
                        <div class="border-2 border-neutral-500 flex justify-between items-center p-2">
                            <h2>{{ $data['title'] }}</h2>
                            <div class="flex justify-between items-center">
                                <a href="{{ route('edit-promo-roadsters', ['id' => $promo->id]) }}"
                                    class="bg-yellow-300 p-1 mr-3 rounded">Edit</a>
                                <a href="{{ route('promo-delete', ['id' => $promo->id]) }}"
                                    class="bg-red-500 p-1 rounded text-white"
                                    onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this item?')) document.getElementById('delete-form-{{ $promo->id }}').submit();">Delete</a>
                                <form id="delete-form-{{ $promo->id }}"
                                    action="{{ route('promo-roadsters-delete', ['id' => $promo->id]) }}" method="POST"
                                    style="display: none;">
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
