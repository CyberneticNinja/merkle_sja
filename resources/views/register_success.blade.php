@extends('layout.master')

@section('title', 'Registration Form')


@section('content')
<h2>Registration successful</h2>
<h3>Redirecting in 5 seconds</h3>
<script>
    setTimeout(function(){
       window.location.href = 'http://45.77.75.226/merkle_sja/public';
    }, 5000);
 </script>
@endsection
