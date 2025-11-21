@extends('layout.layout')

@section('title', 'Saved Update')
@section('main')
    <div class="container">
        <div class="container text-black p-1 mb-1">
            <h2 class="d-flex justify-content-center py-5 my-5">
                Saved!
            </h2>
            <a href="/profile">
                <button class="w-30 btn btn-dark">@lang('public.back to profile')</button>
            </a>
        </div>
    </div>
@endsection
