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
      $var3 = 13;

      $str = "Jon Snow";

      switch ($var3) {
        case 7:
          echo "The First Case is True<br>";
          break;
        case 6:
          echo "The Secodn Case is True<br>";
          break;
        default:
          echo "The Default Case is True<br>";
          break;
      }

      switch ($str) {
        case "Jon Snow":
          echo "The First Case is True<br>";
          break;
        case "Arya":
          echo "The Second Case is True<br>";
          break;
        case "Daenerys":
          echo "The Thrid Case is True<br>";
          break;
        default:
          echo "The Default Case is True<br>";
          break;
      }
    ?>
  </body>
</html>
