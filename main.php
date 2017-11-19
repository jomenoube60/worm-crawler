<?php

include 'curler.php';
include 'parser.php';
/**
 *
 */
class Worm
{

  public $curl;

  public $parser;

  function __construct()
  {
  $this->curl = New Curler;

  $this->parser = New HtmlParser;
  }
}

 ?>
