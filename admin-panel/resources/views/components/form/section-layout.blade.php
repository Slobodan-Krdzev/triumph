@props(['sectionId'])

<div id="section{{ $sectionId }}"
     class="form-section bg-white p-6 rounded-lg shadow-md my-4">
    {{ $slot }}
</div>
