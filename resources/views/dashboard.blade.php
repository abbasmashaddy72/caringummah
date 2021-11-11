<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <section class="text-gray-600 body-font">
                    <div class="container px-5 py-5 mx-auto">
                        <div class="flex flex-wrap -m-4 text-center">
                            <div class="w-1/2 p-4 sm:w-1/4">
                                <div class="p-2 bg-indigo-500 rounded-lg xl:p-6">
                                    <h2 class="text-3xl font-medium text-white title-font sm:text-4xl">
                                        {{ $doctor_count }}</h2>
                                    <p class="font-bold leading-relaxed text-gray-100">Doctors</p>
                                </div>
                            </div>
                            <div class="w-1/2 p-4 sm:w-1/4">
                                <div class="p-2 bg-indigo-500 rounded-lg xl:p-6">
                                    <h2 class="text-3xl font-medium text-white title-font sm:text-4xl">
                                        {{ $ummah_count }}</h2>
                                    <p class="font-bold leading-relaxed text-gray-100">Ummahs</p>
                                </div>
                            </div>
                            <div class="w-1/2 p-4 sm:w-1/4">
                                <div class="p-2 bg-indigo-500 rounded-lg xl:p-6">
                                    <h2 class="text-3xl font-medium text-white title-font sm:text-4xl">
                                        {{ $patient_count }}</h2>
                                    <p class="font-bold leading-relaxed text-gray-100">Patients</p>
                                </div>
                            </div>
                            <div class="w-1/2 p-4 sm:w-1/4">
                                <div class="p-2 bg-indigo-500 rounded-lg xl:p-6">
                                    <h2 class="text-3xl font-medium text-white title-font sm:text-4xl">
                                        {{ $appointment_count }}</h2>
                                    <p class="font-bold leading-relaxed text-gray-100">Appointments</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</x-app-layout>
