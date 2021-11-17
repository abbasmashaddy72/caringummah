<x-app-layout>
    @section('title')
        Add Doctor
    @endsection
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Add Doctor') }}
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
                                    <label for="name" class="text-sm leading-7 text-gray-600">Department Name</label>
                                    <select name="department_id"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($dept_data as $item)
                                            <option value="{{ $item->id }}" @if (!empty($data->department_id) && $data->department_id == $item->id) selected @endif>
                                                {{ $item->title }}</option>
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
                                    <label for="number" class="text-sm leading-7 text-gray-600">Phone
                                        Number</label>
                                    <input type="number" id="email" name="phone" value="{{ $data->phone ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Clinic/Hospital
                                        Name</label>
                                    <input type="text" id="name" name="hospital_name"
                                        value="{{ $data->clinic_hospital_name ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Monthly
                                        Slots</label>
                                    <input type="number" id="email" name="monthly_slots"
                                        value="{{ $data->monthly_slots ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-full p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Clinic/Hospital
                                        Phone</label>
                                    <input type="number" id="name" name="hospital_phone"
                                        value="{{ $data->clinic_hospital_phone ?? '' }}"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>

                            <br>
                            <br>

                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Clinic/Hospital
                                        Address</label>
                                    <textarea id="email" name="hospital_address"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $data->clinic_hospital_address ?? '' }}</textarea>
                                </div>
                            </div>

                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Extra
                                        Services</label>
                                    <textarea id="message" name="extra_services"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $data->extra_services ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="w-full p-2">
                                <div class="relative">
                                    <label for="message" class="text-sm leading-7 text-gray-600">Suggestions</label>
                                    <textarea id="message" name="suggestions"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">{{ $data->suggestions ?? '' }}</textarea>
                                </div>
                            </div>
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
