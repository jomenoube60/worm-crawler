<?php

/**
 *
 */
class Curler
{
  private $file; # the raw file

  public function getFile()
  {

    return $this->file;

  }

  public function setFile($file_input)
  {

    $this->file = $file_input;

  }

  public function getOutput() # render a text file
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
