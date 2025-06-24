@extends('templates.main')

@section('content')
    <h1>Movies</h1>

    <a href="{{ route('movies.create') }}" class="btn btn-primary">Create movie</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Title</th>
                <th>Category</th>
                <th>Actors</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{($movies->currentPage() - 1) * $movies->perPage() + $loop->iteration }}</td>
                    <td>
                        <img src="{{ asset('storage/' . $movie->image) }}" alt="{{ $movie->title }}" style="width:100px">
                    </td>
                    <td>{{ $movie->title }}</td>
                    <td>{{ $movie->category->name  }}</td>
                    <td>{!! $movie->actors->pluck('fullname')->implode(', <br> ') !!}</td> 
                    <td>
                        <a href="{{ route('movies.edit', $movie) }}" class="btn btn-primary"><i
                                class="bi bi-pen"></i></a>

                        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $movies->links() }}
@endsection
