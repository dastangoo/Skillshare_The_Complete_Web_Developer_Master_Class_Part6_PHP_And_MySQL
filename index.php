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

        // $var1 = $var2;

        $var3 = 10;
        $var4 = '10';

        if ($var1 == $var2) {
          echo "This if statement is true<br>";
        }
        if ($var3 === $var4) {
          echo "This is second if statement<br>";
        }

        if ($var1 != $var2) {
          echo "This is third if statement<br>";
        }
        if ($var3 !== $var4) {
          echo "This is fourth if statement<br>";
        }

        if ($var1 > $var2) {
          echo "This is fifth if statement<br>";
        }

        if ($var1 < $var2) {
          echo "This is sixth if statememnt<br>";
        }

        if ($var1 <> $var2) {
          echo "This is seventh if statement<br>";
        }

        if ($var3 <> $var4) {
          echo "This is eighth if statement<br>";
        }

        if ($var1 >= $var2) {
          echo "This is ninth if statement<br>";
        }
        if ($var1 <= $var2) {
          echo "This is tenth if statement<br>";
        }

        // Logical Operators
        if ($var1 ==  $var2 && $var3 == $var4) {
          echo "This is eleventh if statement<br>";
        }
        if ($var1 ==  $var2 and $var3 == $var4) {
          echo "This is twelfth if statement<br>";
        }
        if ($var1 ==  $var2 || $var3 == $var4) {
          echo "This is thirteenth if statement<br>";
        }
        if ($var1 ==  $var2 or $var3 == $var4) {
          echo "This is fourteenth if statement<br>";
        }
        if ($var1 ==  $var2 xor $var3 == $var4) {
          echo "This is fifteenth if statement<br>";
        }
        if (!($var1 == $var2)) {
          echo "This is sixteenth if statement<br>";
        }
    ?>
  </body>
</html>
