@extends('templates.header')

@section('content')

<h2>Welcome {{auth()->user()->name}} </h2>
    
@endsection