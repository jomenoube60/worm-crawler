<?php

/**
 *
 */
class HtmlParser
{
  private $html; # the document to parse

  private $element;


  public function setInput($input) # set the content to parse. It should take an html document
  {
    $this->html = $input;
  }

  public function getInput($input) # render the raw content
  {
    return $this->html;
  }

  public function setElement($open , $close) # set boundaries containing the researched string
  {
    $this->element = [$open , $close];
  }

  public function getElement()
  {
    return $this->element;
  }
  public function parseElement() # parse the content to retrieve the researched element
  {

    $regex = "/".$this->element[0]."(.*)".$this->element[1]."/";
    echo $this->element[0]." ".$this->element[1];
    $output = preg_match_all($regex , $this->html , $d);
    
    return $d;
  }
}


 ?>
