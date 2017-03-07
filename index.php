<?php
include 'header.php';
$contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
 ?>
      <div class="container">
          <table class="table">
            <thead>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Phone Number</th>
              <th>Email Address</th>
              <th>Street Address</th>
              <th>City</th>
              <th>State</th>
              <th>Zip</th>
              <th>Notes</th>
            </thead>
            <tbody>
              <?php foreach($contacts as $contact) : ?>
                <tr>
                  <td><?= $contact['fname']; ?></td>
                  <td><?= $contact['lname']; ?></td>
                  <td><?= $contact['phone']; ?></td>
                  <td><?= $contact['email']; ?></td>
                  <td><?= $contact['street']; ?></td>
                  <td><?= $contact['city']; ?></td>
                  <td><?= $contact['state']; ?></td>
                  <td><?= $contact['zip']; ?></td>
                  <td><?= $contact['notes']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
      </div>

<?php
include 'footer.php';
?>
