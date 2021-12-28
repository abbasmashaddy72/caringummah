<x-app-layout>
    @section('title')
        Doctors
    @endsection
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Doctors') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                <div class="flex justify-between">
                    <div class="">
                        <form action="{{ route('doctor.import') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="px-4 py-2 m-5">
                                <input required
                                    class="form-control block px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                    type="file" name="import">
                                <button
                                    class="inline-flex items-center px-4 py-2 mt-2 text-xs font-semibold tracking-widest text-white uppercase transition bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25">
                                    Import Doctors
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="">
                        <a href="{{ route('doctor.create') }}">
                            <button
                                class='inline-flex items-center px-4 py-2 m-5 text-xs font-semibold tracking-widest text-white uppercase transition bg-gray-800 border border-transparent rounded-md hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25'>
                                Add Doctor
                            </button>
                        </a>
                    </div>
                </div>
                @livewire('doctor-table')
            </div>
        </div>
    </div>
</x-app-layout>
