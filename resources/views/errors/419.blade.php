@extends('errors.layout')

@section('code', '419')
@section('title', __('Page Expired'))

@section('image')
    <div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __('Sorry, your session has expired. Please refresh and try again.'))
@section('text',('نشست شما به پایان رسیده است. بر روی دکمه زیر کلیک کنید.'))
@section('btn')
    <a href="{{url()->full()}}">
        <button type="button" class="btn btn-outline-light btn-pill btn-sm mt-3">برای ادامه کلیک کنید</button>
    </a>
@endsection
