<?php
include 'header.php';
$contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
//fetches all contacts from database
 ?>
 <div class="col-12">


 <div class="intro-text">
   <?php if (array_key_exists('deleted', $_GET)) : ?>
     <div class="alert alert-danger col-sm-5" role="alert">
       <p>Contact deleted! Your contact was successfully removed.</p>
     </div>
   <?php endif; ?>
 <h1> Contact manager: </h1>
 <h5> View all of the added contacts here. Click on 'New Contact' above to add a contact to the database. Click on one of the contacts below to edit or delete it.</h2>
</div>
 <h4> Total contacts: <span class="strong"><?= count($contacts); ?></span> </h3>
 <!-- counts contacts -->
          <table class="table table-striped">
            <thead>
              <th>ID</th>
              <th>First Name</th>
              <th>Last Name</th>
              <th>Title</th>
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
                <!-- displays each contact's information -->
                <tr>
                  <td class="mobile-large" data-title="ID"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['id']; ?></a></td>
                  <td class="mobile-large" data-title="First Name"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['fname']; ?></a></td>
                  <td class="mobile-large" data-title="Last Name"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['lname']; ?></a></td>
                  <td data-title="Title"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['title']; ?></a></td>
                  <td data-title="Phone"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['phone']; ?></a></td>
                  <td data-title="Email"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['email']; ?></a></td>
                  <td data-title="Street"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['street']; ?></a></td>
                  <td class="mobile-inline-block" data-title="City"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['city']; ?></a></td>
                  <td class="mobile-inline-block" data-title="State"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['state']; ?></a></td>
                  <td class="mobile-inline-block" data-title="Zip"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['zip']; ?></a></td>
                  <td class="notes" data-title="Notes"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['notes']; ?></a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
      </div>
</div>

<?php
include 'footer.php';
?>
