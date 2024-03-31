@props(['databaseData' => null])

@if (isset($databaseData))
    @php
        $databaseData = array_values($databaseData); // Re-index the array
    @endphp
    @for($i=0; $i<count($databaseData); $i++)
        <div class="m-3 border-2 rounded border-black p-8 dynamic-input-wrapper">
            <h1 class="font-bold text-2xl my-2">Accessory Type {{$i+1}}</h1>
            <x-form.text-input forId="accessory_type_{{ $i }}_title" placeholder="Accessory Type Title"
                               dataName="accessory[accessoryTypes][{{ $i }}][title]"
                               oldValue="accessory.accessoryTypes.{{ $i }}.title"
                               dataValue="{{ $databaseData[$i]['title'] ?? '' }}"/>

            <x-form.text-input forId="accessory_type_{{ $i }}_desc" placeholder="Accessory Type Description"
                               dataName="accessory[accessoryTypes][{{ $i }}][desc]"
                               oldValue="accessory.accessoryTypes.{{ $i }}.desc"
                               dataValue="{{ $databaseData[$i]['desc'] ?? '' }}"/>

                <x-form.dynamic-text-inputs header="Accesory Type Items List"
                                            divId="accessoryType{{ $i }}ItemsList"
                                            dataId1="items{{ $i }}" dataLabel1="item Text"
                                            dataName="accessory[accessoryTypes][{{ $i }}][itemsList]"
                                            :databaseData="$databaseData[$i]['itemsList'] ?? null"
                                            fieldClass="add-field"/>


            <x-form.input labelText="Accesory Type Image 1 URL:" imageId="accessoryType{{ $i }}Image1Url"
                          name="accessory[accessoryTypes][{{ $i }}][image1][src]">
                <img id='accessoryType{{ $i }}Image1Url' src="{{ $databaseData[$i]['image1']['src'] ?? '' }}" width="200" height="150"
                     class="object-cover border m-3 border-gray-200"/>
            </x-form.input>

            <x-form.text-input forId="accessory_type_{{ $i }}_image1_alt"
                               placeholder="Accessory Type Image 1 Alt Text"
                               dataName="accessory[accessoryTypes][{{ $i }}][image1][alt]"
                               oldValue="accessory.accessoryTypes.{{ $i }}.image1.alt"
                               dataValue="{{ $databaseData[$i]['image1']['alt'] ?? '' }}"/>

            <x-form.input labelText="Accesory Type Image 2 URL:" imageId="accessoryType{{ $i }}Image2Url"
                          name="accessory[accessoryTypes][{{ $i }}][image2][src]">
                <img id='accessoryType{{ $i }}Image2Url' src="{{ $databaseData[$i]['image2']['src'] ?? '' }}" width="200" height="150"
                     class="object-cover border m-3 border-gray-200"/>
            </x-form.input>

            <x-form.text-input forId="accessory_type_{{ $i }}_image2_alt"
                               placeholder="Accessory Type Image 2 Alt Text"
                               dataName="accessory[accessoryTypes][{{ $i }}][image2][alt]"
                               oldValue="accessory.accessoryTypes.{{ $i }}.image2.alt"
                               dataValue="{{ $databaseData[$i]['image2']['alt'] ?? '' }}"/>

            @if($i > 0 && $i === count($databaseData) - 1)
                <x-form.remove-field-button />
            @endif
        </div>
    @endfor
@else
    <div class="m-3 border-2 rounded border-black p-8">
        <x-form.text-input forId="accessory_type_0_title" placeholder="Accessory Type Title"
                           dataName="accessory[accessoryTypes][0][title]"
                           oldValue="accessory.accessoryTypes.0.title"/>

        <x-form.text-input forId="accessory_type_0_desc" placeholder="Accessory Type Description"
                           dataName="accessory[accessoryTypes][0][desc]"
                           oldValue="accessory.accessoryTypes.0.desc"/>

        <x-form.dynamic-text-inputs header="Accesory Type Items List"
                                    divId="accessoryType0ItemsList"
                                    dataId1="items0" dataLabel1="item Text"
                                    dataName="accessory[accessoryTypes][0][itemsList]"
                                    fieldClass="add-field"/>

        <x-form.input labelText="Accesory Type Image 1 URL:" imageId="accessoryType0Image1Url"
                      name="accessory[accessoryTypes][0][image1][src]">
            <img id='accessoryType0Image1Url' width="200" height="150"
                 class="object-cover border m-3 border-gray-200"/>
        </x-form.input>

        <x-form.text-input forId="accessory_type_0_image1_alt"
                           placeholder="Accessory Type Image 1 Alt Text"
                           dataName="accessory[accessoryTypes][0][image1][alt]"
                           oldValue="accessory.accessoryTypes.0.image1.alt"/>

        <x-form.input labelText="Accesory Type Image 2 URL:" imageId="accessoryType0Image2Url"
                      name="accessory[accessoryTypes][0][image2][src]">
            <img id='accessoryType0Image2Url' width="200" height="150"
                 class="object-cover border m-3 border-gray-200"/>
        </x-form.input>

        <x-form.text-input forId="accessory_type_0_image2_alt"
                           placeholder="Accessory Type Image 2 Alt Text"
                           dataName="accessory[accessoryTypes][0][image2][alt]"
                           oldValue="accessory.accessoryTypes.0.image2.alt"/>

    </div>
@endif
