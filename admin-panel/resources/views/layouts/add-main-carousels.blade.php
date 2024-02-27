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


            <label for="video">Video Path</label>
            <input class="" type="file" name="video">



            <label class="mt-5" for="image">Choose image to upload:</label>
            <input class="mb-5" type="file" name="image">

            <label class="mt-5" for="image">Choose image to upload: IMAGE MOBILE</label>
            <input class="mb-5" type="file" name="imageMobile">

            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" >

            <label for="desc">Description</label>
            <textarea name="desc" id="desc" >{{ old('desc') }}</textarea>

            <label for="link1[url]">Link 1 URL</label>
            <input type="text" name="link1[url]" id="link1[url]" value="{{ old('link1.url') }}" >

            <label for="link1[text]">Link 1 Text</label>
            <input type="text" name="link1[text]" id="link1[text]" value="{{ old('link1.text') }}" >

            <label for="link2[url]">Link 2 URL</label>
            <input type="text" name="link2[url]" id="link2[url]" value="{{ old('link2.url') }}" >

            <label for="link2[text]">Link 2 Text</label>
            <input type="text" name="link2[text]" id="link2[text]" value="{{ old('link2.text') }}" >



            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Add Carousel</button>
        </form>
    </div>
</x-app-layout>