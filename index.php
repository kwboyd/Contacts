<?php
include 'header.php';
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
                  <td><?= $task['fname']; ?></td>
                  <td><?= $task['lname']; ?></td>
                  <td><?= $task['phone']; ?></td>
                  <td><?= $task['email']; ?></td>
                  <td><?= $task['street']; ?></td>
                  <td><?= $task['city']; ?></td>
                  <td><?= $task['state']; ?></td>
                  <td><?= $task['zip']; ?></td>
                  <td><?= $task['notes']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
      </div>

      <script src="/js/jquery-3.1.1.min.js"></script>
      <script src="/js/tether.min.js"></script>
      <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
