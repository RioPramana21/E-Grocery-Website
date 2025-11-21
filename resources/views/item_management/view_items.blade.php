@extends('layout.layout')

@section('title', $title)
@section('main')
    <div class="items row row-cols-2 row-cols-sm-3 row-cols-lg-4 g-3 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="text-center">
                    <a href="/" class="btn btn-success">Add New Item</a>
                </div>
            </div>
        </div>
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
