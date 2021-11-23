<x-app-layout>
    @section('title')
        Add Ummah
    @endsection
    @push('styles')
        <style>
            [x-cloak] {
                display: none;
            }

            .svg-icon {
                width: 1em;
                height: 1em;
            }

            .svg-icon path,
            .svg-icon polygon,
            .svg-icon rect {
                fill: #333;
            }

            .svg-icon circle {
                stroke: #4691f6;
                stroke-width: 1;
            }

        </style>
    @endpush
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Ummah') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap items-center justify-center m-5">
                            <div x-data="showImage()" class="mx-auto w-52 xl:mr-0 xl:ml-6">
                                <div
                                    class="h-64 p-5 border-2 border-gray-200 border-dashed rounded-md shadow-sm dark:border-dark-5">
                                    <div class="relative h-40 mx-auto cursor-pointer image-fit zoom-in">
                                        <label class="inline-block mb-2 text-gray-500">Upload
                                            Image(jpg,png) <br> only 128 x 128 <span
                                                class="text-red-700">*</span></label>
                                        <div class="flex items-center justify-center w-full">
                                            <label
                                                class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                <div class="relative flex flex-col items-center justify-center pt-7">
                                                    @if (!empty($data->photo))
                                                        <img id="preview" class="absolute inset-0 w-full h-36"
                                                            src="{{ asset('images/ummah/' . $data->photo) }}">
                                                    @else
                                                        <img id="preview" class="absolute inset-0 w-full h-36">
                                                    @endif
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        class="w-12 h-12 text-gray-400 group-hover:text-gray-600"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <p
                                                        class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                        Select a photo</p>
                                                </div>
                                                <input name="photo" type="file" class="opacity-0" accept="image/*"
                                                    @change="showPreview(event)" />
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap m-5">
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
                                    <input type="text" id="name" name="name" value="{{ $data->name ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="number" class="text-sm leading-7 text-gray-600">Phone</label>
                                    <input type="number" id="email" name="phone" value="{{ $data->phone ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Connected
                                        With</label>
                                    <select name="connection_id" id="connection_id"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($connections as $item)
                                            <option value="{{ $item->id }}" @if (!empty($data->connection_id) && $data->connection_id == $item->id) selected @endif>
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Qualification</label>
                                    <input type="text" id="name" name="qualification"
                                        value="{{ $data->qualification ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Occupation</label>
                                    <input type="text" id="email" name="occupation"
                                        value="{{ $data->occupation ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Member Count</label>
                                    <input type="number" id="name" name="member_count"
                                        value="{{ $data->member_count ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Age</label>
                                    <input type="number" id="name" name="age" value="{{ $age ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            @if (Route::currentRouteName() == 'ummah.create')
                                @livewire('city-locality-dropdown')
                            @else
                                @livewire('city-locality-dropdown',['state_id' => $state_id, 'city_id' =>
                                $city_id,'locality_id' => $locality_id])
                            @endif
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Family Members</label>
                                    @php
                                        $family_members = ['father', 'mother', 'son', 'daughter', 'husband', 'wife', 'brother', 'sister', 'grandfather', 'grandmother', 'grandson', 'granddaughter', 'uncle', 'aunt', 'nephew', 'niece', 'cousin'];
                                    @endphp
                                    <select id="family" multiple name="family_members[]">
                                        @foreach ($family_members as $item)
                                            <option value="{{ $item }}" @if (!empty($data->family_members))
                                                @foreach ($data->family_members as $item2)
                                                    @if (!empty($item2 == $item)) selected @endif
                                                @endforeach
                                        @endif
                                        >{{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="number" class="text-sm leading-7 text-gray-600">Attachment</label>
                                    <input name="attachments"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200"
                                        type="file" accept=".jpg,.png,.pdf" />
                                </div>
                            </div>
                            <div class="w-full p-2 mb-4">
                                <button class="p-2 mx-auto text-white bg-gray-800 rounded" type="submit">
                                    {{ __('Add Doctor') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @push('scripts')
        <script>
            $('#family').select2({
                width: '100%',
                placeholder: "Select an Option",
                allowClear: true
            });

            $('#connection_id').select2();

            function showImage() {
                return {
                    showPreview(event) {
                        if (event.target.files.length > 0) {
                            var src = URL.createObjectURL(event.target.files[0]);
                            var preview = document.getElementById("preview");
                            preview.src = src;
                            preview.style.display = "block";
                        }
                    }
                }
            }
        </script>
    @endpush
</x-app-layout>
