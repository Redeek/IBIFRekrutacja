@extends('templates.header')

@section('content')

<div class="mb-3 w-50 m-5">
    <h3> Zaloguj </h3>
    <form action="/login" method="POST">
        @csrf
        <label for="email" class="form-label"> Wprowadź email</label>
        <input name="email" type="email" placeholder="email" class="form-control">
        <label for="password" class="form-label">Wprowadź hasło </label>
        <input name="password" type="password" placeholder="password" class="form-control">
        <div class="mt-3">
            <button class="btn btn-primary"> Zaloguj </button>
        </div>
        
    </form>
</div>
    
@endsection
