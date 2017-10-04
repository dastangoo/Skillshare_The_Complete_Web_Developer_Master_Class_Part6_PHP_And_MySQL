<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <body>
    <?php
      $var1 = 7;
      $var2 = 4;
      $var3 = 7;
      if ($var1 === $var2) {
        echo "The First Conditional is True<br>";
      } else {
        echo "The First Conditional is False<br>";
      }
      if ($var1 > $var2) {
        echo "The Second Conditional is True<br>";
      } else {
        echo "The Second Conditional is False<br>";
      }

      // if, else and elseif
      if ($var1 < $var3) {
        echo "The Third Conditional is True<br>";
      } elseif ($var1 <= $var3) {
        echo "The Third Conditioanl&apos;s first elseif condition is true<br>";
      } else {
        echo "The Third Conditioanl is False<br>";
      }

    ?>
  </body>
</html>
