<?php
  // TestForm.php
  declare(strict_types=1);
  require_once "LJCTextLib.php";

  $firstName = LJCText::Scrub($_POST["firstName"]);
  $lastName = LJCText::Scrub($_POST["lastName"]);

  LJCText::HTMLBegin("TestFormOutput.html", "Test Form Output");
  // Additional "Head" statements go here.
  LJCText::HTMLBodyBegin();
  // Body statements go here.
  echo("Hi $firstName, $lastName");
  LJCText::HTMLEnd();
?>