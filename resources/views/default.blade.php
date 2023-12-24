@extends('layouts.main')

@section('banner')
    @component('components.banner')
    @endcomponent
@endsection

@section('main')
    {!! $content !!}
@endsection
