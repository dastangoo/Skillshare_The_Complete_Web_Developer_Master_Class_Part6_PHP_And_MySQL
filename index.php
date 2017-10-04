<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <body>
    <?php
        $var1 = 8;
        $var2 = 9;

        $var1 = $var2;

        $var3 = 10;
        $var4 = '10';

        if ($var1 == $var2) {
          echo "This if statement is true";
        }
        if ($var3 === $var4) {
          echo "This is second if statement";
        }
    ?>
  </body>
</html>
