@extends('templates.header')

@section('content')

<div class="mb-3 w-50 m-5">
    <h3> Login </h3>
    <form action="/login" method="POST">
        @csrf
        <label for="email" class="form-label"> Enter email</label>
        <input name="email" type="email" placeholder="email" class="form-control">
        <label for="password" class="form-label">Enter password </label>
        <input name="password" type="password" placeholder="password" class="form-control">
        <div class="mt-3">
            <button class="btn btn-primary"> Login </button>
        </div>
        
    </form>
</div>
    
@endsection
