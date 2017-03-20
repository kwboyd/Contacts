<?php
include 'header.php';
?>

<form method="POST" action="/create.php">

    <div class="form-group">
      <label for="fname">First Name</label>
      <input class="form-control" type="text" name="fname" id="fname" value="" placeholder="First Name"/>
    </div>

    <div class="form-group">
      <label for="lname">Last Name</label>
      <input class="form-control" type="text" name="lname" id="lname" value="" placeholder="Last Name"/>
    </div>

    <div class="form-group">
      <label for="phone">Telephone</label>
      <input class="form-control" type="tel" name="phone" id="phone" value="" placeholder="Telephone"/>
    </div>

    <div class="form-group">
      <label for="email">Email Address</label>
      <input class="form-control" type="email" name="email" id="email" value="" placeholder="Email"/>
    </div>

    <div class="form-group">
      <label for="street">Street Address</label>
      <input class="form-control" type="text" name="street" id="street" value="" placeholder="Street"/>
    </div>

    <div class="form-group">
      <label for="city">City</label>
      <input class="form-control" type="text" name="city" id="city" value="" placeholder="City"/>
    </div>

    <div class="form-group">
      <label for="state">State</label>
      <select name="state" id="state" value="AL" class="form-control">
          <option value="AL" selected>Alabama</option>
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
          <option value="AS">American Samoa</option>
          <option value="GU">Guam</option>
          <option value="MP">Northern Mariana Islands</option>
          <option value="PR">Puerto Rico</option>
          <option value="UM">United States Minor Outlying Islands</option>
          <option value="VI">Virgin Islands</option>
      </select>
    </div>

    <div class="form-group">
      <label for="zip">Zip Code</label>
      <input class="form-control" type="number" name="zip" id="zip" value="" placeholder="Zip"/>
    </div>

    <div class="form-group">
      <label for="notes">Notes</label>
      <textarea class="form-control" name="notes" id="notes" value="" placeholder="Notes"></textarea>
    </div>


    <button class="btn btn-primary">Create New Task</button>


</form>

<?php include 'footer.php'; ?>
