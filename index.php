<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <body>
    <?php
      function calc1()
      {
        static $a = 1;
        // $a++;
        // return $a++;
        return $a++;
      }
    ?>
    <p>This is the Simple Paragraph</p>
    <?php
      echo calc1();
      echo "<br>";
      echo calc1();
      echo "<br>";
      echo calc1();
      echo "<br>";
      echo calc1();
      echo "<br>";
      echo calc1();
    ?>
  </body>
</html>
