@extends('errors.layout')

@section('code', '500')
@section('title', __('Error'))

@section('image')
    <div style="background-image: url({{ asset('/svg/500.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('Whoops, something went wrong on our servers.'))
@section('text',('خطای سروری'))
@section('btn')
    <a href="{{env('APP_URL')}}">
        <button type="button" class="btn btn-outline-light btn-pill btn-sm mt-3">صفحه نخست</button>
    </a>
@endsection
