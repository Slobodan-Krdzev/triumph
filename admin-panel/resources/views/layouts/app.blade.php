<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Triumph Admin') }}</title> --}}
    <title>Triumph Admin</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-100">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif

    <!-- Page Content -->
    <main>
        {{ $slot }}
    </main>
</div>
</body>
<script>
    var loadFile = function (event, imageId) {

        var input = event.target;
        var file = input.files[0];
        var type = file.type;

        console.log(imageId);

        var output = document.getElementById(imageId);


        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function () {
            URL.revokeObjectURL(output.src) // free memory
        }
    };
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script>
    $(document).ready(function () {

        $(document).on('click', '.remove-field', function (e) {
            e.preventDefault();
            $(this).parent('.dynamic-input-wrapper').remove();
        });

        $('.add-field').click(function (e) {
            e.preventDefault();
            var section = $(this).prev('.dynamic-section');
            var name = section.data('name')
            var id = section.data('id1');
            var label = section.data('label1');
            addField(section, name, id, label);
        });

        function addField(section, name, id, label) {
            var newIndex = section.children().length;
            var newField = `
                <div class="dynamic-input-wrapper">
                    <x-form.text-input forId="${id}_${newIndex}" placeholder="${label.charAt(0).toUpperCase() + label.slice(1)} ${newIndex}" dataName="${name}[${newIndex}]" oldValue="${name}.${newIndex}"/>
                    <x-form.remove-field-button />
                </div>`;

            section.append(newField);
        }

        $('.add-field-and-image').click(function (e) {
            e.preventDefault();
            var section = $(this).prev('.dynamic-section');
            addFieldAndImage(section);
        });

        function addFieldAndImage(section, name, id, label) {
            var newIndex = section.children().length;
            var newField = `
                <div class="dynamic-input-wrapper">
                        <x-form.text-input forId="bikePageImageGallery_${newIndex}_alt" placeholder="Image ${newIndex + 1} Alt"
                                           dataName="bikePageImageGallery[${newIndex}][alt]"
                                           oldValue="bikePageImageGallery.${newIndex}.alt"/>
                        <x-form.input labelText="Image ${newIndex + 1} Src:" imageId="bikePageImageGallery_${newIndex}_src"
                                      name="bikePageImageGallery[${newIndex}][src]">
                            <img id='bikePageImageGallery_${newIndex}_src' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>
                        <x-form.remove-field-button />
                </div>`;

            section.append(newField);
        }

        $('.add-two-fields').click(function (e) {
            e.preventDefault();
            var section = $(this).prev('.dynamic-section');
            var name = section.data('name')
            var id1 = section.data('id1');
            var id2 = section.data('id2');
            var label1 = section.data('label1');
            var label2 = section.data('label2');
            addTwoFields(section, name, id1, id2, label1, label2);
        });

        function addTwoFields(section, name, id1, id2, label1, label2) {
            var newIndex = section.children().length;
            var newField;

            // Check if label1 is 'desc', if true, render textarea, else render text input
            if (label1 === 'desc') {
                newField = `
                    <div class="mt-3 dynamic-input-wrapper">
                        <x-form.textarea forId="${id1}_${newIndex}" placeholder="${label1.charAt(0).toUpperCase() + label1.slice(1)}ription ${newIndex}" dataName="${name}[${newIndex}][${label1}]" oldValue="${name}.${newIndex}.${label1}"></x-form.textarea>
                        <x-form.text-input forId="${id2}_${newIndex}" placeholder="${label2.charAt(0).toUpperCase() + label2.slice(1)} ${newIndex}" dataName="${name}[${newIndex}][${label2}]" oldValue="${name}.${newIndex}.${label2}"></x-form.text-input>

                        <x-form.remove-field-button />
                    </div>`;
            } else if (label2 === 'desc') {
                newField = `
                     <div class="mt-3 dynamic-input-wrapper">
                        <x-form.text-input forId="${id1}_${newIndex}" placeholder="${label1.charAt(0).toUpperCase() + label1.slice(1)} ${newIndex}" dataName="${name}[${newIndex}][${label1}]" oldValue="${name}.${newIndex}.${label1}"></x-form.text-input>
                        <x-form.textarea forId="${id2}_${newIndex}" placeholder="${label2.charAt(0).toUpperCase() + label2.slice(1)}ription ${newIndex}" dataName="${name}[${newIndex}][${label2}]" oldValue="${name}.${newIndex}.${label2}"></x-form.textarea>

                        <x-form.remove-field-button />
                    </div>`;
            } else {
                newField = `
                     <div class="mt-3 dynamic-input-wrapper">
                        <x-form.text-input forId="${id1}_${newIndex}" placeholder="${label1.charAt(0).toUpperCase() + label1.slice(1)} ${newIndex}" dataName="${name}[${newIndex}][${label1}]" oldValue="${name}.${newIndex}.${label1}"></x-form.text-input>
                        <x-form.text-input forId="${id2}_${newIndex}" placeholder="${label2.charAt(0).toUpperCase() + label2.slice(1)} ${newIndex}" dataName="${name}[${newIndex}][${label2}]" oldValue="${name}.${newIndex}.${label2}"></x-form.text-input>

                        <x-form.remove-field-button />
                    </div>`;
            }

            section.append(newField);
        }


        $('.add-custom-color').click(function (e) {
            e.preventDefault();
            var section = $(this).prev('.dynamic-section');
            addCustomColor(section);
        });

        function addCustomColor(section) {
            var newIndex = section.children().length;
            var newField = `
                 <div class="dynamic-input-wrapper">
                        <h1 class="font-bold text-xl my-2">Color ${newIndex + 1}</h1>
                        <x-form.text-input forId="color_${newIndex}_name" placeholder="Color ${newIndex + 1} Name"
                                           dataName="customizationColors[${newIndex}][colorName]" oldValue="customizationColors.${newIndex}.colorName"/>

                        <x-form.text-input forId="color_${newIndex}_price" placeholder="Color ${newIndex + 1} Price"
                                           dataName="customizationColors[${newIndex}][price]" oldValue="customizationColors.${newIndex}.price"/>

                        <x-form.input labelText="Color ${newIndex + 1} Image:" imageId="color_${newIndex}_image" name="customizationColors[${newIndex}][image]">
                            <img id='color_${newIndex}_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>

                        <x-form.input labelText="Color ${newIndex + 1} Base Motorcycle Image:" imageId="color_${newIndex}_base_image"
                                      name="customizationColors[${newIndex}][base]">
                            <img id='color_${newIndex}_base_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>

                        <x-form.input labelText="Color ${newIndex + 1} Reversed Motorcycle  Image:" imageId="color_${newIndex}_reversed_image"
                                      name="customizationColors[${newIndex}][reversed]">
                            <img id='color_${newIndex}_reversed_image' width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>
                    <x-form.remove-field-button />
                    </div>
                `;

            section.append(newField);
        }

        $('.add-two-fields-and-img').click(function (e) {
            e.preventDefault();
            var section = $(this).prev('.dynamic-section');
            var name = section.data('name')
            var id1 = section.data('id1');
            var id2 = section.data('id2');
            var label1 = section.data('label1');
            var label2 = section.data('label2');
            var imgLabel = section.data('img-label');
            addTwoFieldsAndImg(section, name, id1, id2, label1, label2, imgLabel);
        });

        function addTwoFieldsAndImg(section, name, id1, id2, label1, label2, imgLabel) {
            var newIndex = section.children().length;
            var newField = `
                    <div class="dynamic-input-wrapper">
                    <x-form.text-input forId="${id1}_${newIndex}" placeholder="${label1.charAt(0).toUpperCase() + label1.slice(1)} ${newIndex}" dataName="${name}[${newIndex}][${label1}]" oldValue="${name}.${newIndex}.${label1}"/>

                    <x-form.textarea forId="${id2}_${newIndex}" placeholder="${label2.charAt(0).toUpperCase() + label2.slice(1)}ription ${newIndex}" dataName="${name}[${newIndex}][${label2}]" oldValue="${name}.${newIndex}.${label2}"/>

                    <x-form.input labelText="${imgLabel} ${newIndex}:" imageId="${name}_${newIndex}"
                    name="${name}[${newIndex}][image]">
                    <img id='${name}_${newIndex}' width="200" height="150"
                        class="object-cover border m-3 border-gray-200" />
                    </x-form.input>

                    <x-form.remove-field-button />
                </div>
                `;

            section.append(newField);
        }


        $('.add-accessory-type').click(function (e) {
            e.preventDefault();
            var section = $(this).prev('.dynamic-section');
            addAccessoryField(section);
        });

        function addAccessoryField(section) {
            var newIndex = section.children().length;
            var newField = `
                <div  class="m-3 border-2 rounded border-black p-8 dynamic-input-wrapper">
                    <x-form.text-input forId="accessory_type_${newIndex}_title" placeholder="Accessory Type ${newIndex} Title" dataName="accessory[accessoryTypes][${newIndex}][title]" oldValue="accessory.accessoryTypes.${newIndex}.title"/>

                    <x-form.textarea forId="accessory_type_${newIndex}_desc" placeholder="Accessory Type ${newIndex} Description" dataName="accessory[accessoryTypes][${newIndex}][desc]" oldValue="accessory.accessoryTypes.${newIndex}.desc"/>

                    <x-form.dynamic-text-inputs header="Accesory Type ${newIndex} Items List" divId="accessoryType${newIndex}ItemsList"
                                        dataId1="items${newIndex}" dataLabel1="item Text" dataName="accessory[accessoryTypes][${newIndex}][itemsList]"
                                        fieldClass="add-field" />

                    <x-form.input labelText="Accesory Type ${newIndex} Image 1 URL:" imageId="accessoryType${newIndex}Image1Url"
                                    name="accessory[accessoryTypes][${newIndex}][image1][src]">
                            <img id='accessoryType${newIndex}Image1Url' width="200" height="150"
                                class="object-cover border m-3 border-gray-200" />
                    </x-form.input>

                    <x-form.text-input forId="accessory_type_${newIndex}_image1_alt" placeholder="Accessory Type ${newIndex} Image 1 Alt Text" dataName="accessory[accessoryTypes][${newIndex}][image1][alt]" oldValue="accessory.accessoryTypes.${newIndex}.image1.alt"/>

                    <x-form.input labelText="Accesory Type ${newIndex} Image 2 URL:" imageId="accessoryType${newIndex}Image2Url"
                                    name="accessory[accessoryTypes][${newIndex}][image2][src]">
                            <img id='accessoryType${newIndex}Image2Url' width="200" height="150"
                                class="object-cover border m-3 border-gray-200" />
                    </x-form.input>

                    <x-form.text-input forId="accessory_type_${newIndex}_image2_alt" placeholder="Accessory Type ${newIndex} Image 2 Alt Text" dataName="accessory[accessoryTypes][${newIndex}][image2][alt]" oldValue="accessory.accessoryTypes.${newIndex}.image2.alt"/>

                    <x-form.remove-field-button />
                </div>`;


            section.append(newField);

            section.find('.add-field').click(function (e) {
                e.preventDefault();
                var itemListSection = $(this).prev('.dynamic-section');
                var name = itemListSection.data('name');
                var id = itemListSection.data('id1');
                var label = itemListSection.data('label1');
                addField(itemListSection, name, id, label);
            });
            addFieldEvent(section);
        }

        // Function to attach event listener to dynamically added item's "Add Field" button
        function addFieldEvent(section) {
            section.find('.add-field').off('click'); // Remove previous click event handlers
            section.find('.add-field').click(function (e) {
                e.preventDefault();
                var itemListSection = $(this).prev('.dynamic-section');
                var name = itemListSection.data('name');
                var id = itemListSection.data('id1');
                var label = itemListSection.data('label1');
                addField(itemListSection, name, id, label);
            });
        }
    });

    function toggleModal(event, id) {
        event.preventDefault();
        var modal = document.getElementById('modal_' + id);
        modal.classList.toggle('hidden');
    }

    function nextSection(currentSectionId, nextSectionId) {
        // Hide the current section
        document.getElementById(`section${currentSectionId}`).classList.add('hidden');

        // Show the next section
        document.getElementById(`section${nextSectionId}`).classList.remove('hidden');

        // Update the section number display
        document.getElementById('currentSection').textContent = nextSectionId;
    }

    function previousSection(currentSectionId, previousSectionId) {
        // Hide the current section
        document.getElementById(`section${currentSectionId}`).classList.add('hidden');

        // Show the previous section
        document.getElementById(`section${previousSectionId}`).classList.remove('hidden');

        // Update the section number display
        document.getElementById('currentSection').textContent = previousSectionId;
    }

</script>
</html>
