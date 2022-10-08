<?php
  // LJCTextLib.php

  // Contains common static functions.
  public class LJCTextLib
  {
    // Encode to HTML entities to display HTML.
    public static function Display(string $text)
    {
      $retValue = htmlspecialchars($text);
      return $retValue;
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
        $text = $text . "&lt;/pre&gt;");
      }
      echo($text . "\r\n");
    }
  }
?>
