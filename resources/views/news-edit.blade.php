@extends('layouts.app')

@section('title')Editing news | Laravel.edu @endsection

@section('content')
    <h1>Editing news</h1>
    <div class="contact__form">
        <form action="{{ route('news-edit-submit', $data->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $data->name }}">
            </div>
            <div class="mb-3 form-check">
                <input class="form-check-input" type="checkbox" value="1" id="active" name="active" {{ ($data->checked ? 'checked' : '') }}>
                <label class="form-check-label" for="active">Active</label>
            </div>
            <div class="mb-3">
                <label for="preview_text" class="form-label">Preview text</label>
                <textarea class="form-control" id="preview_text" name="preview_text">{{ $data->preview_text }}</textarea>
            </div>
            <div class="mb-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $data->preview_image }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Current preview picture</h5>
                        <p class="card-text">If you want to change preview picture - upload new one using field below.</p>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="preview_image" class="form-label">Preview picture</label>
                <input class="form-control" type="file" id="preview_image" name="preview_image">
            </div>
            <div class="mb-3">
                <label for="detail_text" class="form-label">Detail text</label>
                <textarea class="form-control" id="detail_text" name="detail_text">{{ $data->detail_text }}</textarea>
            </div>
            <div class="mb-3">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="{{ $data->detail_image }}" alt="">
                    <div class="card-body">
                        <h5 class="card-title">Current detail picture</h5>
                        <p class="card-text">If you want to change detail picture - upload new one using field below.</p>
                    </div>
                </div>
            </div>
            <div class="mb-3">
                <label for="detail_image" class="form-label">Detail picture</label>
                <input class="form-control" type="file" id="detail_image" name="detail_image">
            </div>

            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="{{ route('news') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@endsection
