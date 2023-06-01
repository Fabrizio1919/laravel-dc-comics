@extends('layout.app')


@section('page.main')
    
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Image</th>
                <th scope="col">Title</th>
                <th scope="col">Price</th>
                <th scope="col">Series</th>
                <th scope="col">Edit</th>
                <th scope="col">Show</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td class="align-middle">
                        <img width="200" src="{{ $comic->thumb }}" alt="">
                    </td>
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
