<?php

require_once ("/Applications/MAMP/htdocs/biblioteca/controller/bookController.php");

$prueba = new bookController();

$resultado = $prueba->getbooks();
var_dump($resultado);


?>