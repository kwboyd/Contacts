<?php
include 'header.php';
$contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
//fetches all contacts from database
 ?>
 <div class="col-12">
 <?php if (array_key_exists('deleted', $_GET)) : ?>
   <div class="alert">
     <p>Contact deleted.</p>
   </div>
 <?php endif; ?>
 <?php if (array_key_exists('updated', $_GET)) : ?>
 <div>
   <p>Task updated.</p>
 </div>
 <?php endif; ?>

 <?php if (array_key_exists('created', $_GET)) : ?>
 <div>
   <p>Task created.</p>
 </div>
 <?php endif; ?>
 <h3> Contacts: <?= count($contacts); ?> </h3>
 <!-- counts contacts -->
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
                <!-- displays each contact's information -->
                <tr>
                  <td class="mobile-large" data-title="First Name"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['fname']; ?></a></td>
                  <td class="mobile-large" data-title="Last Name"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['lname']; ?></a></td>
                  <td data-title="Phone"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['phone']; ?></a></td>
                  <td data-title="Email"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['email']; ?></a></td>
                  <td data-title="Street"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['street']; ?></a></td>
                  <td data-title="City"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['city']; ?></a></td>
                  <td data-title="State"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['state']; ?></a></td>
                  <td data-title="Zip"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['zip']; ?></a></td>
                  <td data-title="Notes"><a href="/edit.php?id=<?= $contact['id']; ?>"> <?= $contact['notes']; ?></a></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
      </div>
</div>

<?php
include 'footer.php';
?>
