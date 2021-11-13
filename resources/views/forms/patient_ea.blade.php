<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Patient Add') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('patient.store') }}">
                    @csrf
                    <div class="mx-auto lg:w-1/2 md:w-2/3">
                        <div class="flex flex-wrap -m-2">
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Name</label>
                                    <input type="text" id="name" name="name"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="number" class="text-sm leading-7 text-gray-600">Phone</label>
                                    <input type="number" id="email" name="phone"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Location</label>
                                    <input type="text" id="name" name="location"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Relation</label>
                                    <select name="relation"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        <option value="father">Father</option>
                                        <option value="mother">Mother</option>
                                        <option value="son">Son</option>
                                        <option value="daughter">Daughter</option>
                                        <option value="husband">husband</option>
                                        <option value="wife">wife</option>
                                        <option value="brother">brother</option>
                                        <option value="sister">sister</option>
                                        <option value="grandfather">grandfather</option>
                                        <option value="grandmother">grandmother</option>
                                        <option value="grandson">grandson</option>
                                        <option value="granddaughter">granddaughter</option>
                                        <option value="uncle">uncle</option>
                                        <option value="aunt">aunt</option>
                                        <option value="nephew">nephew</option>
                                        <option value="niece">niece</option>
                                        <option value="cousin">cousin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full p-2 mb-4">
                                <button class="p-2 mx-auto text-white bg-gray-800 rounded" type="submit">
                                    {{ __('Add Patient') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
