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
    <form action="http://localhost/merkle_sja/public/register" method="POST" id="form">
        <h1>Registration Form</h1>
        <div class="field">
            <label class="label">First Name</label>
            <div class="control">
              <input class="input" type="text" placeholder="Gabriel" name="first_name" required>
            </div>
            <label class="label">Last Name</label>
            <div class="control">
              <input class="input" type="text" placeholder="Sumers" name="last_name" required>
            </div>
          </div>
          <label class="label">Address1</label>
          <div class="control">
            <input class="input" type="text" placeholder="90210 Blueberry Hills" name="address1" required>
          </div>
          <label class="label">Address2</label>
          <div class="control">
            <input class="input" type="text" placeholder="676 Blueberry Hills" name="address2">
          </div>
          <label class="label">City</label>
          <div class="control">
            <input class="input" type="text" placeholder="New Orleans" name="city" required>
          </div>
          
          <div class="field">
            <label class="label">State</label>
            <div class="control">
              <div class="select">
                    <select name="state" id="state">
                        <option value="AL">Alabama</option>
                        <option value="AK">Alaska</option>
                        <option value="AZ">Arizona</option>
                        <option value="AR">Arkansas</option>
                        <option value="CA">California</option>
                        <option value="CO">Colorado</option>
                        <option value="CT">Connecticut</option>
                        <option value="DE">Delaware</option>
                        <option value="DC">District Of Columbia</option>
                        <option value="FL">Florida</option>
                        <option value="GA">Georgia</option>
                        <option value="HI">Hawaii</option>
                        <option value="ID">Idaho</option>
                        <option value="IL">Illinois</option>
                        <option value="IN">Indiana</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                        <option value="ME">Maine</option>
                        <option value="MD">Maryland</option>
                        <option value="MA">Massachusetts</option>
                        <option value="MI">Michigan</option>
                        <option value="MN">Minnesota</option>
                        <option value="MS">Mississippi</option>
                        <option value="MO">Missouri</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NV">Nevada</option>
                        <option value="NH">New Hampshire</option>
                        <option value="NJ">New Jersey</option>
                        <option value="NM">New Mexico</option>
                        <option value="NY">New York</option>
                        <option value="NC">North Carolina</option>
                        <option value="ND">North Dakota</option>
                        <option value="OH">Ohio</option>
                        <option value="OK">Oklahoma</option>
                        <option value="OR">Oregon</option>
                        <option value="PA">Pennsylvania</option>
                        <option value="RI">Rhode Island</option>
                        <option value="SC">South Carolina</option>
                        <option value="SD">South Dakota</option>
                        <option value="TN">Tennessee</option>
                        <option value="TX">Texas</option>
                        <option value="UT">Utah</option>
                        <option value="VT">Vermont</option>
                        <option value="VA">Virginia</option>
                        <option value="WA">Washington</option>
                        <option value="WV">West Virginia</option>
                        <option value="WI">Wisconsin</option>
                        <option value="WY">Wyoming</option>
                      </select>
              </div>
            </div>
          </div>
          <label class="label">Zip</label>
          <div class="control">
            <input class="input" type="text" placeholder="542847862" maxlength= "9" name="zip" style="width: 150" required>
          </div>
          <label class="label">Country</label>
          <div class="control">
            <input class="input" type="text" placeholder="United States of America" disabled>
          </div>
          <br/>
          <div class="field is-grouped">
            <div class="control">
              <button class="button is-link" id="mySubmit" onclick="subFunction()">Submit</button>
            </div>
          </div>
    </form>
@endsection