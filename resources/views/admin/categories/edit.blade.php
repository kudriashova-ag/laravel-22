@extends('templates.main')

@section('content')
    <h1>Edit Category</h1>

    @include('templates.errors')

    <form action="{{route('categories.update', $category->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$category->name}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" id="description" name="description" value="{{$category->description}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    
@endsection