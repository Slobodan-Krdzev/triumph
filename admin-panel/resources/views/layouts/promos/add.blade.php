<x-app-layout>

    <div class="px-8 mt-10 w-8/12">

        <form action="{{ route('store-promo') }}" method="POST" class="flex flex-col " enctype="multipart/form-data">
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

            <h1 class="font-bold text-3xl my-2">Add Promo</h1>

            <x-form.select-family forId="category" placeholder="Category"
                                  dataName="category"
                                  oldValue="category"
                                  :families="$families"
                                  :type="$type"/>

            <x-form.text-input forId="title" placeholder="Title"
                               dataName="title"
                               oldValue="title"/>

            <x-form.select-sub-family forId="subFamilyType" placeholder="Sub Family Type"
                                      dataName="subFamilyType"
                                      oldValue="subFamilyType"
                                      :subFamilies="$subFamilies"/>

            <x-form.textarea forId="desc" placeholder="Description"
                             dataName="desc"
                             oldValue="desc"/>

            <x-form.input labelText="Image:" imageId="image"
                          name="image">
                <img id='image' width="200" height="150"
                     class="object-cover border m-3 border-gray-200"/>
            </x-form.input>

            <label for="btnBlack" class="block text-sm font-medium text-gray-700 mt-3">Button Black:</label>
            <select id="btnBlack" name="btnBlack"
                    class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                <option value="1" class="bg-white hover:bg-gray-100">Yes</option>
                <option value="0" class="bg-white hover:bg-gray-100">No</option>
            </select>


            <input type="submit" class="my-5 bg-lime-200 shadow rounded p-4" value="Submit">


        </form>

    </div>

</x-app-layout>
