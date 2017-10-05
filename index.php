<?php
  $server = "localhost";
  $username = "learn_php";
  $password = "123456";
  $db = "learn_php";
  $conn = mysqli_connect($server, $username, $password, $db);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-color.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {

      });
    </script>
  </head>
  <body>
  <?php
    $sql = "SELECT * FROM users";
    $run = mysqli_query($conn, $sql);
    echo "<table class='table table-bordered table-striped table-hover'>
      <tr>
        <th>S.NO</th>
        <th>Name</th>
        <th>Email</th>
        <th>Password</th>
        <th>Contact Number</th>
        <th>Date</th>
      </tr>";
    while ($rows = mysqli_fetch_assoc($run)) {
      echo "
        <tr>
          <td>$rows[user_id]</td>
          <td>$rows[name]</td>
          <td>$rows[email]</td>
          <td>$rows[password]</td>
          <td>$rows[contact_number]</td>
          <td>$rows[date]</td>
        </tr>
      ";
    }
    echo "</table>";
  ?>
  </body>
</html>
