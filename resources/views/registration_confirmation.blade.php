@extends('layout.master')

@section('title', 'Registration Confirmation')


@section('content')
<h2>Is this correct?</h2>
First Name : {{ $first_name }}
<br/>
Last Name : {{ $last_name }}
<br/>
Address 1 : {{ $address1 }}
<br/>
Address 2 : {{ $address2 }}
<br/>
City : {{ $city }}
<br/>
State : {{ $state }}
<br/>
Zip: {{ $zip }}
<br/>
Country : US
@endsection