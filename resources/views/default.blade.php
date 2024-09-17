<style>
    .images{
        width: 100%;
        img{
            width: 100%;
        }
    }
</style>
@extends('layouts.main')

@section('banner')
    @if(isset($banner))
        <div class="images">
            <a href="/">
                <img src="{{ $banner }}" alt="banner1"/>
            </a>
        </div>
    @else
        @component('components.home.slider')
        @endcomponent
    @endif
@endsection

@section('main')
    {!! $content !!}
@endsection
