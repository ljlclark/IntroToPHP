<?php
  // LJCTextLib.php

  // Contains common static functions.
  class LJCText
  {
    // Encode to HTML entities to display HTML.
    public static function Display(string $text) : string
    {
      $retValue = htmlspecialchars($text);
      return $retValue;
    }

    // Writes the HTML beginning lines.
    public static function HTMLBegin(string $outputFileName, string $pageTitle)
    {
      self::Line("<!DOCTYPE html>");
      self::Line("<!-- $outputFileName -->");
      self::Line("<html lang=\"en\">");
      self::Line("<head>");
      self::Line("  <title>$pageTitle</title>");
      self::Line("  <meta name=\"author\" content=\"Lester J. Clark\" />");
      self::Line("  <meta charset=\"utf-8\" />");
      echo("  <meta name=\"viewport\" content=\"width=device-width");
      self::Line(" initial-scale=1\" />");
    }

    // Writes the "head" end and "body" begin elements.
    public static function HTMLBodyBegin()
    {
      self::Line("</head>");
      self::Line("<body>");
    }

    // Writes the HTML ending lines.
    public static function HTMLEnd()
    {
      self::Line("</body>");
      self::Line("</html>");
    }

    // Writes the supplied text to the output stream with the new line values.
    public static function Line(?string $text = null, ?bool $display = false
      , ?bool $lastPre = false)
    {
      if ($display)
      {
        $text = self::Display($text);
      }
      if ($lastPre)
      {
        $text = $text . "&lt;/pre&gt;";
      }
      echo($text . "\r\n");
    }

	  // Returns a scrubbed external value.
	  public static function Scrub(string $text) : string
	  {
		  $retValue = trim($text);
		  $retValue = stripslashes($retValue);
		  $retValue = htmlspecialchars($retValue);
		  return $retValue;
	  }
  }
?>
