@extends('layout.app')

@section('page.title')
    <div class="container d-flex">
        <div class="me-3">
            <a href="{{ route('comics.index') }}" class="btn btn-primary btn-sm">Back</a>
        </div>
        <h1>Create new comic</h1>
    </div>
@endsection

@section('page.main')
    <div class="container">
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{old('title')}}">
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{old('descriprion')}}">
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Image link</label>
                <input type="text" class="form-control" id="thumb" name="thumb" value="{{old('thumb')}}">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input type="number" class="form-control" id="price" name="price" value="{{old('price')}}">
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Series</label>
                <input type="text" class="form-control" id="series" name="series" value="{{old('series')}}">
            </div>

            <div class="mb-3">
                <label for="sale_date">Sale date:</label>
                <input type="date" id="sale_date" name="sale_date">

            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
