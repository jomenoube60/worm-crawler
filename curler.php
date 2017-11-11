<?php

/**
 *
 */
class Curler
{
  private $file; # the raw file

  function __construct($file_input) # fetch an URL
  {

    $this->file = $file_input;

  }

  function getOutput() # render a text file
  {
    $ch = curl_init();
    curl_setopt($ch , CURLOPT_URL , $this->file);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    $output = curl_exec($ch);

    curl_close($ch);


    return $output;
  }

}


 ?>
