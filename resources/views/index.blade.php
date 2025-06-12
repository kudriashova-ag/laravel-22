@extends('templates.main')

@section('content')

    <h1>{{$title}}</h1>
    <h2>{!! $subtitle !!}</h2>

    @foreach($users as $user)
        <div>{{$loop->iteration}}. {{$user}}</div>
    @endforeach


@endsection


@section('title', 'Home - Laravel Project')

