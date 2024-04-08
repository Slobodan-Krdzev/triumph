@props(['forId', 'placeholder', 'dataName', 'oldValue', 'families', 'type' => null])

<label for="{{ $forId }}" class="block text-sm font-medium text-gray-700 mt-3">{{ $placeholder }}:</label>
<div>
    <select id="{{ $forId }}"
            name="{{ $dataName }}"
            class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
        @foreach($families as $family)
            <option value="{{ $family->type }}" class="bg-white hover:bg-gray-100" {{ $family->type == $type ? 'selected' : '' }}>
                {{ $family->type }}
            </option>
        @endforeach
    </select>
</div>
