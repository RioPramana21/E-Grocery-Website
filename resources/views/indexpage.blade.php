@extends('layout.layout')

@section('title', 'Starting Page')
@section('main')
    <div class="container">
        <div class="container text-black p-1 mb-1">
            <h2 class="d-flex justify-content-center py-5 my-5">
                @lang('public.find and buy your grocery here!')
            </h2>
        </div>
    </div>
@endsection
