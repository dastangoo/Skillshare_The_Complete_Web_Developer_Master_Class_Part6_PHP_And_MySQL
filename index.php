<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <body>
    <?php
      $var1 = 'Hello World';
      $var1 = '<u>Hi Students</u>';
      $var2 = 4 + 6;

      $var3 = 6;
      $var4 = 7;
      $var5 = "We&apos;re learning the PHP";
      $var6 = 'Winterfell';
      $ans = $var3 + $var4 + $var2 + 150;
      $br = '<br>';
      echo $var1;
      echo "<br>";
      echo $var2 ;
      echo $br;
      echo $var2;
      echo $br;
      echo $ans;

      echo $br;
      echo "This is the Paragraph" . 4;

      echo $br;
      echo $var1 . $var5;
      echo $br;
      echo "I live in <b>" . $var6 . "</b>";
    ?>
  </body>
</html>
