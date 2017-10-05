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
      table {
        margin: 50px;
      }
    </style>
  </head>
  <body>
    <div class="col-md-8 col-md-offset-2" id="form">
      <form method="post">
        <div class="form-group">
          <label for="">User Name</label>
          <input type="text" class="form-control" id="username" placeholder="Insert Username" name="username">
          <p class="help-block">Insert your registered username here.</p>
          <input type="hidden" name="check" value="yes">
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Insert Password" name="password">
          <p class="help-block">Insert your password here.</p>
        </div>
        <input type="submit" name="submit" value="Submit" class="btn btn-primary btn-block btn-lg">
      </form>
    </div>
    <br><br><br>
    <div class="col-md-4 col-md-offset-4" id="result">
      <?php
        //if (isset($_GET['check'])) {
        if (isset($_POST['check'])) {
      ?>
      <table class="table table-bordered table-striped table-hover">
        <tr>
          <th>User Name</th>
          <th>Password</th>
        </tr>
        <tr>
          <td>
            <?php
              //echo $_GET['username'];
              echo $_POST['username'];
            ?>
          </td>
          <td>
            <?php
              // echo $_GET['password']; }
              echo $_POST['password']; }
            ?>
          </td>
        </tr>
      </table>

    </div>
  </body>
</html>
