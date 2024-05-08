@props(['id','name', 'imagePath'])

<img src="{{ asset('images/triumph-logo.png')}}" alt="Triumph Logo" onclick="toggleModal(event, '{{ $id }}')" width="60"
     height="60">
<div id="modal_{{ $id }}" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full cursor-auto">
    <div class="relative top-5 mx-auto p-5 border w-8/12 shadow-lg rounded-md bg-white">
        <div class="mt-3 text-center">
            <h3 class="text-4xl leading-6 font-bold text-gray-900 pb-7">This image describes what the field <span class="text-red-500">{{ $name }}</span> is for</h3>
            <div class="mt-2 px-7">
                <img src="{{ asset($imagePath) }}" alt="{{ $id }}" class="mx-auto">
                <p class="text-sm text-gray-500 mt-4">
                    This input changes the value within the database. It is important to ensure the text/image is accurate
                    as it affects how the data is categorized and displayed.
                </p>
            </div>
            <div class="mt-4 flex justify-center">
                <button onclick="toggleModal(event, '{{ $id }}')" class="mx-auto px-4 py-2 bg-blue-500 text-white text-base font-medium rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    Close
                </button>
            </div>
        </div>
    </div>
</div>
