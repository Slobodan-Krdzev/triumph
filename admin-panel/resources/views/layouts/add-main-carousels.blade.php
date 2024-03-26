<x-app-layout>
    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif
        <h1 class="font-bold text-4xl">Add Main Carousel</h1>

        <form action="{{ route('add-main-carousels') }}" method="POST" class="flex flex-col"  enctype="multipart/form-data">
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


            <x-form.input labelText="VideoPath:" imageId="video" name="video">
                <video id='video' muted controls autoplay width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Choose image to upload:" imageId="image"
                          name="image">
                <img id='image' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Choose image to upload: IMAGE MOBILE" imageId="imageMobile"
                          name="imageMobile">
                <img id='imageMobile' width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.text-input forId="title" placeholder="Title"
                               dataName="title" oldValue="title"/>

            <x-form.text-input forId="desc" placeholder="Description"
                               dataName="title" oldValue="title"/>

            <x-form.text-input forId="link1Url" placeholder="Link 1 URL" dataName="link1[url]" oldValue="link1.url"/>
            <x-form.text-input forId="link1Text" placeholder="Link 1 Text" dataName="link1[text]" oldValue="link1.text"/>

            <x-form.text-input forId="link2Url" placeholder="Link 2 URL" dataName="link2[url]" oldValue="link2.url"/>
            <x-form.text-input forId="link2Text" placeholder="Link 2 Text" dataName="link2[text]" oldValue="link2.text"/>


            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Add Carousel</button>
        </form>
    </div>
</x-app-layout>
