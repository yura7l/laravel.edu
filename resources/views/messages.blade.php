@extends('layouts.app')

@section('title')All messages | Laravel.edu @endsection

@section('content')
    <h1>All messages</h1>
    @foreach($data as $item)
        <div class="alert alert-info">
            <h3>{{ $item->name }}</h3>
            <p><small>{{ $item->created_at }}</small></p>
            <div class="d-flex justify-content-between">
                <div>
                    <a href="{{ route('contact-single', $item->id) }}" class="btn btn-primary">Read Message</a>
                    <a href="{{ route('contact-update', $item->id) }}" class="btn btn-warning">Update Message</a>
                </div>
                <div>
                    <a href="{{ route('contact-delete', $item->id) }}" class="btn btn-danger">Delete Message</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection

@section('aside')
    @parent
@endsection
