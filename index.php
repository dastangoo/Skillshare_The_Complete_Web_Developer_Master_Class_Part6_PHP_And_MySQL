<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Learn PHP and MySQL</title>
  </head>
  <body>
    <?php
      // $month = "October";
      // $month2 = "November";
      // echo $month2;

      //Indexed Array

      $months = array();
      $months[1] = "January";
      $months[2] = "February";
      $months[3] = "March";
      $months[4] = "April";
      $months[5] = "Mey";
      $months[6] = "June";
      $months[7] = "July";
      $months[8] = "August";
      $months[9] = "September";
      $months[10] = "October";
      $months[11] = "November";
      $months[12] = "December";

      $fruits = array();
      $fruits[] = "Apple";
      $fruits[] = "Banana";
      $fruits[] = "Grapes";
      $fruits[] = "Guava";

      // Associative Array

      $days = array();
      $days['mon'] = "Monday";
      $days['tue'] = "Tuesday";
      $days['wed'] = "Wednesday";
      $days['thu'] = "Thursday";
      $days['fri'] = "Friday";
      $days['sat'] = "Saturday";
      $days['sun'] = "Sunday";



      // Array Identifier
      $vegtables = array("Onion", "Potato", "Tomato", "Lady Finger");
      $employees = array("manager" => "John", "Director" => "Mark", "CEO" => "Albert" );


      // Modifying the Arrays

      $months[5] = "May";
      $fruits[2] = "Strawberry";
      $days['thu'] = "Friday";


      // Adding New Elements

      echo $months[1];
      echo "<br>";
      echo $days['mon'];
      echo "<br>";
      echo $fruits[3];
      echo "<br>";
      echo $vegtables[2];
      echo "<br>";
      echo $employees['manager'];

      // var_dump($months);
      // echo "<br>";
      // var_dump($days);
      // echo "<br>";
      // var_dump($fruits);
      // echo "<br>";
      // var_dump($vegtables);
      // echo "<br>";
      //
      // var_export($months);
      // echo "<br>";
      // var_export($days);
      // echo "<br>";
      // var_export($fruits);
      // echo "<br>";
      // var_export($vegtables);
      // echo "<br>";

      // Foreah Loop

      foreach ($months as $month ) {
        echo "$month <br>";
      }

      // For Loop
      
      for ($i=0; $i < count($fruits); $i++) {
        echo "$fruits[$i] <br>";
      }




    ?>
  </body>
</html>
