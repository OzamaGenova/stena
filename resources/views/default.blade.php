@extends('layouts.main')

@section('banner')
    @if(isset($banner1))
        <div>
            <img src="{{ $banner1 }}" alt="banner1"/>
        </div>
    @elseif(isset($banner2))
        <div>
            <img src="{{ $banner2 }}" alt="banner2"/>
        </div>
    @else
        @component('components.home.slider')
        @endcomponent
    @endif
@endsection


@section('main')
    {!! $content !!}
@endsection
