@extends('layouts.app')

@section('title'){{ $data->name }} | Laravel.edu @endsection

@section('content')
    <div class="news__detail">
        <div class="news__detail-head">
            <h1>{{ $data->name }}</h1>
            <div class="news__detail-date">{{ $data->created_at }}</div>
            @if($data->detail_image)
            <div class="news__detail-img">
                <img src="{{ $data->detail_image }}" alt="{{ $data->name }}">
            </div>
            @endif
        </div>
        <div class="news__detail-body">
            {!! html_entity_decode($data->detail_text) !!}
        </div>
        <div class="news__detail-footer">
            <a href="{{ route('news') }}" class="btn btn-secondary">Back to list</a>
        </div>
    </div>
@endsection

@section('aside')
    @parent
@endsection
