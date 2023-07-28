<?php
    class bookController{
        private $model;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/biblioteca/model/BookModel.php");
            $this->model = new bookModel();

        
        }
        public function guardar($titulo, $autor, $descripcion, $isbn) {
            $id = $this->model->insertar($titulo, $autor, $descripcion, $isbn);
            return ($id!=false) ? header("Location:show.php?id=".$id) : header("Location:create.php");
        }

        public function getbooks(){
            return($this->model->getbooks())?$this->model->getbooks() : false;
        }

        public function show($id){
            return ($this->model->show($id) != false) ? $this->model->show($id) : header("Location:show.php");
       }
    }

    // $cualquiera = new bookController();
    // var_dump($cualquiera->getbooks());

?>