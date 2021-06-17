@extends('layout.master')

@section('title', 'Report Format')


@section('content')
<h2>Registered Users</h2>
<table class="table">
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Address1</th>
        <th>Address2</th>
        <th>City</th>
        <th>State</th>
        <th>Zip</th>
        <th>Country</th>
        <th>Date</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($users as $user)
        <tr>
        <td>{{ stripslashes($user->first_name) }}</td>
        <td>{{ stripslashes($user->last_name) }}</td>
        <td>{{ stripslashes($user->address1) }}</td>
        <td>{{ stripslashes($user->address2) }}</td>
        <td>{{ stripslashes($user->city) }}</td>
        <td>{{ stripslashes($user->state) }}</td>
        <td>{{ stripslashes($user->zip) }}</td>
        <td>{{ stripslashes($user->country) }}</td>
        <td>{{ stripslashes($user->created) }}</td>
        </tr>
    @endforeach
</table>
@endsection