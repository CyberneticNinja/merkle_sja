@extends('layout.master')

@section('title', 'Home')


@section('content')
<h1>Software Engineering Assignment</h1>
Develop a web based registration application using your choice of server-side (PHP, Java, Python, Perl,
etc.) and front-end technologies.

<h2>Application Requirements</h2>
<h3>Required Pages</h3>
<ul>
    <li>Registration Form</li>
    <li>Confirmation</li>
    <li>Registered User Report</li>
</ul>
<h2>User Registration</h2>
Flow
Registration Form -> Confirmation

<h2>Required Form Fields</h2>
<ul>
    <li>First Name</li>
    <li>Last Name</li>
    <li>Address1</li>
    <li>Address2</li>
    <li>City</li>
    <li>State</li>
    <li>Zip (5 or 9 digit)</li>
    <li>Country (US only)</li>
</ul>
<p>
The form should perform both client side and server side field validation. All data must be stored in a
database for later reporting purposes.
</p>
<h2>Admin Report</h2>

Flow
<p><em>Registered User Report</em></p>
Report Format
<p>The admin report must display all registered users sorted in descending order by date of registration.</p>
@endsection