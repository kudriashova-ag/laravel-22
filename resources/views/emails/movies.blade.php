<h1>New movies</h1>

<ol>
    @foreach ($movies as $movie)
        <li>
            <a href="">{{ $movie['title'] }}</a>
        </li>
    @endforeach
</ol>
