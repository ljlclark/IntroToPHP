<?php
  // TestWebAPI.php
  declare(strict_types=1);
  require_once "LJCHTMLLib.php";

  $name = LJCHTML::Scrub($_GET["name"]);
  echo("name: $name");
?>