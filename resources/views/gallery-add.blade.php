@extends('layouts.app')

@section('title')Gallery | Laravel.edu @endsection

@section('content')
    <div class="gallery">
        <h1>Add a photo</h1>
        <div class="gallery__form">
            <form action="{{ route('gallery.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="source" class="form-label">Photo</label>
                    <input class="form-control" type="file" id="source" name="source">
                </div>
                <div class="mb-3">
                    <label for="caption" class="form-label">Caption</label>
                    <input type="text" class="form-control" id="caption" name="caption">
                </div>

                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </div>
@endsection

@section('aside')
    @parent
@endsection
