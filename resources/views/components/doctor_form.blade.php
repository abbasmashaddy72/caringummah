<section id="jh" class="container py-6 mx-auto mb-12">
    <div class="container px-5 py-24 mx-auto">
        <div class="flex flex-wrap -m-4">
            <div class="relative z-10 flex flex-col w-full p-4 p-8 mt-10 md:ml-auto md:mt-0">
                <div class="rounded-lg bg-light-blue-100 gradient">
                    <h2 class="font-semibold text-center text-white lg:m-5 sm:m-3 lg:text-6xl sm:text-3xl title-font">
                        Join Hands With Us
                    </h2>
                </div>
                <div class="max-w-full py-4 sm:px-6 lg:px-8">
                    <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                        @include('components.message')
                    </div>
                </div>
                <form method="POST" action={{ route('doctor.store') }}>
                    @csrf
                    <div class="mx-auto">
                        <div class="flex flex-wrap m-5">
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Name</label>
                                    <input type="text" name="name"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Department Name</label>
                                    <select name="department_id" id="department_id"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        @foreach ($dept_data as $item)
                                            <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Qualification</label>
                                    <input type="text" name="qualification"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">State</label>
                                    <select id='selState' name='state'
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        <option value=''>-- Select State --</option>
                                        @foreach ($states as $item)
                                            <option value="{{ $item->id }}">
                                                {{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label
                                        class="text-sm leading-7 text-gray-600">City&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                                    <select id='selCity' name="city"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        <option value=''>-- Select State First --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Locality</label>
                                    <select id='selLocality' name='locality_id'
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                        <option value='0'>-- Select City First --</option>
                                    </select>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Personal Number (Will
                                        not be shared with anyone)</label>
                                    <input type="number" name="phone"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Clinic/Hospital
                                        Name</label>
                                    <input type="text" name="hospital_name"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Monthly Free Consultation
                                        Slots</label>
                                    <input type="number" name="monthly_slots"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Clinic/Hospital
                                        Phone</label>
                                    <input type="number" name="hospital_phone"
                                        class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Clinic/Hospital
                                        Address</label>
                                    <textarea name="hospital_address"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200"></textarea>
                                </div>
                            </div>

                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">Special
                                        Services</label>
                                    <textarea name="extra_services"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200"></textarea>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="relative">
                                    <label class="text-sm leading-7 text-gray-600">About You (What
                                        Patients want to Know about You?)</label>
                                    <textarea name="about"
                                        class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200"></textarea>
                                </div>
                            </div>
                            <div class="p-2 lg:w-1/2">
                                <div class="w-auto mb-3">
                                    <label for="formFile" class="inline-block mb-2 text-gray-700 form-label">Please
                                        Upload your Images</label>
                                    <input
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        type="file" id="formFile">
                                </div>
                            </div>

                        </div>
                        <div class="w-full p-2 mb-4">
                            <button
                                class="px-6 py-2 ml-2.5 text-lg text-white bg-blue-900 border-0 rounded focus:outline-none hover:bg-blue-700">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
