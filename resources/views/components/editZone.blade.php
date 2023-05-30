<div class="d-flex gap-2 align-items-center">
    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">
            @include('components.svg.delete')
        </button>
    </form>
    <a href="{{ route('comics.edit', $comic->id) }}"
        class="btn btn-warning btn-sm d-inline-block">@include('components.svg.edit')</a>
</div>