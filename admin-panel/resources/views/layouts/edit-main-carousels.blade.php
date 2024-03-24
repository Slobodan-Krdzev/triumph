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

        <form action="{{ route('update-main-carousell', $mainCarousels->id) }}" method="POST" class="flex flex-col" enctype="multipart/form-data">
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



            <x-form.input labelText="Profile image to edit:" imageId="image" name="image">
                <img id="image" src="{{ $mainCarousels->image }}" width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>



            <x-form.input labelText="Video to edit:" imageId="video" name="video">
                <video id='video' src="{{ $mainCarousels->video }}" muted controls autoplay width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>

            <x-form.input labelText="Mobile image to edit:" imageId="imageMobile"
                          name="imageMobile">
                <img id='imageMobile' src="{{ $mainCarousels->imageMobile }}" width="400" height="150" class="object-cover border m-3 border-gray-200" />
            </x-form.input>




            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title', $mainCarousels->title) }}">


            <label for="desc">Description:</label>
            <textarea name="desc" id="desc">{{  $mainCarousels->desc }}</textarea>


            <label for="link1[url]">Link 1 URL:</label>
            <input type="text" name="link1[url]" id="link1[url]"
                value="{{  $mainCarousels->link1['url'] }}">


            <label for="link1[text]">Link 1 Text:</label>
            <input type="text" name="link1[text]" id="link1[text]"
                value="{{  $mainCarousels->link1['text'] }}">


            <label for="link2[url]">Link 2 URL:</label>
            <input type="text" name="link2[url]" id="link2[url]"
                value="{{  $mainCarousels->link2['url'] }}">


            <label for="link2[text]">Link 2 Text:</label>
            <input type="text" name="link2[text]" id="link2[text]"
                value="{{ $mainCarousels->link2['text'] }}">


            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
