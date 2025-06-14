@extends('templates.main')

@section('content')
<div class="container mt-5">
    <h2>Contact Us</h2>
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input 
                type="text" 
                class="form-control" 
                id="name" 
                name="name" 
                placeholder="Your Name"
                required
            >
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input 
                type="email" 
                class="form-control" 
                id="email" 
                name="email" 
                placeholder="your@example.com"
                required
            >
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input 
                type="tel" 
                class="form-control" 
                id="phone" 
                name="phone" 
                placeholder="+380123456789"
                required
            >
        </div>

        <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea 
                class="form-control" 
                id="message" 
                name="message" 
                rows="4"
                placeholder="Write your message here..."
                required
            ></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Send Message</button>
    </form>
</div>
@endsection