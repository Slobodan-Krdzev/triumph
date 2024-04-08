<x-app-layout>
    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
            <div class="flex">
                <h1 class="bg-blue-400 text-white rounded py-3 px-6 mb-5"><a href="{{route('view-families')}}">Back</a></h1>
            </div>
        @endif

        <form method="post" action="{{ route('update-promo', ['id' => $promo->id]) }}" class="flex flex-col" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <x-form.select-family forId="category" placeholder="Category"
                               dataName="category"
                               oldValue="category"
                                  :families="$families"
                                  :type="$promo->category"/>

            <x-form.text-input forId="title" placeholder="Title"
                               dataName="title"
                               oldValue="title"
                               dataValue="{{ $promo->title }}"/>

            <x-form.select-sub-family forId="subFamilyType" placeholder="Sub Family Type"
                               dataName="subFamilyType"
                               oldValue="subFamilyType"
                                      :subFamilies="$subFamilies"
                                      :subFamilyName="$promo->subFamilyType"/>

            <x-form.textarea forId="desc" placeholder="Description"
                             dataName="desc"
                             oldValue="desc"
                             dataValue="{{ $promo->desc }}"/>

            <x-form.input labelText="Image:" imageId="image"
                          name="image">
                <img id='image' src="{{ $promo->image }}" width="200" height="150"
                     class="object-cover border m-3 border-gray-200"/>
            </x-form.input>

            <label for="btnBlack" class="block text-sm font-medium text-gray-700 mt-3">Button Black:</label>
            <select id="btnBlack" name="btnBlack" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                <option value="1" class="bg-white hover:bg-gray-100" {{ old('btnBlack', $promo->btnBlack) == '1' ? 'selected' : '' }}>Yes</option>
                <option value="0" class="bg-white hover:bg-gray-100" {{ old('btnBlack', $promo->btnBlack) == '0' ? 'selected' : '' }}>No</option>
            </select>

            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
