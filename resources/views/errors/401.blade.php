@extends('errors.layout')

@section('code', '401')
@section('title', __('Unauthorized'))
@section('text', __('Unauthorized'))

@section('image')
    <div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('Sorry, you are not authorized to access this page.'))
@section('text',('دسترسی غیر مجاز'))
@section('btn')
    <a href="{{env('APP_URL')}}">
        <button type="button" class="btn btn-outline-light btn-pill btn-sm mt-3">صفحه نخست</button>
    </a>
@endsection
