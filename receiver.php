<?php
  if (isset($_GET['var1'])) {
    echo $_GET['var1'] . "<br>";
  } else {
    echo "This page has a variable named var1 but it&apos;s not declared in the URL<br>";
  }
  if (isset($_GET['var2']) and isset($_GET['var3'])) {
    echo $_GET['var2'] . "<br>" . $_GET['var3'] . "<br>";
  } else {
    echo "This page has a variable named var2 but it&apos;s not declared in the URL<br>";
  }
  $str = "This is a string";
?>
This is the Receiver Page
