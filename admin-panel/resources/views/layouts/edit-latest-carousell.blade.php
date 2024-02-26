<x-app-layout>

    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                <div class="mb-5">
                    <a href="{{route('view-carousels')}}" class="text-blue-500">Go Back</a>
                </div>
                {{ session('success') }}
            </div>
        @endif
        <h1 class="font-bold text-4xl">You are editing carousell:<span
                class="uppercase text-red-500">{{ $latestCarousels->title }}</span></h1>

        <form action="{{ route('update-carousell', $latestCarousels->id) }}" method="POST" class="flex flex-col">
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

            <label for="title">Title</label>
            <input type="text" name="title" id="title" value="{{ old('title', $latestCarousels->title) }}">

            <label for="desc">Description</label>
            <textarea name="desc" id="desc">{{ old('desc', $latestCarousels->desc) }}</textarea>

            <label for="url">URL</label>
            <input type="text" name="url" id="url" value="{{ old('url', $latestCarousels->url) }}">

            <label for="image">Image Path</label>
            <input type="text" name="image" id="image" value="{{ old('image', $latestCarousels->image) }}">


            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
