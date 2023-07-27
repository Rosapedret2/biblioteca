<?php

require_once("/Applications/MAMP/htdocs/biblioteca/controller/bookController.php");

$obj = new bookController();
$obj->guardar($_POST['titulo'], $_POST['autor'], $_POST['descripcion'], $_POST['isbn']);



?>

