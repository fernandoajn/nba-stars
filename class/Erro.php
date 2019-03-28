<?php

class Erro {
  
  public static function getError(Exception $e) {
    echo "<pre>";
    print_r($e);
    echo "</pre>";
    exit;
  }
}