@if (session('success'))
    <div class="alert alert-{{$type}}">
        {{ session('success') }}
    </div>
@endif
