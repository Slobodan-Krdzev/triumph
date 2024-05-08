@props(['sectionId', 'prevSectionId', 'nextSectionId', 'totalSections'])

<div id="section{{ $sectionId }}"
     class="form-section bg-white p-6 rounded-lg shadow-md my-4 {{ $sectionId == 1 ? '' : 'hidden' }}">
    {{ $slot }}

    <div>
        @if($sectionId > 1)
            <button type="button" onclick="previousSection({{ $sectionId }}, {{ $prevSectionId }})"
                    class="mt-7 inline-flex items-center px-4 py-2 bg-gray-300 hover:bg-gray-500 text-black font-bold rounded shadow float-left">
                Previous
            </button>
        @endif

        @if($sectionId < $totalSections)
            <button type="button" onclick="nextSection({{ $sectionId }}, {{ $nextSectionId }})"
                    class="mt-7 inline-flex items-center px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded shadow float-right">
                Next
            </button>
        @endif

        @if($sectionId == $totalSections)
            <button type="submit" class="w-full my-5 bg-green-400 hover:bg-green-300 shadow rounded p-4">Submit</button>
        @endif
    </div>
</div>
