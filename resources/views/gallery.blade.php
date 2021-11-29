@extends('layouts.app')

@section('title')Gallery | Laravel.edu @endsection

@section('content')
    <div class="gallery">
        <h1>All photos</h1>
        @if(count($data))
            <div class="gallery__list">
                @foreach($data as $item)
                    <div class="card gallery__list-item" data-bs-toggle="modal" data-bs-target="#galleryModal-{{ $item->id }}">
                        <img src="{{ $item->source }}" alt="{{ $item->caption }}" class="bd-placeholder-img card-img-top">
                        <div class="card-body">
                            <p class="card-text">{{ $item->caption }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning">There's no photos yet. We're working on this.</div>
        @endif
    </div>
    <a href="{{ route('gallery.create') }}" class="btn btn-primary">Add photo</a>
@endsection

@section('aside')
    @parent
@endsection

<!-- Modals -->
@if(count($data))
    @foreach($data as $item)
        <div class="modal fade" id="galleryModal-{{ $item->id }}" tabindex="-1" aria-labelledby="galleryModalLabel-{{ $item->id }}" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="galleryModalLabel-{{ $item->id }}">{{ $item->caption }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <img class="gallery__image" src="{{ $item->source }}" alt="{{ $item->caption }}">
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endif
