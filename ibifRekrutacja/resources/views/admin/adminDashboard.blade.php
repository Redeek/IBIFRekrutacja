@extends('templates.header')

@section('content')

<h2> Admin dashboard  {{auth()->user()->name}}</h2>
    
@endsection