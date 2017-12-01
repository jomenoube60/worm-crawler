<?php

class Worm
{

  public $curl;

  public $parser;

  // functions

  public function __construct()
  {
  $this->curl = New Curler;

  $this->parser = New HtmlParser;
  }

  public function fetchContent($url , $open , $close )
  {
    $content = $this->curl->getOutput() ;
    $this->curl->setFile($url);
    $this->parser->setInput($content);
    $this->parser->setElement($open , $close);
    $this->parser->parseElement();

    print_r($this->parser->getElement());
    return $this->parser->getElement();
  }
}

 ?>
