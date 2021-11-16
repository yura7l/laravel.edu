@extends('layouts.app')

@section('title')All news | Laravel.edu @endsection

@section('content')
    <div class="news__list">
        <h1>All news</h1>
        @if(count($data))
            @foreach($data as $item)
                <div class="news__item">
                    <div class="news__item-img">
                        <img src="{{ $item->preview_image }}" alt="{{ $item->name }}">
                    </div>
                    <div class="news__item-body">
                        <div class="news__item-date">{{ $item->created_at }}</div>
                        <a href="{{ route('news-detail', $item->id)}}" class="news__item-title">{{ $item->name }}</a>
                        <div class="news__item-text">{{ $item->preview_text }}</div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="alert alert-warning">There's no news yet. We're working on this.</div>
        @endif
    </div>
    <a href="{{ route('news-add') }}" class="btn btn-primary">Add news</a>
@endsection

@section('aside')
    @parent
@endsection
