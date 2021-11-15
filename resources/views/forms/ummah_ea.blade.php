<x-app-layout>
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
            {{ __('Ummah Add') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ $action }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap m-5">
                            <div x-data="showImage()" class="mx-auto w-52 xl:mr-0 xl:ml-6">
                                <div
                                    class="p-5 border-2 border-gray-200 border-dashed rounded-md shadow-sm dark:border-dark-5">
                                    <div class="relative h-40 mx-auto cursor-pointer image-fit zoom-in">
                                        <label class="inline-block mb-2 text-gray-500">Upload
                                            Image(jpg,png)</label>
                                        <div class="flex items-center justify-center w-full">
                                            <label
                                                class="flex flex-col w-full h-32 border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                <div class="relative flex flex-col items-center justify-center pt-7">
                                                    <img id="preview" class="absolute inset-0 w-full h-32">
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
                        <div class="flex flex-wrap -m-2">
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
                                    <input type="text" id="name" name="name" value="{{ $data->name ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="number" class="text-sm leading-7 text-gray-600">Phone</label>
                                    <input type="number" id="email" name="phone" value="{{ $data->phone ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Connected
                                        With</label>
                                    @php
                                        $connected = ['Masjid', 'Madarsa', 'School'];
                                    @endphp
                                    <select name="connected_with"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($connected as $item)
                                            <option value="{{ $item }}" @if (!empty($data->connected_with) && $data->connected_with == $item) selected @endif>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Qualification</label>
                                    <input type="text" id="name" name="qualification"
                                        value="{{ $data->qualification ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Occupation</label>
                                    <input type="text" id="email" name="occupation"
                                        value="{{ $data->occupation ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Member Count</label>
                                    <input type="number" id="name" name="member_count" {{ $data->member_count ?? '' }}
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Family
                                        Members</label>
                                    @php
                                        $family_members = ['father', 'mother', 'son', 'daughter', 'husband', 'wife', 'brother', 'sister', 'grandfather', 'grandmother', 'grandson', 'granddaughter', 'uncle', 'aunt', 'nephew', 'niece', 'cousin'];
                                    @endphp
                                    <select x-cloak id="select">
                                        @foreach ($family_members as $item)
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endforeach
                                    </select>
                                    <div x-data="dropdown()" x-init="loadOptions()"
                                        class="flex flex-col items-center w-full h-64 mx-auto md:w-1/2">
                                        <input name="family_members" type="hidden" x-bind:value="selectedValues()">
                                        <div class="relative inline-block w-64">
                                            <div class="relative flex flex-col items-center">
                                                <div x-on:click="open" class="w-full">
                                                    <div class="flex p-1 my-2 bg-white border border-gray-200 rounded">
                                                        <div class="flex flex-wrap flex-auto">
                                                            <template x-for="(option,index) in selected"
                                                                :key="options[option].value">
                                                                <div
                                                                    class="flex items-center justify-center px-1 py-1 m-1 font-medium bg-white bg-gray-100 border rounded">
                                                                    <div class="text-xs font-normal leading-none max-w-full flex-initial x-model="
                                                                        options[option] x-text="options[option].text">
                                                                    </div>
                                                                    <div class="flex flex-row-reverse flex-auto">
                                                                        <div x-on:click.stop="remove(index,option)">
                                                                            <svg class="w-4 h-4 fill-current "
                                                                                role="button" viewBox="0 0 20 20">
                                                                                <path
                                                                                    d="M14.348,14.849c-0.469,0.469-1.229,0.469-1.697,0L10,11.819l-2.651,3.029c-0.469,0.469-1.229,0.469-1.697,0
                                                                                 c-0.469-0.469-0.469-1.229,0-1.697l2.758-3.15L5.651,6.849c-0.469-0.469-0.469-1.228,0-1.697s1.228-0.469,1.697,0L10,8.183
                                                                                 l2.651-3.031c0.469-0.469,1.228-0.469,1.697,0s0.469,1.229,0,1.697l-2.758,3.152l2.758,3.15
                                                                                 C14.817,13.62,14.817,14.38,14.348,14.849z" />
                                                                            </svg>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
                                                            <div x-show="selected.length == 0" class="flex-1">
                                                                <input placeholder="Select a option"
                                                                    class="w-full h-full p-1 px-2 text-gray-800 bg-transparent outline-none appearance-none"
                                                                    x-bind:value="selectedValues()">
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="flex items-center w-8 py-1 pl-2 pr-1 text-gray-300 border-l border-gray-200 svelte-1l8159u">

                                                            <button type="button" x-show="isOpen() === true"
                                                                x-on:click="open"
                                                                class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                                                <svg version="1.1" class="w-4 h-4 fill-current"
                                                                    viewBox="0 0 20 20">
                                                                    <path d="M17.418,6.109c0.272-0.268,0.709-0.268,0.979,0s0.271,0.701,0,0.969l-7.908,7.83
                                          c-0.27,0.268-0.707,0.268-0.979,0l-7.908-7.83c-0.27-0.268-0.27-0.701,0-0.969c0.271-0.268,0.709-0.268,0.979,0L10,13.25
                                          L17.418,6.109z" />
                                                                </svg>

                                                            </button>
                                                            <button type="button" x-show="isOpen() === false"
                                                                @click="close"
                                                                class="w-6 h-6 text-gray-600 outline-none cursor-pointer focus:outline-none">
                                                                <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                                                                    <path d="M2.582,13.891c-0.272,0.268-0.709,0.268-0.979,0s-0.271-0.701,0-0.969l7.908-7.83
                                          c0.27-0.268,0.707-0.268,0.979,0l7.908,7.83c0.27,0.268,0.27,0.701,0,0.969c-0.271,0.268-0.709,0.268-0.978,0L10,6.75L2.582,13.891z
                                          " />
                                                                </svg>

                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="w-full px-4">
                                                    <div x-show.transition.origin.top="isOpen()"
                                                        class="absolute left-0 z-40 w-full bg-white rounded shadow top-100 max-h-select"
                                                        x-on:click.away="close">
                                                        <div class="flex flex-col w-full h-64 overflow-y-auto">
                                                            <template x-for="(option,index) in options" :key="option"
                                                                class="overflow-auto">
                                                                <div class="w-full border-b border-gray-100 rounded-t cursor-pointer hover:bg-gray-100"
                                                                    @click="select(index,$event)">
                                                                    <div
                                                                        class="relative flex items-center w-full p-2 pl-2 border-l-2 border-transparent">
                                                                        <div
                                                                            class="flex items-center justify-between w-full">
                                                                            <div class="mx-2 leading-6" x-model="option"
                                                                                x-text="option.text"></div>
                                                                            <div x-show="option.selected">
                                                                                <svg class="svg-icon"
                                                                                    viewBox="0 0 20 20">
                                                                                    <path fill="none"
                                                                                        d="M7.197,16.963H7.195c-0.204,0-0.399-0.083-0.544-0.227l-6.039-6.082c-0.3-0.302-0.297-0.788,0.003-1.087
                                                                  C0.919,9.266,1.404,9.269,1.702,9.57l5.495,5.536L18.221,4.083c0.301-0.301,0.787-0.301,1.087,0c0.301,0.3,0.301,0.787,0,1.087
                                                                  L7.741,16.738C7.596,16.882,7.401,16.963,7.197,16.963z"></path>
                                                                                </svg>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </template>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Attachments</label>
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
            function dropdown() {
                return {
                    options: [],
                    selected: [],
                    show: false,
                    open() {
                        this.show = true
                    },
                    close() {
                        this.show = false
                    },
                    isOpen() {
                        return this.show === true
                    },
                    select(index, event) {

                        if (!this.options[index].selected) {

                            this.options[index].selected = true;
                            this.options[index].element = event.target;
                            this.selected.push(index);

                        } else {
                            this.selected.splice(this.selected.lastIndexOf(index), 1);
                            this.options[index].selected = false
                        }
                    },
                    remove(index, option) {
                        this.options[option].selected = false;
                        this.selected.splice(index, 1);


                    },
                    loadOptions() {
                        const options = document.getElementById('select').options;
                        for (let i = 0; i < options.length; i++) {
                            this.options.push({
                                value: options[i].value,
                                text: options[i].innerText,
                                selected: options[i].getAttribute('selected') != null ? options[i].getAttribute(
                                    'selected') : false
                            });
                        }


                    },
                    selectedValues() {
                        return this.selected.map((option) => {
                            return this.options[option].value;
                        })
                    }
                }
            }
        </script>
        <script>
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
