@extends('layout.layout')

@section('title', 'Home')
@section('main')
    <div class="d-flex justify-content-between align-items-center mb-3 flex-row">
        <h1 class="fw-bold fs-2 mb-0">@lang('public.our products')</h1>
    </div>

    <div class="items row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3 mb-3">
        @foreach ($items as $item)
            <div class="col">
                <div class="card position-relative h-100 shadow-sm">
                    <a href="{{ "/home/{$item->id}" }}">
                        <img class="w-100 h-100 ratio ratio-1x1" src="{{ url('storage/'.$item->item_picture_link) }}" alt=""
                            style="aspect-ratio: 1; object-fit: cover;" loading="lazy">
                    </a>
                    <div class="card-body">
                        <span class="card-text">{{ $item->item_name }}</span>
                        <div class="card-footer border-top-0 bg-transparent p-4 pt-0">
                            <div class="text-center">
                                <a href="{{ route('view-item', ['item' => $item]) }}" class="btn btn-danger">Detail</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $items->links('partials.pagination') }}
@endsection
