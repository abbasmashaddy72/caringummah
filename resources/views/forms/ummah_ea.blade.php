<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Ummah Add') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('ummah.store') }}" enctype="multipart/form-data">
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
                                    <label for="name" class="text-sm leading-7 text-gray-600">Connected
                                        With</label>
                                    <select name="connected_with"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        <option value="Masjid">Masjid</option>
                                        <option value="Madarsa">Madarsa</option>
                                        <option value="School">School</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">Qualification</label>
                                    <input type="text" id="name" name="qualification"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Occupation</label>
                                    <input type="text" id="email" name="occupation"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="name" class="text-sm leading-7 text-gray-600">member_count</label>
                                    <input type="number" id="name" name="member_count"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="w-1/2 p-2">
                                <div class="relative">
                                    <label for="email" class="text-sm leading-7 text-gray-600">Family
                                        Members</label>
                                    <input type="text" id="email" name="family_members"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
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
</x-app-layout>
