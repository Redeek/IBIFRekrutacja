@extends('templates.header')

@section('content')

<h2>{{__('messages.welcome')}} {{auth()->user()->name}}!</h2>
    
@endsection