<?php
  // TestWebAPI.php
  declare(strict_types=1);
  require_once "LJCTextLib.php";

  $name = LJCText::Scrub($_GET["name"]);
  echo("name: $name");
?>