<x-app-layout>

    <div class="mt-16 p-10">

        <div class="mt-16 p-10">


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-b border-gray-200 text-2xl">
                                Families
                            </th>


                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($familyData as $family)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                    <th scope="row" class="px-6 py-4 capitalize font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $family->type }}
                                    </th>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit-family', ['id' => $family->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-52">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-b border-gray-200 text-2xl">
                                Sub-Families of <span class="text-red-500 font-bold">Adventure</span>
                            </th>



                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subFamData as $data)
                        @if ($data->familyType == 'adventure')
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="px-6 uppercase  py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->subFamilyName }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit-sub-family', ['id' => $data->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-b border-gray-200 text-2xl">
                                Sub-Families of <span class="text-red-500 font-bold">Classics</span>
                            </th>



                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subFamData as $data)
                        @if ($data->familyType == 'classics')
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="px-6 uppercase  py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->subFamilyName }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit-sub-family', ['id' => $data->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>

                </table>
            </div>

            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-b border-gray-200 text-2xl">
                                Sub-Families of <span class="text-red-500 font-bold">Roadsters</span>
                            </th>



                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subFamData as $data)
                        @if ($data->familyType == 'roadsters')
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="px-6 uppercase  py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->subFamilyName }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit-sub-family', ['id' => $data->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>

                </table>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-b border-gray-200 text-2xl">
                                Sub-Families of <span class="text-red-500 font-bold">Rocket-3</span>
                            </th>



                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subFamData as $data)
                        @if ($data->familyType == 'rocket-3')
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="px-6 uppercase  py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->subFamilyName }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit-sub-family', ['id' => $data->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>

                </table>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-b border-gray-200 text-2xl">
                                Sub-Families of <span class="text-red-500 font-bold">Sport</span>
                            </th>



                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subFamData as $data)
                        @if ($data->familyType == 'sport')
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="px-6 uppercase  py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->subFamilyName }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit-sub-family', ['id' => $data->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>


            <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-10">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3 border-b border-gray-200 text-2xl">
                                Sub-Families of <span class="text-red-500 font-bold">Off-Road</span>
                            </th>

                            <th scope="col" class="px-6 py-3">
                                <span class="sr-only">Edit</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($subFamData as $data)
                        @if ($data->familyType == 'off-road')
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td scope="row" class="px-6 uppercase  py-4 font-bold text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $data->subFamilyName }}
                                </td>
                                <td class="px-6 py-4 text-right">
                                    <a href="{{ route('edit-sub-family', ['id' => $data->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                </td>
                            </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>



    </div>



</x-app-layout>
