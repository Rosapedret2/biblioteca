<?php
    class bookController{
        private $model;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/biblioteca/model/bookModel.php");
            $this->model = new bookModel();
        }
        public function guardar($titulo, $autor, $descripcion, $isbn) {
            $id = $this->model->insertar($titulo, $autor, $descripcion, $isbn);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:new.php");
        }

        public function getbooks(){
            return($this->model->getbooks())?$this->model->getbooks() : false;
        }
       
    }

    $cualquiera = new bookController();
    var_dump($cualquiera->guardar("dasndkjjasck", "gigi", "monica", "234234234"));

?>