@extends('layout.master')

@section('title', 'Registration Form')


@section('content')
<script>
  function subFunction() {
  if (confirm("Is all the information correct")) {
    // alert('you pressed submit');
    document.getElementById("form").submit(); 
  } else {
    // alert('you pressed canceled');
      document.getElementById("form").addEventListener("click", function(event){
        event.preventDefault()
      });
  }
  }
</script>
    <form action="http://localhost/merkle_sja/public/login" method="POST" id="form">
        <h1>Registration Form</h1>
        <div class="field">
        <label class="label">Username</label>
        <input class="input is-primary" type="text" placeholder="username" name="username" required>
        <label class="label">Password</label>
        <input class="input is-primary" type="password" placeholder="password" name="password" required>
          <br/>
          <br/>
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link" id="mySubmit" onclick="subFunction()">Submit</button>
            </div>
          </div>
        </div>
    </form>
@endsection