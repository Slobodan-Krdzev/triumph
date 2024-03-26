@props(['labelText','imageId'])

<div class="flex items-center space-x-6 mt-3">
    <label for="{{ $imageId }}" class="block">
        <span>{{ $labelText ?? 'Choose Image:' }}</span>
        <input {{ $attributes->merge(['class' => 'block w-full text-sm text-slate-500
          file:mr-4 file:py-2 file:px-4
          file:rounded-full file:border-0
          file:text-sm file:font-semibold
          file:bg-violet-50 file:text-blue-500
          hover:file:bg-violet-100']) }} type="file" onchange="loadFile(event, '{{ $imageId }}')"/>
    </label>
    <div class="shrink-0">
        {{ $slot }}
    </div>
</div>
