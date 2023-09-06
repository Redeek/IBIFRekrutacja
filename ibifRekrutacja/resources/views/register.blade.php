@extends('templates.header')

@section('content')

<div class="mb-3 w-50 m-5">
    <h3> Rejestracja konta </h3>
    <form action="/register" method="POST">
        @csrf
        <label for="name" class="form-label">Ustaw swój pseudonim</label>
        <input id=name name="name" type="text" placeholder="name" class="form-control">
        <label for="email" class="form-label"> Ustaw swój email</label>
        <input name="email" type="email" placeholder="email" class="form-control">
        <label for="password" class="form-label">Ustaw swoje hasło</label>
        <input name="password" type="password" placeholder="password" class="form-control">
        <div class="mt-3">
            <button class="btn btn-primary"> Zarejestruj </button>
        </div>
        
    </form>
</div>
    
@endsection