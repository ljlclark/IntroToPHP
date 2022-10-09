<?php
  declare(strict_types=1);
  // Output.php

  // 1 Download PHP
  // 2 Setup PHP
  // 6 Use HTMLBegin function. (replaceable variable)
  // 7 Use Other HTML functions.

  $outputFileName = "1Output.html";
  $pageTitle = "Test Output";
  LJCText::HTMLBegin($outputFileName, $pageTitle);
  echo("  <link rel=\"stylesheet\" type=\"text/css\"");
  LJCText::Line(" href=\"Intro.css\" />");
  LJCText::HTMLBodyBegin();
  LJCText::Line("  <div class=\"page\">");
  LJCText::Line("    <pre>");
  LJCText::Line();
  LJCText::Line("    <!DOCTYPE html>", true);
  LJCText::Line("    <html lang=\"en\">", true);
  LJCText::Line("    A line of text.", lastPre: true);
  LJCText::Line("  </div>");
  LJCText::HTMLEnd();

  $x = "What?";
  $x = 5;

  $example = new LJCExample(3);
  //$example->FirstNumber = 4;
  $example->SecondNumber = 7;
  $result = $example->Add();
  LJCText::Line($result);

  class LJCExample
  {
    // Initializes a class instance with the provided values.
    public function __construct(int $firstNumber)
    {
      $this->FirstNumber = $firstNumber;
      $this->SecondNumber = 0;
    }

    // Adds the FirstNumber and SecondNumber.
    public function Add()
    {
      $retValue = $this->FirstNumber + $this->SecondNumber;
      return $retValue;
    }

    private int $FirstNumber;
    public int $SecondNumber;
  }

  // Contains common static functions.
  class LJCText
  {
    // Writes the supplied text to the output stream.
    public static function Line(?string $text = null, ?bool $display = false
      , ?bool $lastPre = false)
    {
      if ($display)
      {
        $text = self::Display($text);
      }
      if ($lastPre)
      {
        $text = $text . "</pre>";
      }
      echo($text . "\r\n");
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

    // Encode to HTML entities to display HTML.
    public static function Display(string $text)
    {
      $retValue = htmlspecialchars($text);
      return $retValue;
    }

    // Writes the HTML ending lines.
    public static function HTMLEnd()
    {
      self::Line("</body>");
      self::Line("</html>");
    }
  }
?>
