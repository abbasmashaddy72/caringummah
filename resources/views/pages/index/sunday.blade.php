@extends('layouts.welcome')
@section('section')
    <section class="py-8 bg-white">
        <section class="grid grid-cols-1 gap-4 px-8 py-8 my-5 bg-white md:grid-cols-4">
            @foreach (File::glob(public_path('images/gallery/sunday/*')) as $file)
                <a href="{{ str_replace(public_path(), '', $file) }}" class="hover:opacity-75 " target="_new">
                    <img class="object-cover w-full h-64 lozad" src="{{ str_replace(public_path(), '', $file) }}"
                        alt="image.tags" />
                </a>
            @endforeach
        </section>
    </section>
@endsection
@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
    <script>
        const observer = lozad();
        observer.observe();
    </script>
@endsection
