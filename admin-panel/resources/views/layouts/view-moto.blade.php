<x-app-layout>

    <div class="mt-16 p-10">


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-bold text-4xl">
                            Adventure
                        </th>


                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $moto)
                    @if ($moto->category == 'adventure')
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $moto->title }}
                            </th>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('edit-moto', ['id' => $moto->id, 'category' => $moto->category]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach

                </tbody>
            </table>

            <table class="w-full mt-10 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-bold text-4xl">
                            Classics
                        </th>


                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $moto)
                    @if ($moto->category == 'classics')
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $moto->title }}
                            </th>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('edit-moto', ['category' => $moto->category, 'id' => $moto->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach

                </tbody>
            </table>

            <table class="w-full mt-10 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-bold text-4xl">
                            Roadsters
                        </th>


                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $moto)
                    @if ($moto->category == 'roadsters')
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $moto->title }}
                            </th>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('edit-moto', ['category' => $moto->category, 'id' => $moto->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>

            <table class="w-full mt-10 text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3 font-bold text-4xl">
                            Rocket-3
                        </th>


                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $index => $moto)
                    @if ($moto->category == 'rocket-3')
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $moto->title }}
                            </th>
                            <td class="px-6 py-4 text-right">
                                <a href="{{ route('edit-moto', ['category' => $moto->category, 'id' => $moto->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                    Edit
                                </a>
                            </td>
                        </tr>
                    @endif
                @endforeach

                </tbody>
            </table>
        </div>

    </div>



</x-app-layout>
