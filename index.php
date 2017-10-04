<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <body>
    <?php
      $str1 = "Hello Students";
      $str2 = "We are willing to became a professional web developer";
      $replace_str =  str_replace("Hello", "Hi", $str1);
      $str3 = "good people";
      echo $str1;
      echo str_word_count($str1);
      echo "<br>";
      echo $replace_str;
      echo "<br>";
      // echo str_repeat($str1."<br>", 10);
      echo str_repeat("$str1<br>", 10);
      echo "<br>";
      echo stripos($str2, "Willing");
      echo "<br>";
      echo strpos($str2, "willing");
      echo "<br>";
      echo substr($str2, 27, 12);
      echo "<br>";
      echo substr($str2, strpos($str2, "professional"));
      echo "<br>";
      // String Formatting
      echo strtoupper($str1);
      echo "<br>";
      echo strtolower($str1);
      echo "<br>";
      echo ucfirst($str3);
      echo "<br>";
      echo ucwords($str3);
      
    ?>
    <?php
    ?>
  </body>
</html>
