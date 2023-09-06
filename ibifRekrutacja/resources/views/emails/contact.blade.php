@extends('templates.header')

@section('content')

<div class="mb-3 w-50 m-5">
    <h3> Contact </h3>
    <form action="/contact" method="POST">
        @csrf
        <label for="email" class="form-label"> Enter your email</label>
        <input name="email" type="email" placeholder="email" class="form-control">
        <label for="text" class="form-label">Enter password </label>
        <textarea name="message" placeholder="type your question here" class="form-control"> </textarea>
        <div class="mt-3">
            <button class="btn btn-primary"> Send email </button>
        </div>
        
    </form>
</div>
    
@endsection
