@extends('errors.layout')

@section('code', '404')
@section('title', __('Page Not Found'))

@section('image')
    <div style="background-image: url({{ asset('/svg/404.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('Sorry, the page you are looking for could not be found.'))
@section('text',('صفحه مورد نظر در حال حاضر در دسترس نیست. لطفا در زمانی دیگر مجدادا تلاش نمایید'))
@section('btn')
    <a href="{{env('APP_URL')}}">
        <button type="button" class="btn btn-outline-light btn-pill btn-sm mt-3">صفحه نخست</button>
    </a>
@endsection
