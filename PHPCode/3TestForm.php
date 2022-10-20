<?php
  // TestForm.php
  declare(strict_types=1);
  require_once "LJCHTMLLib.php";

  $firstName = LJCHTML::Scrub($_POST["firstName"]);
  $lastName = LJCHTML::Scrub($_POST["lastName"]);

  LJCHTML::HTMLBegin("TestFormOutput.html", "Test Form Output");
  // Additional "Head" statements go here.
  LJCHTML::HTMLBodyBegin();
  // Body statements go here.
  echo("Hi $firstName, $lastName");
  LJCHTML::HTMLEnd();
?>