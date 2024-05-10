<x-app-layout>
    <x-header>
        Add Latest Carousel
    </x-header>
    <div class="px-8 mt-10 w-full">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <form action="{{ route('store-latest-carousel') }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
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

            <x-form.section-layout sectionId="1">

                <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title" imageDesc="images/latestCarousel/title.png"/>

                <x-form.textarea forId="desc" placeholder="Description" dataName="desc" oldValue="desc" imageDesc="images/latestCarousel/description.png"/>

                <x-form.text-input forId="url" placeholder="URL" dataName="url" oldValue="url" imageDesc="images/latestCarousel/URL.png"/>

                <x-form.input labelText="Image URL:" imageId="image" name="image" imageDesc="images/latestCarousel/image.png">
                    <img id='image' width="200" height="150" class="object-cover border m-3 border-gray-200"/>
                </x-form.input>
            </x-form.section-layout>

            <button type="submit" class="my-5 bg-blue-500 hover:bg-blue-300 shadow rounded p-4">Add Carousel</button>
        </form>
    </div>
</x-app-layout>
