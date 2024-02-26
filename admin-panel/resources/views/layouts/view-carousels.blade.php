<x-app-layout>

        <div class="p-20 mb-10">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-b border-gray-200">
                                Latest Carousels
                            </th>



                            <th scope="col" class="px-6 py-3">
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
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit-latest-carousell', ['id' => $caro->id]) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <button><a href="{{ route('add-carousels') }}" class="w-full bg-lime-200 shadow rounded p-4 block">Add Latest Carousel</a></button>
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
                                    <a href="{{ route('edit-main-carousels', ['id' => $caro->id]) }}"
                                        class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    <button><a href="{{ route('add-main-carousels') }}" class="w-full bg-lime-200 shadow rounded p-4 block">Add Main Carousel</a></button>
                </table>
            </div>
        </div>






</x-app-layout>
