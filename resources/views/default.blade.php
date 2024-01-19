@extends('layouts.main')

@section('banner')
    @component('components.home.slider')
    @endcomponent
@endsection


@section('main')
    {!! $content !!}
@endsection
