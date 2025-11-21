@extends('layout.layout')

@section('title', $title)
@section('main')
@if($message=Session::get('success_message'))
    <div class="card col-6 mx-auto mt-5 alert alert-success" role="alert" style="width:30rem;">
        {{$message}}
    </div>
@endif
<div class="container mt-5 ml-5">
    <div class="row mb-2">
        <div class="display-6 mb-3" style="text-decoration: underline">@lang('public.my cart')</div>
        @if (count($orders) == 0)
            <p class="fw-bold">@lang('public.no products in cart!')</p>
        @else
        <div class="row no-gutters">
            @foreach ($orders as $order)
            <div class="row mb-4">
                <div class="col-3 my-auto">
                    <img src="{{ url('storage/'.$order->items->item_picture_link) }}" class="card-img w-50 h-50" alt="{{ $order->items->item_name}}">
                </div>
                <div class="col-3 my-auto">
                    <h5 class="card-title">{{ $order->items->item_name}}</h5>
                </div>
                <div class="col-3 my-auto">
                    <h5 class="card-title">Rp. {{ $order->items->price}},-</h5>
                </div>
                <div class="col-3 my-auto">
                    <form action="{{route('delete_item', ['id'=>$order->id])}}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger" type="submit">
                            @lang('public.delete')
                        </button>
                    </form>
                </div>
            </div>
            @endforeach
            <div class="row mb-4">
                <div class="col-3 mx-auto"></div>
                <div class="col-3 mx-auto"></div>
                <div class="col-3 mx-auto my-auto">
                    <h5>@lang('public.total price'): Rp. {{$total_price}},-</h5>
                </div>
                <div class="col-3 mx-auto my-auto">
                    <form action="{{route('check_out')}}" method="POST">
                        @method('delete')
                        @csrf
                        <button class="btn btn-success" type="submit">
                            @lang('public.checkout')
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@endsection
