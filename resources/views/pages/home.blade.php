@extends('layouts.main')

@section('banner')
    @component('components.home.slider')
    @endcomponent
@endsection

@section('main')

    @component('components.home.company')
    @endcomponent

    @component('components.promotion0')
    @endcomponent

    @component('components.promotion')
    @endcomponent

@endsection
