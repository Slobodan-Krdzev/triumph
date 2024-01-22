<x-app-layout>

    <div class="px-8 mt-10 w-8/12">
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
                role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form method="post" action="{{ route('update-promo', ['id' => $promo]) }}" class="flex flex-col">
            @csrf
            @method('PUT')

            <!-- Display input fields for each promo item -->
            @foreach ($promo->promo as $key => $promoItem)
                <label for="promo[{{ $key }}][title]">Title:</label>
                <input type="text" name="promo[{{ $key }}][title]"
                    value="{{ old("promo.$key.title", $promoItem['title']) }}" required>

                <label for="promo[{{ $key }}][desc]">Description:</label>
                <input type="text" name="promo[{{ $key }}][desc]"
                    value="{{ old("promo.$key.desc", $promoItem['desc']) }}" required>

                <!-- Add other fields as needed for each promo item -->
            @endforeach

            {{-- <label for="title">Title:</label>
            <input type="text" name="promo[0][title]" value="{{ old('promo.0.title', $promo->promo[0]['title']) }}"
                required>

            <label for="title">Description:</label>
            <input type="text" name="promo[0][desc]" value="{{ old('promo.0.desc', $promo->promo[0]['desc']) }}"
                required>


            <label for="title">Sub-Family-Type:</label>
            <input type="text" name="promo[0][subFamilyType]" value="{{ old('promo.0.subFamilyType', $promo->promo[0]['subFamilyType']) }}"
                required>

            <label for="title">Image:</label>
            <input type="text" name="promo[0][image]" value="{{ old('promo.0.image', $promo->promo[0]['image']) }}"
                required>


                <label for="btnBlack">Button Black:</label>
                <select id="btnBlack" name="promo[0][btnBlack]" required>
                    <option value="1" {{ $promo->promo[0]['btnBlack'] ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$promo->promo[0]['btnBlack'] ? 'selected' : '' }}>No</option>
                </select> --}}


        </form>


    </div>
</x-app-layout>
