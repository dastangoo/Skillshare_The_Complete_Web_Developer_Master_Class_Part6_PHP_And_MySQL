<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <body>
    <?php
      $e = 5;
      $f = 9;
      function func1($country)
      {
        // echo "I live in $country<br>";
        // echo "I live in ". $country . "<br>";
        // return "I live in $country <br>";
        $var1 = "I live in $country <br>";
        return $var1;
      }
      function calc1($b, $c)
      {
        $a = $b + $c;
        return $a;
      }

      function calc2()
      {
        // First Method

        // global $e, $f;
        // $d = $e * $f;

        // Second Method
        $d = $GLOBALS['e'] * $GLOBALS['f'];

        
        return $d;
      }
    ?>
    <p>This is the Simple Paragraph</p>
    <?php
      // func1('Kings Landing');
      echo func1('Kings Landing');
      echo func1('Vale ');
      echo calc1(10, 64);
      echo "<br>";
      echo calc1(58, 89);
      echo "<br>";
      echo calc2()
    ?>
  </body>
</html>
