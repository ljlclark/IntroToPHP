<?php
  // PHPFile.php
  declare(strict_types=1);

  // string
  $text = "Some text.";
  $type = gettype($text);
  echo("\$text = $text<br />\r\n");
  echo("\$text type = $type<br />\r\n");
  echo("<br />\r\n");

  // int
  $text = 5;  // This will display an error.
  $type = gettype($text);
  echo("\$text = $text<br />\r\n");
  echo("\$text type = $type<br />\r\n");
  echo("<br />\r\n");

  // bool(boolean)
  $text = true;
  $type = gettype($text);
  echo("\$text = $text<br />\r\n");
  echo("\$text type = $type<br />\r\n");
  echo("<br />\r\n");

  // float(double)
  $number = $text + 2.0;
  $type = gettype($number);
  echo("\$number = \$text + 2.0<br />\r\n");
  echo("\$number = $number<br />\r\n");
  echo("\$number type = $type<br />\r\n");
?>