@extends('templates.main')

@section('content')
    <h1>Categories</h1>
    
    <a href="{{route('categories.create')}}" class="btn btn-primary my-3">Create Category</a>

    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Description</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>
                        <img src="{{asset('storage/' . $category->image)}}" alt="{{$category->name}}" style="width: 100px">
                    </td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->short_description}}</td>
                    <td>
                        <a href="{{route('categories.edit', $category->id)}}" class="btn btn-warning">Edit</a>

                        <form action="{{route('categories.destroy', $category->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection