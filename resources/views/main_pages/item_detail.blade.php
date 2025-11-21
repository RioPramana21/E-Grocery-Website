@extends('layout.layout')

@section('title', 'Products')
@section('main')
  <div class="container">
    <div class="row">
        <div class="col-4 d-flex flex-column align-items-center">
            <h2 class="fw-bold"><u>{{ $item->item_name }}</u></h1>
            <img class="w-70 h-70 ratio ratio-1x1" src="{{ url('storage/'.$item->item_picture_link) }}"
            style="aspect-ratio: 1; object-fit: cover;">
        </div>
        <div class="col-8 d-flex flex-column justify-content-center">
            <h3 class="fw-semibold mb-3">Price: Rp. {{ $item->price }},-</h3>
            <p class="mb-3">{{ $item->item_desc }}</p>
            <form action="{{ route('add_to_cart') }}" method="POST">
                @csrf
                <input class="form-control visually-hidden" name="item_id" type="text"
                    value="{{ $item->id }}">
                <input class="form-control visually-hidden" name="item_price" type="text"
                    value="{{ $item->price }}">
                <button class="btn btn-outline-dark mt-auto" type="submit">
                    @lang('public.add to cart')
                </button>
            </form>
        </div>
    </div>
  </div>
@endsection
