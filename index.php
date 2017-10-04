<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <body>
    <?php
      // For Loop
      for ($i=1; $i < 10; $i++) {
        echo "$i. This is the For Loop<br>";
      }

      // While Loop
      $w = 1;
      while ($w < 10) {
        echo "$w. This is the While Loop<br>";
        $w++;
      }

      // Do While Loop
      $d = 1;
      do {
        echo "$d. This is the Do While Loop <br>";
        $d++;
      } while ($d < 10);
    ?>
  </body>
</html>
