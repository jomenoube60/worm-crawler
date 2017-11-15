<?php

/**
 *
 */
class HtmlParser
{
  private $html; # the document to parse

  private $element;


  public function setInput($input)
  {
    $this->html = $input;
  }

  public function getInput($input)
  {
    return $this->html;
  }

  public function setElement($open , $close)
  {
    $this->element = [$open , $close];
  }

  public function getElement()
  {
    return $this->element;
  }
  public function parseElement($element)
  {

  }
}


 ?>
