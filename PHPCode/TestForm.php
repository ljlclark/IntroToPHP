<?php
  // TestForm.php
	declare(strict_types=1);
  require_once "LJCTextLib.php";

	$firstName = Scrub($_POST["firstName"]);
	$lastName = Scrub($_POST["lastName"]);

  LJCText::HTMLBegin("TestFormOutput.html", "Test Form Output");
  // Additional "Head" statements go here.
  LJCText::HTMLBodyBegin();
  // Body statements go here.
	echo("Hi $firstName, $lastName");
  LJCText::HTMLEnd();

	// Returns a scrubbed external value.
	function Scrub(string $text) : string
	{
		$retValue = trim($text);
		$retValue = stripslashes($retValue);
		$retValue = htmlspecialchars($retValue);
		return $retValue;
	}
?>