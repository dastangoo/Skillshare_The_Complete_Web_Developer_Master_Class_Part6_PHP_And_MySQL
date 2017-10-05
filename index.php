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
    <style media="screen">
      th, td {
        text-align: center;
      }
      .jumbotron {
        text-align: center;
        background: grey;
        height: 200px;
        padding: 30px;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron">
      <h1>Simple CRUD (PHP with MySQL)</h1>
      <p>Learn PHP and MySQL Deep and Fast</p>
    </div>

    <div class="container">
      <h2 class="col-md-offset-3 col-md-6">Insert new users</h2>
      <form class="col-md-offset-2 col-md-6" method="post">
        <div class="form-group">
          <label for="username">User Name</label>
          <input type="text" class="form-control" id="username" placeholder="Insert username here" name="username" required>
        </div>
        <div class="form-group">
          <label for="username">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Insert password here" name="password" required>
        </div>
        <div class="form-group">
          <label for="username">Emaild Address</label>
          <input type="email" class="form-control" id="email" placeholder="Insert email here" name="email" required>
        </div>
        <div class="form-group">
          <label for="username">Contact Number</label>
          <input type="tel" class="form-control" id="tel" placeholder="Insert contact number here" name="tel">
        </div>
        <div class="form-group">
          <input type="submit" id="submit" class="form-control btn btn-danger" name="submit">
        </div>
      </form>
      <?php
        $sql = "SELECT * FROM users";
        $run = mysqli_query($conn, $sql);
        echo "<table class='table table-bordered table-striped table-hover'>
          <thead>
            <tr>
              <th>S.NO</th>
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Contact Number</th>
              <th>Date</th>
            </tr>
          </thead>
          <tbody>";
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
        echo "
        </tbody>
        </table>";
      ?>
    </div>
  </body>
</html>
<?php
  if (isset($_POST['submit'])) {
    echo $username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));
    echo "<br>";
    echo $password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));
    if (isset($_POST['tel'])) {
      echo "<br>";
      echo $tel = mysqli_real_escape_string($conn, strip_tags($_POST['tel']));
    }
    echo $email = mysqli_real_escape_string($conn, strip_tags($_POST['email']));
    echo "<br>";
  }

  $date = date('Y-m-d');

  // NOTE: Single quotation for columns is required
  $ins_sql = "INSERT INTO users (name, email, password, contact_number, date) VALUES ('$username', '$email', '$password', '$tel', '$date')";
  $run = mysqli_query($conn, $ins_sql);
?>
