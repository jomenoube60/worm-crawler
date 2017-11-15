<?php

/**
 *
 */
class HtmlParser
{
  private $html; # the document to parse

  public function setInput($input)
  {
    $this->html = $input;
  }

  public function getInput($input)
  {
    return $this->html;
  }
  public function parseElement($element)
  {

  }
}


 ?>
