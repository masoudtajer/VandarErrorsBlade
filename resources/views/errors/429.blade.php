@extends('errors.layout')

@section('code', '429')
@section('title', __('Too Many Requests'))

@section('image')
    <div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('Sorry, you are making too many requests to our servers.'))
@section('text',('تعداد درخواست های شما به سرور زیاد میباشد'))
@section('btn')
    <a href="{{env('APP_URL')}}">
        <button type="button" class="btn btn-outline-light btn-pill btn-sm mt-3">صفحه نخست</button>
    </a>
@endsection
