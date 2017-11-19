<?php

include 'curler.php';
include 'parser.php';
/**
 * Contain the main class , name Worm . Use of this web crawler should
 * only start from this class
 */
class Worm
{

  public $curl;

  public $parser;

  // functions

  function __construct()
  {
  $this->curl = New Curler;

  $this->parser = New HtmlParser;
  }

}

 ?>
