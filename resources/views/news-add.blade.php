@extends('layouts.app')

@section('title')Add news | Laravel.edu @endsection

@section('content')
    <h1>Creating news</h1>
    <p>Fill the form below to create your news.</p>
    <div class="contact__form">
        <form action="{{ route('news-add-submit') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
