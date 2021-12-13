@extends('layouts.welcome')
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/select2.css') }}">
@endsection
@section('section')
    <section class="py-8 bg-white">
        @livewire('live-search')
    </section>
@endsection
