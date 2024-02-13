<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('promo-store-classics') }}" method="POST" class="flex flex-col ">
            @csrf

            @if (session('success'))
                <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                    role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif


            <div class="flex">
                <h1 class="bg-blue-400 text-white rounded py-3 px-6 mb-5"><a href="{{ route('view-families') }}">Back</a>
                </h1>
            </div>

            <h1 class="font-bold text-3xl my-2">Add Promo</h1>

            <label for="title">Title:</label>
            <input type="text" id="title" name="promo_data[0][title]" value="" required>

            <label for="subFamilyType">Sub Family Type:</label>
            <input type="text" id="subFamilyType" name="promo_data[0][subFamilyType]" value="" required>

            <label for="desc">Description:</label>
            <textarea id="desc" name="promo_data[0][desc]" required></textarea>

            <label for="image">Image:</label>
            <input type="text" id="image" name="promo_data[0][image]" value="" required>

            <label for="btnBlack">Button Black:</label>
            <select id="btnBlack" name="promo_data[0][btnBlack]">
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>

            <input type="submit" class="my-5 bg-lime-200 shadow rounded p-4" value="Submit">






        </form>

    </div>

</x-app-layout>
