@extends('homepage.index')
@section('content')
    {{-- @yield('content') --}}
    @include('homepage-features.carousel')
    @include('homepage-features.product')
@stop