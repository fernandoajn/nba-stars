<?php

require_once 'class/config.php';
spl_autoload_register(function($classname){
  require_once 'class/'. $classname . '.php';
});

