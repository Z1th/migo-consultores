@extends('layouts.index')

@section('content')
    <x-banner-page 
        url="assets/images/about-us/banner.webp" 
        nameSection="Nosotros"/>
    <x-what-we-do />
    {{-- <x-card-text-section /> --}}
    <x-mision-vision />
@endsection
