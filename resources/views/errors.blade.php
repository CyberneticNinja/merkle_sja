@extends('layout.master')

@section('title', 'Error')

@section('content')
    <h1>There were errors in the submition</h1>
    <ul>
        @foreach ($errors as $error)
            <li id="warning">{{ $error }}</li>
        @endforeach
    </ul>
@endsection