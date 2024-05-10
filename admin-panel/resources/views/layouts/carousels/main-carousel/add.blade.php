<x-app-layout>
    <x-header>
        Add Main Carousel
    </x-header>
    <div class="px-8 mt-10 w-full">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('store-main-carousel') }}" method="POST" class="flex flex-col"  enctype="multipart/form-data">
            @csrf

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
            <x-form.section sectionId="1" prevSectionId="1" nextSectionId="2" :totalSections="2">
                <h1 class="font-bold text-3xl my-2">Base Info</h1>

                <x-form.text-input forId="title" placeholder="Title"
                                   dataName="title" oldValue="title" imageDesc="images/mainCarousel/title.png"/>

                <x-form.textarea forId="desc" placeholder="Description"
                                 dataName="desc" oldValue="desc" imageDesc="images/mainCarousel/description.png"/>

                <x-form.text-input forId="link1Url" placeholder="Link 1 URL" dataName="link1[url]" oldValue="link1.url" imageDesc="images/mainCarousel/link1.png"/>
                <x-form.text-input forId="link1Text" placeholder="Link 1 Text" dataName="link1[text]" oldValue="link1.text" imageDesc="images/mainCarousel/link1.png"/>

                <x-form.text-input forId="link2Url" placeholder="Link 2 URL" dataName="link2[url]" oldValue="link2.url" imageDesc="images/mainCarousel/link2.png"/>
                <x-form.text-input forId="link2Text" placeholder="Link 2 Text" dataName="link2[text]" oldValue="link2.text" imageDesc="images/mainCarousel/link2.png"/>
            </x-form.section>

            <!-- Section 2 -->
            <x-form.section sectionId="2" prevSectionId="1" nextSectionId="3" :totalSections="2">
                <h1 class="font-bold text-3xl my-2">Video and Images for Main Carousel</h1>

                <x-form.input labelText="VideoPath:" imageId="video" name="video">
                    <video id='video' muted controls autoplay width="400" height="150" class="object-cover border m-3 border-gray-200 z-0" />
                </x-form.input>

                <x-form.input labelText="Choose image to upload:" imageId="image"
                              name="image" imageDesc="images/mainCarousel/image.png">
                    <img id='image' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                </x-form.input>

                <x-form.input labelText="Choose image to upload: IMAGE MOBILE" imageId="imageMobile"
                              name="imageMobile" imageDesc="images/mainCarousel/imageMobile.png">
                    <img id='imageMobile' width="400" height="150" class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            </x-form.section>
        </form>
            <div id="sectionIndicator" class="text-right pr-10 pt-5 font-bold text-lg mb-5">
                Section <span id="currentSection">1</span> of 2
            </div>
    </div>
</x-app-layout>
