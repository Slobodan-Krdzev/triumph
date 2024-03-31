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

        <form action="{{ route('update-latest-carousel', $latestCarousels->id) }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
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


            <x-form.text-input forId="title" placeholder="Title" dataName="title" oldValue="title" dataValue="{{ $latestCarousels->title }}"/>

            <x-form.textarea forId="desc" placeholder="Description" dataName="desc" oldValue="desc" dataValue="{{ $latestCarousels->desc }}"/>

            <x-form.text-input forId="url" placeholder="URL" dataName="url" oldValue="url" dataValue="{{ $latestCarousels->url }}"/>

            <x-form.input labelText="Image URL:" imageId="image" name="image">
                <img id='image' src="{{ $latestCarousels->image }}" width="200" height="150" class="object-cover border m-3 border-gray-200"/>
            </x-form.input>


            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
