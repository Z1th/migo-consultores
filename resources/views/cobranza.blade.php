@extends('layouts.index')

@section('content')
    <x-banner-page 
        url="assets/images/cobranza/banner.webp" 
        nameSection="Cobranza"
    />

    <x-cobranza-servicios />
    <x-cobranza-faq />
@endsection
