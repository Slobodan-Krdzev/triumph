@props(['header' => null, 'divId', 'dataName',
        'dataId1', 'dataLabel1',
        'dataId2' => null, 'dataLabel2' => null, 'imgLabel' => null,
        'databaseData' => null, 'fieldClass', 'imageDesc1' => null, 'imageDesc2' => null, 'imageDesc3' => null])

<div>
    <h1 class="font-bold text-3xl my-2">{{ $header }}</h1>
    <div class="dynamic-section" id="{{ $divId }}"
         data-id1="{{ $dataId1 }}" data-label1="{{ $dataLabel1 }}" data-name="{{ $dataName }}"
         data-id2="{{ $dataId2 }}" data-label2="{{ $dataLabel2}}" data-img-label="{{ $imgLabel }}">
        @if(!$databaseData)
            <div>
                @if($dataLabel1 == 'desc')
                    <x-form.textarea forId="{{ $dataId1 }}" placeholder="{{ ucfirst($dataLabel1) }}ription"
                                     dataName="{{ $dataName }}[0][desc]" oldValue="{{ $dataName }}.0.desc"/>
                @else
                    <label for="{{ $dataId1 }}_0"
                           class="block text-sm font-medium text-gray-700">{{ ucfirst($dataLabel1) }}</label>
                    <div class="flex items-center">
                        <input type="text" id="{{ $dataId1 }}_0"
                               name="{{ $dataName }}[0]{{ $dataLabel1 !== 'item Text' && $dataLabel1 !== 'slogan' && $dataId1 !== 'info-desc' ? '[' . $dataLabel1 . ']' : '' }}"
                               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                               placeholder="Enter {{ ucfirst($dataLabel1) }}">
                        <div class="cursor-pointer">
                            <x-form.modal id="{{ $dataId1 }}_0" name="{{ ucfirst($dataLabel1) }}" imagePath="{{ $imageDesc1 }}"/>
                        </div>
                    </div>
                @endif
                @if($dataId2 && $dataLabel2 && $dataLabel2 == 'desc')
                    <x-form.textarea forId="{{ $dataId2 }}" placeholder="{{ ucfirst($dataLabel2) }}ription"
                                     dataName="{{ $dataName }}[0][desc]" oldValue="{{ $dataName }}.0.desc"/>
                @elseif($dataId2 && $dataLabel2)
                    <label for="{{ $dataId2 }}_0"
                           class="block text-sm font-medium text-gray-700 mt-3">{{ ucfirst($dataLabel2) }}</label>
                    <div class="flex items-center">
                        <input type="text" id="{{ $dataId2 }}_0"
                               name="{{ $dataName }}[0][{{ $dataLabel2 }}]"
                               class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                               placeholder="Enter {{ ucfirst($dataLabel2) }}">
                        <div class="cursor-pointer">
                            <x-form.modal id="{{ $dataId2 }}_0" name="{{ ucfirst($dataLabel2) }}" imagePath="{{ $imageDesc2 }}"/>
                        </div>
                    </div>
                @endif
                @if($imgLabel)
                    <x-form.input labelText="{{ $imgLabel }}:" imageId="{{ $dataName }}_0"
                                  name="{{ $dataName }}[0][image]">
                        <img id='{{ $dataName }}_0' width="200" height="150"
                             class="object-cover border m-3 border-gray-200"/>
                    </x-form.input>
                @endif
            </div>
        @else
            @php
                $databaseData = array_values($databaseData); // Re-index the array
            @endphp

            @for($i=0; $i<count($databaseData); $i++)
                <div class="{{ $i > 0 ? 'dynamic-input-wrapper' : '' }}">
                    @if($dataLabel1 == 'desc')
                        <x-form.textarea forId="{{ $dataId1 }}_{{ $i }}" placeholder="{{ ucfirst($dataLabel1) }}ription {{ $i+1 }}"
                                         dataName="{{ $dataName }}[{{ $i }}][desc]"
                                         oldValue="{{ $dataName }}.{{ $i }}.desc"
                                         dataValue="{{ $databaseData[$i][$dataLabel1] }}"/>
                    @else
                        <label for="{{ $dataId1 }}_{{ $i }}"
                               class="block text-sm font-medium text-gray-700">{{ ucfirst($dataLabel1) }} {{ $i+1 }}:</label>
                        <div class="flex items-center">
                            <input type="text" id="{{ $dataId1 }}_{{ $i }}"
                                   name="{{ $dataName }}[{{ $i }}]{{ $dataLabel1 !== 'item Text' && $dataLabel1 !== 'slogan' && $dataId1 !== 'info-desc' ? '[' . $dataLabel1 . ']' : '' }}"
                                   class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                   placeholder="Enter {{ ucfirst($dataLabel1) }}"
                                   @php
                                       $dataValue = $dataLabel1 !== 'item Text' && $dataLabel1 !== 'slogan' && $dataId1 !== 'info-desc' ? $databaseData[$i][$dataLabel1] : $databaseData[$i];
                                   @endphp
                                   value="{{ old($dataName . '.' . $i . ($dataLabel1 !== 'item Text' && $dataLabel1 !== 'slogan' && $dataId1 !== 'info-desc' ? '.' . $dataLabel1 : ''), $dataValue) }}">
                            <div class="cursor-pointer">
                                <x-form.modal id="{{ $dataId1 }}_{{ $i }}" name="{{ ucfirst($dataLabel1) }} {{ $i+1 }}" imagePath="{{ $imageDesc1 }}"/>
                            </div>
                        </div>
                    @endif
                    @if($dataId2 && $dataLabel2 && $dataLabel2 == 'desc')
                        <x-form.textarea forId="{{ $dataId2 }}_{{ $i }}" placeholder="{{ ucfirst($dataLabel2) }}ription {{ $i+1 }}"
                                         dataName="{{ $dataName }}[{{ $i }}][desc]"
                                         oldValue="{{ $dataName }}.{{ $i }}.desc"
                                         dataValue="{{ $databaseData[$i][$dataLabel2] }}"/>
                    @elseif($dataId2 && $dataLabel2)
                        <label for="{{ $dataId2 }}_{{ $i }}"
                               class="block text-sm font-medium text-gray-700 mt-3">{{ ucfirst($dataLabel2) }} {{ $i+1 }}:</label>
                        <div class="flex items-center">
                            <input type="text" id="{{ $dataId2 }}_{{ $i }}"
                                   name="{{ $dataName }}[{{ $i }}][{{ $dataLabel2 }}]"
                                   class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md"
                                   placeholder="Enter {{ ucfirst($dataLabel2) }}"
                                   value="{{ old($dataName . '.' .  $i . '.' .$dataLabel2, $databaseData[$i][$dataLabel2] ?? '') }}">
                            <div class="cursor-pointer">
                                <x-form.modal id="{{ $dataId2 }}_{{ $i }}" name="{{ ucfirst($dataLabel2) }} {{ $i+1 }}" imagePath="{{ $imageDesc2 }}"/>
                            </div>
                        </div>
                    @endif
                    @if($imgLabel)
                        <x-form.input labelText="{{ $imgLabel }}:" imageId="{{ $dataName }}[{{ $i }}][image]"
                                      name="{{ $dataName }}[{{ $i }}][image]">
                            <img id='{{ $dataName }}[{{ $i }}][image]' src="{{ $databaseData[$i]['image'] ?? '' }}"
                                 width="200" height="150"
                                 class="object-cover border m-3 border-gray-200"/>
                        </x-form.input>
                    @endif
                    @if($i > 0 && !$imgLabel)
                        <x-form.remove-field-button/>
                    @elseif($i > 0 && $i === count($databaseData) - 1 && $imgLabel)
                        <x-form.remove-field-button/>
                    @endif
                </div>
            @endfor
        @endif
    </div>
    <button class="{{ $fieldClass }} my-5 bg-lime-200 shadow rounded p-4">Add Field</button>
</div>
