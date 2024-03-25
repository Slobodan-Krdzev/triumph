@props(['forId', 'placeholder', 'dataName', 'dataValue'])

<label for="{{ $forId }}"
       class="block text-sm font-medium text-gray-700 mt-3">{{ $placeholder }}:</label>
<div>
    <input type="text" id="{{ $forId }}"
           name="{{ $dataName }}"
           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
           placeholder="Enter {{ $placeholder }}"
           value="{{ old($dataValue) }}">
</div>
