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

      // Arithmetic

      $add = $var1 + $var2;
      $sub = $var1 - 9;
      $pro = $var2 * 7;
      $div = $var1 / $var2;
      $mod = $var2 % 3;
      echo $add;
      echo "<br>";
      echo $sub;
      echo "<br>";
      echo $pro;
      echo "<br>";
      echo $div;
      echo "<br>";
      echo $mod;

      // Assignment Operators
      $var3 = 4;
      $var4 = $var3;
      $var5 = 7;

      echo "<br>";
      echo $var4;

      $a = 5;
      $b = 9;

      $c = 6;
      $d = 8;

      $e = 4;
      $f = 3;

      $g = 7;
      $h = 2;

      $i = 18;
      $j = 9;

      $c = $a + $b;
      // $a = $a + $b;
      $a += $b;
      $c -= $d;
      $e *= $f;
      $g /= $h;
      $i %= $j;

      // $var5++;
      echo "<br>";
      echo $a;
      echo "<br>";
      echo $c;
      echo "<br>";
      echo $e;
      echo "<br>";
      echo $g;
      echo "<br>";
      echo $i;
      echo "<br>";
      echo $var5++;
      echo "<br>";
      echo ++$var5;
      echo "<br>";
      echo --$var5;
      echo "<br>";
      echo $var5--;
      echo "<br>";
      echo $var5;
    ?>
  </body>
</html>
