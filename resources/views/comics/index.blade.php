@extends('layout.app')


@section('page.main')
    {{-- <div class="container">
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-2 p-2">
                    <a href="{{ route('comics.show', $comic->id) }}"
                        class="d-flex flex-column justify-content-between align-items-center text-decoration-none item">
                        <img class="thumb" src="{{ $comic->thumb }}" alt="cover-img">
                        <h6 class="text-black">{{ $comic->title }}</h6>
                    </a>
                </div>
            @endforeach
        </div>
    </div> --}} 
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Edit</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td class=" align-middle">{{ $comic->title }}</td>
                    <td class=" align-middle">{{ $comic->price }}$</td>
                    <td class=" align-middle">{{ $comic->series }}</td>
                    <td class=" align-middle">
                    @include('components.editZone')
                    </td>
                    <td class=" align-middle">
                        <a href="{{ route('comics.show', $comic->id) }}">
                        @include('components.svg.show')
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
