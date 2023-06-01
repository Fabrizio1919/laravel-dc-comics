@extends('layout.app')

@section('page.title')
<div class="container">
    <div class="d-flex justify-content-between">
        <div class="me-3">
            <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary btn-sm">Back</a>
        </div>
        <h1>{{ $comic->title }}</h1>
        <div>
            <button id="delete-btn" class="btn btn-danger btn-sm">Delete</button>
        </div>
    </div>
</div>
@endsection

@section('page.main')
<div class="container p-2 position-relative">
    @include('partial.error')
    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" name="title" value="{{old('title', $comic->title)}">
            @error('title')
            <div class="alert alert-danger" role="alert">
                <strong>Error: Title</strong>
            </div>
            @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" @error('description') is-invalid @enderror id="description" name="description"
                    value="{{old('description', $comic->description)}">
                    @error('description')
            <div class="alert alert-danger" role="alert">
                <strong>Error: Description</strong>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Image link</label>
            <input type="text" class="form-control" @error('thumb') is-invalid @enderror id="thumb" name="thumb" value="{{old('thumb', $comic->thumb)}">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" @error('price') is-invalid @enderror id="price" name="price" value="{{old('price', $comic->price)}">
            @error('price')
            <div class="alert alert-danger" role="alert">
                <strong>Error: Price</strong>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control" @error('series') is-invalid @enderror id="series" name="series" value="{{old('series', $comic->series)}">
            @error('series')
            <div class="alert alert-danger" role="alert">
                <strong>Error: Series</strong>
            </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="sale_date">Sale date:</label>
            <input type="date" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}">
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection