<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <style media="screen">
    h2 {
      display: inline;
    }
  </style>
  <body>
    <?php
      $str1 = "Hello Students";
      $str2 = "We are willing to be a <script>alert('Stop!!!!');</script><h2>professional</h2> web developer";
      $str3 = "good people";

      // echo $str2;
      echo "<br>";
      echo htmlspecialchars($str2);
      echo "<br>";
      echo strip_tags($str2);

    ?>
    <p>This is the Simple Paragraphp</p>
    <?php
     ?>
  </body>
</html>
