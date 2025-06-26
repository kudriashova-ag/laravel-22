@extends('templates.main')

@section('content')
    <div class="container mt-5">
        <h2>Contact Us</h2>

        @include('templates.errors')

        {{-- <x-message.success :type="'warning'"/> --}}

        <form action="{{ route('contacts.send') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" id="name" name="name"
                    placeholder="Your Name">
                @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" id="email" name="email" placeholder="your@example.com">
                @error('email')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="tel" class="form-control @error('phone') is-invalid @enderror" value="{{ old('phone') }}" id="phone" name="phone" placeholder="+380123456789">
                @error('phone')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" rows="4" placeholder="Write your message here...">{{old('message')}}</textarea>
                @error('message')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
@endsection
