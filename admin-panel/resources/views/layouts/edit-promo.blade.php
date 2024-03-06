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

        <form method="post" action="{{ route('update-promo', ['id' => $promo->id]) }}" class="flex flex-col">
            @csrf
            @method('PUT')

            @foreach ($promo->promo_data as $key => $promoItem)
                <label>Title:</label>
                <input type="text" name="promo[{{ $key }}][title]"
                    value="{{ old("promo.$key.title", $promoItem['title']) }}" required>

                <label for="promo[{{ $key }}][subFamilyType]">Sub Family Type:</label>
                <input type="text" name="promo[{{ $key }}][subFamilyType]"
                    value="{{ old("promo.$key.subFamilyType", $promoItem['subFamilyType']) }}" required>

                <label for="promo[{{ $key }}][desc]">Description:</label>
                <input type="text" name="promo[{{ $key }}][desc]"
                    value="{{ old("promo.$key.desc", $promoItem['desc']) }}" required>


                    <x-form.input labelText="Image:" imageId="image"
                    name="gallery[subFamilyTopSectionImage][src]">
                    <img id='image' src="/storage/{{ $promoItem['image']}}" width="200"
                        height="150" class="object-cover border m-3 border-gray-200" />
                </x-form.input>


                    <label for="promo[{{ $key }}][btnBlack]">Black button:</label>
                    <select name="promo[{{ $key }}][btnBlack]" required>
                        <option value="1" {{ old("promo.$key.btnBlack", $promoItem['btnBlack']) == 1 ? 'selected' : '' }}>Yes</option>
                        <option value="0" {{ old("promo.$key.btnBlack", $promoItem['btnBlack']) == 0 ? 'selected' : '' }}>No</option>
                    </select>
            @endforeach

            <button type="submit" class="my-5 bg-lime-200 shadow rounded p-4">Update</button>
        </form>
    </div>
</x-app-layout>
