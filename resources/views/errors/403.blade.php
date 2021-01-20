@extends('errors.layout')

@section('code', '403')
@section('title', __('Forbidden'))

@section('image')
    <div style="background-image: url({{ asset('/svg/403.svg') }});" class="absolute pin bg-cover bg-no-repeat md:bg-left lg:bg-center">
    </div>
@endsection

@section('message', __($exception->getMessage() ?: 'Sorry, you are forbidden from accessing this page.'))
@section('text',('متاسفانه اجازه ی دسترسی به این صفحه را ندارید'))
@section('btn')
    <a href="{{env('APP_URL')}}">
        <button type="button" class="btn btn-outline-light btn-pill btn-sm mt-3">صفحه نخست</button>
    </a>
@endsection
