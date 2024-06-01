<x-app-layout>
    <x-header>
        Edit of <span class="text-red-500 uppercase">{{ $mainCarousels->title }}</span> Main Carousel
    </x-header>
    <div class="px-8 mt-10 w-full">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                 role="alert">
                <div class="mb-5">
                    <a href="{{ route('view-carousels') }}" class="text-blue-500">Go Back</a>
                </div>
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('update-main-carousel', $mainCarousels->id) }}" method="POST" class="flex flex-col"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')

            @if ($errors->any())
                <div class="text-red-500">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Section 1 -->
            <x-form.section-layout sectionId="1">
                <h1 class="font-bold text-3xl my-2">Base Info</h1>

                <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title"
                                   dataValue="{{ $mainCarousels->title ?? '' }}"
                                   imageDesc="images/mainCarousel/title.png"/>

                <x-form.textarea forId="desc" placeholder="Description" dataName="desc" oldValue="desc"
                                 dataValue="{{ $mainCarousels->desc ?? '' }}"
                                 imageDesc="images/mainCarousel/description.png"/>

                <x-form.text-input forId="link1Url" placeholder="Link 1 URL" dataName="link1[url]" oldValue="link1.url"
                                   dataValue="{{ $mainCarousels->link1['url'] ?? '' }}"
                                   imageDesc="images/mainCarousel/link1.png"/>
                <x-form.text-input forId="link1Text" placeholder="Link 1 Text" dataName="link1[text]"
                                   oldValue="link1.text" dataValue="{{ $mainCarousels->link1['text'] ?? '' }}"
                                   imageDesc="images/mainCarousel/link1.png"/>

                <x-form.text-input forId="link2Url" placeholder="Link 2 URL" dataName="link2[url]" oldValue="link2.url"
                                   dataValue="{{ $mainCarousels->link2['url'] ?? '' }}"
                                   imageDesc="images/mainCarousel/link2.png"/>
                <x-form.text-input forId="link2Text" placeholder="Link 2 Text" dataName="link2[text]"
                                   oldValue="link2.text" dataValue="{{ $mainCarousels->link2['text'] ?? '' }}"
                                   imageDesc="images/mainCarousel/link2.png"/>
            </x-form.section-layout>

            <!-- Section 1 -->
            <x-form.section-layout sectionId="1">
                <h1 class="font-bold text-3xl my-2">Video and Images for Main Carousel</h1>

                <x-form.input labelText="Video to edit:" imageId="video" name="video" imageDesc="images/mainCarousel/image.png">
                    <video id='video' src="{{ $mainCarousels->video }}" muted controls autoplay width="400" height="150"
                           class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.input labelText="Video Poster to edit:" imageId="videoPoster" name="videoPoster"
                              imageDesc="images/mainCarousel/image.png">
                    <img id="videoPoster" src="{{ $mainCarousels->videoPoster }}" width="400" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>

                <x-form.input labelText="Profile image to edit:" imageId="image" name="image"
                              imageDesc="images/mainCarousel/image.png">
                    <img id="image" src="{{ $mainCarousels->image }}" width="400" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>


                <x-form.input labelText="Mobile image to edit:" imageId="imageMobile"
                              name="imageMobile" imageDesc="images/mainCarousel/imageMobile.png">
                    <img id='imageMobile' src="{{ $mainCarousels->imageMobile }}" width="400" height="150"
                         class="object-cover border m-3 border-gray-200"/>
                </x-form.input>
            </x-form.section-layout>

            <button type="submit" class="w-full my-5 bg-yellow-300 hover:bg-yellow-200 shadow rounded p-4">Update
            </button>
        </form>
    </div>
</x-app-layout>
