@extends('layouts.app')

@section('title')All news | Laravel.edu @endsection

@section('content')
    <h1>All news</h1>
    @if(count($data))
        @foreach($data as $item)
            <div class="alert alert-info">
                <h3>{{ $item->name }}</h3>
            </div>
        @endforeach
    @else
        <div class="alert alert-warning">There's no news yet. We're working on this.</div>
    @endif
@endsection

@section('aside')
    @parent
@endsection
