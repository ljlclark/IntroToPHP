<?php
  // PHPFile.php
  declare(strict_types=1);

  // string
  $text = "Some text.";
  $type = gettype($text);
  echo("\$text = $text<br />");
  echo("\$text type = $type<br />");
  echo("<br />");

  // int
  $text = 5;  // This will display an error.
  $type = gettype($text);
  echo("\$text = $text<br />");
  echo("\$text type = $type<br />");
  echo("<br />");

  // bool(boolean)
  $text = true;
  $type = gettype($text);
  echo("\$text = $text<br />");
  echo("\$text type = $type<br />");
  echo("<br />");

  // float(double)
  $number = $text + 2.0;
  $type = gettype($number);
  echo("\$number = \$text + 2.0<br />");
  echo("\$number = $number<br />");
  echo("\$number type = $type<br />");
?>