<?php
  // PHPFile.php
  declare(strict_types=1);

  $text = "Some text.";
  echo(gettype($text) . "<br />");
  $text = 5;  // This will display an error.
  echo(gettype($text) . "<br />");
  $number = $text + 2;
  echo(gettype($number) . "<br />");
  echo($number);
?>