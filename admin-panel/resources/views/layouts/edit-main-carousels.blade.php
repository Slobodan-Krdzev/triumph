<x-app-layout>

    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <div class="mb-5">
                    <a href="{{ route('view-carousels') }}" class="text-blue-500">Go Back</a>
                </div>
                {{ session('success') }}
            </div>
        @endif
        <h1 class="font-bold text-4xl">You are editing carousell:<span
                class="uppercase text-red-500">{{ $mainCarousels->title }}</span></h1>

        <form action="{{ route('update-carousell', $mainCarousels->id) }}" method="POST" class="flex flex-col">
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



            <!-- Image Preview -->
            @if ($mainCarousels->image)

                <div>
                    <img src="{{ $mainCarousels->image }}" alt="Profile Image"
                        style="max-width: 200px; max-height: 200px;">
                </div>
            @endif

            <div>
                <label for="image">Profile Image</label>
                <input type="file" name="image" id="image">
            </div>


            <!-- Video Preview -->
            @if ($mainCarousels->video)

                <div>
                    <video src="{{$mainCarousels->video}}" loop class="w-6/12"></video>
                </div>
            @endif

            <div>
                <label for="image">Video</label>
                <input type="file" name="video" id="image">
            </div>


            <label for="image">Image Mobile:</label>
            <div>
                <img src="{{ $mainCarousels->imageMobile }}" alt="Video"
                    style="max-width: 200px; max-height: 200px;">
            </div>




            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $mainCarousels->title) }}">


            <label for="desc">Description:</label>
            <textarea name="desc" id="desc">{{ old('desc', $mainCarousels->desc) }}</textarea>


            <label for="link1[url]">Link 1 URL:</label>
            <input type="text" name="link1[url]" id="link1[url]"
                value="{{ old('link1.url', $mainCarousels->link1['url']) }}">


            <label for="link1[text]">Link 1 Text:</label>
            <input type="text" name="link1[text]" id="link1[text]"
                value="{{ old('link1.text', $mainCarousels->link1['text']) }}">


            <label for="link2[url]">Link 2 URL:</label>
            <input type="text" name="link2[url]" id="link2[url]"
                value="{{ old('link2.url', data_get($mainCarousels, 'link2.url', '')) }}">


            <label for="link2[text]">Link 2 Text:</label>
            <input type="text" name="link2[text]" id="link2[text]"
                value="{{ old('link2.text', data_get($mainCarousels, 'link2.text', '')) }}">


            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
