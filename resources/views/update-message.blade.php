@extends('layouts.app')

@section('title')Update message | Laravel.edu @endsection

@section('content')
    <h1>Message updating</h1>

    <div class="contact__form">
        <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name" value="{{ $data->name }}">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Your email" value="{{ $data->email }}">
            </div>
            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" placeholder="Leave your message">{{ $data->message }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
@endsection
