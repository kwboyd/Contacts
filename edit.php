<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<a href="/delete.php?id=<?= $contact['id']; ?>" class="btn">Delete Task</a>
<h1>Edit Task</h1>

<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="fname">First Name</label>
    <input class="form-control" type="text" name="fname" id="fname" value="<?= $contact['fname']; ?>" />
  </div>

  <div class="form-group">
    <label for="lname">Last Name</label>
    <input class="form-control" type="text" name="lname" id="lname" value="<?= $contact['lname']; ?>" />
  </div>

  <div class="form-group">
    <label for="phone">Telephone</label>
    <input class="form-control" type="tel" name="phone" id="phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group">
    <label for="email">Email Address</label>
    <input class="form-control" type="email" name="email" id="email" value="<?= $contact['email']; ?>" />
  </div>

  <div class="form-group">
    <label for="street">Street Address</label>
    <input class="form-control" type="text" name="street" id="street" value="<?= $contact['street']; ?>" />
  </div>

  <div class="form-group">
    <label for="city">City</label>
    <input class="form-control" type="text" name="city" id="city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group">
    <label for="state">State</label>
    <select name="state" id="state" value="<?= $contact['state']; ?>" class="form-control">
    	<option value="AL" <?= ($contact['state'] == 'AL') ? ' selected' : '' ?>>Alabama</option>
    	<option value="AK" <?= ($contact['state'] == 'AK') ? ' selected' : '' ?>>Alaska</option>
    	<option value="AZ" <?= ($contact['state'] == 'AZ') ? ' selected' : '' ?>>Arizona</option>
    	<option value="AR" <?= ($contact['state'] == 'AR') ? ' selected' : '' ?>>Arkansas</option>
    	<option value="CA"<?= ($contact['state'] == 'CA') ? ' selected' : '' ?>>California</option>
    	<option value="CO" <?= ($contact['state'] == 'CO') ? ' selected' : '' ?>>Colorado</option>
    	<option value="CT" <?= ($contact['state'] == 'CT') ? ' selected' : '' ?>>Connecticut</option>
    	<option value="DE" <?= ($contact['state'] == 'DE') ? ' selected' : '' ?>>Delaware</option>
    	<option value="DC" <?= ($contact['state'] == 'DC') ? ' selected' : '' ?>>District Of Columbia</option>
    	<option value="FL" <?= ($contact['state'] == 'FL') ? ' selected' : '' ?>>Florida</option>
    	<option value="GA" <?= ($contact['state'] == 'GA') ? ' selected' : '' ?>>Georgia</option>
    	<option value="HI" <?= ($contact['state'] == 'HI') ? ' selected' : '' ?>>Hawaii</option>
    	<option value="ID" <?= ($contact['state'] == 'ID') ? ' selected' : '' ?>>Idaho</option>
    	<option value="IL" <?= ($contact['state'] == 'IL') ? ' selected' : '' ?>>Illinois</option>
    	<option value="IN" <?= ($contact['state'] == 'IN') ? ' selected' : '' ?>>Indiana</option>
    	<option value="IA" <?= ($contact['state'] == 'IA') ? ' selected' : '' ?>>Iowa</option>
    	<option value="KS" <?= ($contact['state'] == 'KS') ? ' selected' : '' ?>>Kansas</option>
    	<option value="KY" <?= ($contact['state'] == 'KY') ? ' selected' : '' ?>>Kentucky</option>
    	<option value="LA" <?= ($contact['state'] == 'LA') ? ' selected' : '' ?>>Louisiana</option>
    	<option value="ME" <?= ($contact['state'] == 'ME') ? ' selected' : '' ?>>Maine</option>
    	<option value="MD" <?= ($contact['state'] == 'MD') ? ' selected' : '' ?>>Maryland</option>
    	<option value="MA" <?= ($contact['state'] == 'MA') ? ' selected' : '' ?>>Massachusetts</option>
    	<option value="MI" <?= ($contact['state'] == 'MI') ? ' selected' : '' ?>>Michigan</option>
    	<option value="MN" <?= ($contact['state'] == 'MN') ? ' selected' : '' ?>>Minnesota</option>
    	<option value="MS" <?= ($contact['state'] == 'MS') ? ' selected' : '' ?>>Mississippi</option>
    	<option value="MO" <?= ($contact['state'] == 'MO') ? ' selected' : '' ?>>Missouri</option>
    	<option value="MT" <?= ($contact['state'] == 'MT') ? ' selected' : '' ?>>Montana</option>
    	<option value="NE" <?= ($contact['state'] == 'NE') ? ' selected' : '' ?>>Nebraska</option>
    	<option value="NV" <?= ($contact['state'] == 'NV') ? ' selected' : '' ?>>Nevada</option>
    	<option value="NH" <?= ($contact['state'] == 'NH') ? ' selected' : '' ?>>New Hampshire</option>
    	<option value="NJ" <?= ($contact['state'] == 'NJ') ? ' selected' : '' ?>>New Jersey</option>
    	<option value="NM" <?= ($contact['state'] == 'NM') ? ' selected' : '' ?>>New Mexico</option>
    	<option value="NY" <?= ($contact['state'] == 'NY') ? ' selected' : '' ?>>New York</option>
    	<option value="NC" <?= ($contact['state'] == 'NC') ? ' selected' : '' ?>>North Carolina</option>
    	<option value="ND" <?= ($contact['state'] == 'ND') ? ' selected' : '' ?>>North Dakota</option>
    	<option value="OH" <?= ($contact['state'] == 'OH') ? ' selected' : '' ?>>Ohio</option>
    	<option value="OK" <?= ($contact['state'] == 'OK') ? ' selected' : '' ?>>Oklahoma</option>
    	<option value="OR" <?= ($contact['state'] == 'OR') ? ' selected' : '' ?>>Oregon</option>
    	<option value="PA" <?= ($contact['state'] == 'PA') ? ' selected' : '' ?>>Pennsylvania</option>
    	<option value="RI" <?= ($contact['state'] == 'RI') ? ' selected' : '' ?>>Rhode Island</option>
    	<option value="SC" <?= ($contact['state'] == 'SC') ? ' selected' : '' ?>>South Carolina</option>
    	<option value="SD" <?= ($contact['state'] == 'SD') ? ' selected' : '' ?>>South Dakota</option>
    	<option value="TN" <?= ($contact['state'] == 'TN') ? ' selected' : '' ?>>Tennessee</option>
    	<option value="TX" <?= ($contact['state'] == 'TX') ? ' selected' : '' ?>>Texas</option>
    	<option value="UT" <?= ($contact['state'] == 'UT') ? ' selected' : '' ?>>Utah</option>
    	<option value="VT" <?= ($contact['state'] == 'VT') ? ' selected' : '' ?>>Vermont</option>
    	<option value="VA" <?= ($contact['state'] == 'VA') ? ' selected' : '' ?>>Virginia</option>
    	<option value="WA" <?= ($contact['state'] == 'WA') ? ' selected' : '' ?>>Washington</option>
    	<option value="WV" <?= ($contact['state'] == 'WV') ? ' selected' : '' ?>>West Virginia</option>
    	<option value="WI" <?= ($contact['state'] == 'WI') ? ' selected' : '' ?>>Wisconsin</option>
    	<option value="WY" <?= ($contact['state'] == 'WY') ? ' selected' : '' ?>>Wyoming</option>
      <option value="AS" <?= ($contact['state'] == 'AS') ? ' selected' : '' ?>>American Samoa</option>
      <option value="GU" <?= ($contact['state'] == 'GU') ? ' selected' : '' ?>>Guam</option>
      <option value="MP" <?= ($contact['state'] == 'MP') ? ' selected' : '' ?>>Northern Mariana Islands</option>
      <option value="PR" <?= ($contact['state'] == 'PR') ? ' selected' : '' ?>>Puerto Rico</option>
      <option value="UM" <?= ($contact['state'] == 'UM') ? ' selected' : '' ?>>United States Minor Outlying Islands</option>
      <option value="VI" <?= ($contact['state'] == 'VI') ? ' selected' : '' ?>>Virgin Islands</option>
    </select>
  </div>

  <div class="form-group">
    <label for="zip">Zip Code</label>
    <input class="form-control" type="number" name="zip" id="zip" value="<?= $contact['zip']; ?>" />
  </div>

  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea class="form-control" name="notes" id="notes" value="<?= $contact['notes']; ?>"></textarea>
  </div>


  <button class="btn">Save Task</button>
</form>

<?php include 'footer.php'; ?>
