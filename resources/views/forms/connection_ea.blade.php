<x-app-layout>
    @section('title')
        Add Connection
    @endsection
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Connection') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form method="POST" action={{ $action }}>
                    @csrf
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
                                    <label for="name" class="text-sm leading-7 text-gray-600">Connected
                                        With</label>
                                    @php
                                        $connected = ['Masjid', 'Madarsa', 'School'];
                                    @endphp
                                    <select name="type"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($connected as $item)
                                            <option value="{{ $item }}" @if (!empty($data->type) && $data->type == $item) selected @endif>
                                                {{ $item }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- @php
                                echo $state_id;
                                echo '<br>';
                                echo $city_id;
                                echo '<br>';
                                echo $locality_id;
                                exit();
                            @endphp --}}
                            @if (Route::currentRouteName() == 'connection.create')
                                @livewire('city-locality-dropdown')
                            @else
                                @livewire('city-locality-dropdown',['state_id' => $state_id, 'city_id' =>
                                $city_id,'locality_id' => $locality_id])
                            @endif
                            <div class="w-full p-2 mb-4">
                                <button class="p-2 mx-auto text-white bg-gray-800 rounded" type="submit">
                                    {{ __('Save') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
