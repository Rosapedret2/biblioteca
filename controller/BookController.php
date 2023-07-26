<?php
    class BookController{
        private $model;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/biblioteca/model/BookModel.php");
            $this->model = new BookModel();
        }
        public function guardar($Titulo, $Autor, $Descripcion, $ISBN, $Imagen){
            $id = $this->model->insertar($Titulo, $Autor, $Descripcion, $ISBN, $Imagen);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }
       
    }

?>