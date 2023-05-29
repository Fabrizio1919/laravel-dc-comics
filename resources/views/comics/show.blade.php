@extends('layout.app')

@section('page.main')
    <div class="d-flex justify-content-between mb-5">
        <h1>{{ $comic->title }}</h1>
        @include('components.editZone')
    </div>

    <div class="row">
        <div class="col-auto">
            <img class="my-img" src="{{ $comic->thumb }}" alt="">
        </div>
        <div class="col">
            <h3>Description</h3>
            <p>{{ $comic->description }}</p>
            <h3>Writers</h3>
            <p>{{ $comic->writers }}</p>
            <h3>Artist</h3>
            <p>{{ $comic->artists }}</p>
        </div>
    </div>
    <div class="row">
        <span>{{ $comic->series }}</span>
    </div>
    <div class="row mt-5">
        <h4>Price:</h4>
        <span>{{ $comic->price }}$</span>
    </div>
    <div class="row mt-3">
        <h4>Sale Date:</h4>
        <span>{{ $comic->sale_date }}</span>
    </div>
@endsection