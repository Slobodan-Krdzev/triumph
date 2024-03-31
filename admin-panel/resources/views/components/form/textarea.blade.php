@props(['forId', 'placeholder', 'dataName', 'oldValue', 'dataValue' => null])

<label for="{{ $forId }}" class="block text-sm font-medium text-gray-700 mt-3">{{ $placeholder }}:</label>
<div>
    <textarea id="{{ $forId }}"
              name="{{ $dataName }}"
              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
              placeholder="Enter {{ $placeholder }}">{{ old($oldValue, $dataValue) }}</textarea>
</div>
