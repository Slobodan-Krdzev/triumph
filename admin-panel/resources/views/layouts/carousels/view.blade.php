<x-app-layout>
    <div class="p-20 mb-10">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                 role="alert">
                {{ session('success') }}
            </div>
        @endif
        @if (session('error'))
            <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400"
                 role="alert">
                {{ session('error') }}
            </div>
        @endif
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200">
                        Latest Carousels
                    </th>
                    <th scope="col" class="">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($latestCarousels as $caro)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row"
                            class="px-6 uppercase  py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $caro->title }}
                        </td>
                        <td class="pr-12 py-4 text-right">
                            <a href="{{ route('edit-latest-carousel', ['id' => $caro->id]) }}"
                               class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-4"
                               onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this Latest Carousel Item?')) document.getElementById('delete-latest-carousel-{{ $caro->id }}').submit();">Delete</a>
                            <form id="delete-latest-carousel-{{ $caro->id }}"
                                  action="{{ route('delete-latest-carousel', ['id' => $caro->id]) }}" method="POST"
                                  style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <button><a href="{{ route('create-latest-carousel') }}"
                           class="w-full bg-lime-200 shadow rounded p-4 block">Add Latest Carousel</a></button>
            </table>
        </div>


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3 border-b border-gray-200">
                        Main Carousels
                    </th>


                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach ($mainCarousels as $caro)
                    <tr
                        class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td scope="row"
                            class="px-6 uppercase  py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $caro->title }}
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="{{ route('edit-main-carousel', ['id' => $caro->id]) }}"
                               class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            <a href="#" class="font-medium text-red-600 dark:text-red-500 hover:underline ml-4"
                               onclick="event.preventDefault(); if(confirm('Are you sure you want to delete this Main Carousel Item?')) document.getElementById('delete-main-carousel-{{ $caro->id }}').submit();">Delete</a>
                            <form id="delete-main-carousel-{{ $caro->id }}"
                                  action="{{ route('delete-main-carousel', ['id' => $caro->id]) }}" method="POST"
                                  style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <button><a href="{{ route('create-main-carousel') }}"
                           class="w-full bg-lime-200 shadow rounded p-4 block">Add Main Carousel</a></button>
            </table>
        </div>
    </div>
</x-app-layout>
