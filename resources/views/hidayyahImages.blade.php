<x-app-layout>
    @section('title')
        Hidayyah Images
    @endsection
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Hidayyah Images') }}
        </h2>
    </x-slot>

    @include('components.multiimgeuploder')

    <section class="py-8 bg-white">
        <section class="grid grid-cols-1 gap-4 px-8 py-8 my-5 bg-white md:grid-cols-4">
            @foreach (File::glob(public_path('images/gallery/hidayyah/*')) as $file)
                <div class="relative">
                    <a href="{{ str_replace(public_path(), '', $file) }}" class="hover:opacity-75 " target="_new">
                        <img class="object-cover w-full h-64 lozad" src="{{ str_replace(public_path(), '', $file) }}"
                            alt="image.tags" />
                    </a>
                    <form
                        action="{{ route('hidayyah.image.destroy', ['any' => substr($file, strrpos($file, '/') + 1)]) }}"
                        method="post">
                        @csrf
                        <button type="submit"
                            class="absolute bottom-0 right-0 bg-red-500 text-white p-2 rounded hover:bg-red-700 m-2">Delete</button>
                    </form>
                </div>
            @endforeach
        </section>
    </section>
    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
        <script>
            const observer = lozad();
            observer.observe();
        </script>
    @endpush
</x-app-layout>
