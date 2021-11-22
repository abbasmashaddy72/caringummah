<x-app-layout>
    @section('title')
        Responses
    @endsection
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Responses') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                @livewire('response-table')
            </div>
        </div>
    </div>
</x-app-layout>
