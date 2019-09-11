<?php
  define("WEB_ROOT", "A3PHP/Eindopdrachten/");
  define("LOCAL_ROOT", $_SERVER["DOCUMENT_ROOT"] . "/" . WEB_ROOT);

  spl_autoload_register(function ($class_name) {
    include LOCAL_ROOT . "php/classes/" . $class_name . '.class.php';
  });
 ?>
