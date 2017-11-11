<?php

/**
 *
 */
class Curler
{
  private $file; # the raw file

  function __construct($file_input) # take an URL
  {

    private $file = $file_input;

  }

  function getOutput() # render a text file
  {
    $input = curl_init($this->file);
    $output = curl_exec($input);

    return $output;
  }

}


 ?>
