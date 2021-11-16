@extends('layouts.app')

@section('title'){{ $data->name }}'s message | Laravel.edu @endsection

@section('content')
    @if($data)
        <h1>{{ $data->name }}</h1>
        <p><small>{{ $data->created_at }}</small></p>
        <p>{{ $data->message }}</p>
    @endif
@endsection

@section('aside')
    @parent
@endsection
