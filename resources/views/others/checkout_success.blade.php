@extends('layout.layout')

@section('title', 'Checkout Successful')

@section('main')

    <div class="text-center">
        <h1 class="text-success text-center justify-center mb-5">@lang('public.successfully made an order')</h1>
        <a href="/home">
            <button class="w-30 btn btn-dark">@lang('public.back to home')</button>
        </a>
    </div>

@endsection
