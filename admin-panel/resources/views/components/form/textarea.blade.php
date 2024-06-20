@props(['forId', 'placeholder', 'dataName', 'oldValue', 'dataValue' => null, 'imageDesc' => null])

<label for="{{ $forId }}" class="block text-sm font-medium text-gray-700 mt-3">{{ $placeholder }}:</label>
<div class="flex items-center cursor-pointer">
    <textarea id="{{ $forId }}"
              name="{{ $dataName }}"
              class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
              placeholder="Enter {{ $placeholder }}">{{ htmlspecialchars_decode(old($oldValue, $dataValue), ENT_QUOTES | ENT_HTML5) }}</textarea>
    <div>
        <x-form.modal id="{{ $forId }}" name="{{ $placeholder }}" imagePath="{{ $imageDesc }}"/>
    </div>
</div>
