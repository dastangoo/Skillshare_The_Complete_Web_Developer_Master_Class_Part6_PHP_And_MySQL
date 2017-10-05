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
      <?php
        if (isset($_GET['edit_id'])) {
          $sql = "SELECT * FROM users WHERE user_id = '$_GET[edit_id]'";
          $run = mysqli_query($conn, $sql);
          while ($rows = mysqli_fetch_assoc($run)) {
            $username = $rows['name'];
            $password = $rows['password'];
            $email = $rows['email'];
            $tel = $rows['contact_number'];
          }
          ?>
          <h2 class="col-md-offset-3 col-md-6">Edit user</h2>
          <form class="col-md-offset-2 col-md-6" method="post">
            <div class="form-group">
              <label for="username">User Name</label>
              <input type="text" class="form-control" id="edit_username" name="edit_username" value=<?= $username ?>>
            </div>
            <div class="form-group">
              <label for="username">Password</label>
              <input type="password" class="form-control" id="edit_password"  name="edit_password" value=<?= $password ?>>
            </div>
            <div class="form-group">
              <label for="username">Emaild Address</label>
              <input type="email" class="form-control" id="edit_email" name="edit_email" value=<?= $email ?>>
            </div>
            <div class="form-group">
              <label for="username">Contact Number</label>
              <input type="tel" class="form-control" id="edit_tel" name="edit_tel" value=<?= $tel ?>>
            </div>
            <div class="form-group">
              <input type="submit" id="edit_user" class="form-control btn btn-primary" name="edit_user" value="Done Editing">
              <input type="hidden" name="edit_user_id" value=<?= $_GET['edit_id'] ?>>
            </div>
          </form>
      <?php } else {
      ?>
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
          <input type="submit" id="submit" class="form-control btn btn-primary" name="submit" value="Submit">
        </div>
      </form>
    <?php }
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
              <th>Edit</th>
              <th>Delete</th>
            </tr>
          </thead>
          <tbody>";
        $c = 1;
        while ($rows = mysqli_fetch_assoc($run)) {
          echo "
            <tr>
              <td>$c</td>
              <td>$rows[name]</td>
              <td>$rows[email]</td>
              <td>$rows[password]</td>
              <td>$rows[contact_number]</td>
              <td>$rows[date]</td>
              <td>
                <a href='index.php?edit_id=$rows[user_id]' class='btn btn-primary'>Edit</a>
              </td>
              <td>
                <a href='index.php?del_id=$rows[user_id]' class='btn btn-danger'>Delete</a>
              </td>
            </tr>
          ";
          $c++;
        }
        echo "
        </tbody>
        </table>";
      ?>
    </div>
  </body>
</html>
<?php
  // Inserting New User
  if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, strip_tags($_POST['username']));
    $password = mysqli_real_escape_string($conn, strip_tags($_POST['password']));
    if (isset($_POST['tel'])) {
      $tel = mysqli_real_escape_string($conn, strip_tags($_POST['tel']));
    }
    $email = mysqli_real_escape_string($conn, strip_tags($_POST['email']));
    echo "<br>";
    $date = date('Y-m-d');

    // NOTE: Single quotation for columns is required
    $ins_sql = "INSERT INTO users (name, email, password, contact_number, date) VALUES ('$username', '$email', '$password', '$tel', '$date')";
    if (mysqli_query($conn, $ins_sql)) {?>
      <script type="text/javascript">
        window.location = "index.php"
      </script>
      <?php
    }
  }

  // Deleting An Existing User
  if (isset($_GET['del_id'])) {
    $del_sql = "DELETE from users WHERE user_id = '$_GET[del_id]'";
    if (mysqli_query($conn, $del_sql)) {?>
      <script type="text/javascript">
        window.location = "index.php"
      </script>
    <?php
    }
  }


  // Updating An Existing User
  if (isset($_POST['edit_user'])) {
    $edit_username = mysqli_real_escape_string($conn, strip_tags($_POST['edit_username']));
    $edit_password = mysqli_real_escape_string($conn, strip_tags($_POST['edit_password']));
    $edit_email = mysqli_real_escape_string($conn, strip_tags($_POST['edit_email']));
    $edit_tel = mysqli_real_escape_string($conn, strip_tags($_POST['edit_tel']));
    $edit_user_id = mysqli_real_escape_string($conn, strip_tags($_POST['edit_user_id']));

    $edit_sql = "UPDATE users SET name = '$edit_username', password = '$edit_password', email = '$edit_email', contact_number = '$edit_tel' WHERE user_id = '$edit_user_id'";
    if (mysqli_query($conn, $edit_sql)) { ?>
      <script type="text/javascript">
        window.location = "index.php"
      </script>
    <?php
    }
  }
?>
