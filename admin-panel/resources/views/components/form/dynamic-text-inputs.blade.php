@props(['header', 'divId', 'dataName',
        'dataId1', 'dataLabel1',
        'dataId2' => null, 'dataLabel2' => null, 'imgLabel' => null,
        'databaseData' => null, 'fieldClass'])

<div>
    <h1 class="font-bold text-3xl my-2">{{ $header }}</h1>
    <div class="dynamic-section" id="{{ $divId }}"
         data-id1="{{ $dataId1 }}" data-label1="{{ $dataLabel1 }}" data-name="{{ $dataName }}"
         data-id2="{{ $dataId2 }}" data-label2="{{ $dataLabel2}}" data-img-label="{{ $imgLabel }}">
        @if(!$databaseData)
        <div>
            <label for="{{ $dataId1 }}_0"
                   class="block text-sm font-medium text-gray-700">{{ ucfirst($dataLabel1) }}@if($dataLabel1 == 'desc')ription @endif:</label>
            <div>
                <input type="text" id="{{ $dataId1 }}_0"
                       name="{{ $dataName }}[0]{{ $dataLabel1 !== 'item Text' && $dataLabel1 !== 'slogan' ? '[' . $dataLabel1 . ']' : '' }}"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                       placeholder="Enter {{ ucfirst($dataLabel1) }}@if($dataLabel1 == 'desc')ription @endif">
            </div>
            @if($dataId1 && $dataLabel2)
            <label for="{{ $dataId2 }}_0"
                   class="block text-sm font-medium text-gray-700 mt-3">{{ ucfirst($dataLabel2) }}@if($dataLabel2 == 'desc')ription @endif:</label>
            <div>
                <input type="text" id="{{ $dataId2 }}_0"
                       name="{{ $dataName }}[0][{{ $dataLabel2 }}]"
                       class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                       placeholder="Enter {{ ucfirst($dataLabel2) }}@if($dataLabel2 == 'desc')ription @endif">
            </div>
            @endif
            @if($imgLabel)
                <x-form.input labelText="{{ $imgLabel }}:" imageId="{{ $dataName }}_0"
                              name="{{ $dataName }}[0][image]">
                    <img id='{{ $dataName }}_0' width="200" height="150"
                         class="object-cover border m-3 border-gray-200" />
                </x-form.input>
            @endif
        </div>
        @else
            <div>
            @for($i=0; $i<count($databaseData); $i++)
                <label for="{{ $dataId1 }}_{{ $i }}"
                       class="block text-sm font-medium text-gray-700">{{ ucfirst($dataLabel1) }}@if($dataLabel1 == 'desc')ription @endif:</label>
                <div>
                    <input type="text" id="{{ $dataId1 }}_{{ $i }}"
                           name="{{ $dataName }}[{{ $i }}]{{ $dataLabel1 !== 'item Text' && $dataLabel1 !== 'slogan' ? '[' . $dataLabel1 . ']' : '' }}"
                           class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                           placeholder="Enter {{ ucfirst($dataLabel1) }}@if($dataLabel1 == 'desc')ription @endif"
                           @php
                               $defaultValue = $dataLabel1 !== 'item Text' && $dataLabel1 !== 'slogan' ? $databaseData[$i][$dataLabel1] : $databaseData[$i];
                           @endphp
                           value="{{ old($dataName . '.' . $i . ($dataLabel1 !== 'item Text' && $dataLabel1 !== 'slogan' ? '.' . $dataLabel1 : ''), $defaultValue) }}">
                </div>
                @if($dataId1 && $dataLabel2)
                    <label for="{{ $dataId2 }}_{{ $i }}"
                           class="block text-sm font-medium text-gray-700 mt-3">{{ ucfirst($dataLabel2) }}@if($dataLabel2 == 'desc')ription @endif:</label>
                    <div>
                        <input type="text" id="{{ $dataId2 }}_{{ $i }}"
                               name="{{ $dataName }}[{{ $i }}][{{ $dataLabel2 }}]"
                               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                               placeholder="Enter {{ ucfirst($dataLabel2) }}@if($dataLabel2 == 'desc')ription @endif"
                               value="{{ old($dataName . '.' .  $i . '.' .$dataLabel2, $databaseData[$i][$dataLabel2]) }}">
                    </div>
                @endif
                @if($imgLabel)
                    <x-form.input labelText="{{ $imgLabel }}:" imageId="{{ $dataName }}_0"
                                  name="{{ $dataName }}[0][image]">
                        <img id='{{ $dataName }}_0' width="200" height="150"
                             class="object-cover border m-3 border-gray-200" />
                    </x-form.input>
                @endif
            @endfor
            </div>
        @endif
    </div>
    <button class="{{ $fieldClass }} my-5 bg-lime-200 shadow rounded p-4">Add Field</button>
</div>
