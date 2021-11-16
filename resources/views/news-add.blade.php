@extends('layouts.app')

@section('title')Add news | Laravel.edu @endsection

@section('content')
    <h1>Creating news</h1>
    <p>Fill the form below to create your news.</p>
    <div class="contact__form">
        <form action="{{ route('news-add-submit') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" value="1" id="active" name="active" checked>
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="mb-3">
                <label for="preview_text" class="form-label">Preview text</label>
                <textarea class="form-control" id="preview_text" name="preview_text"></textarea>
            </div>
            <div class="mb-3">
                <label for="preview_image" class="form-label">Preview picture</label>
                <input class="form-control" type="file" id="preview_image" name="preview_image">
            </div>
            <div class="mb-3">
                <label for="detail_text" class="form-label">Detail text</label>
                <textarea class="form-control" id="detail_text" name="detail_text"></textarea>
            </div>
            <div class="mb-3">
                <label for="detail_image" class="form-label">Detail picture</label>
                <input class="form-control" type="file" id="detail_image" name="detail_image">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
