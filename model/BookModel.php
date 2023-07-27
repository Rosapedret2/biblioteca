<?php
    class bookModel{
        public $PDO;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/biblioteca/config/dataBase.php");
            $con = new dataBase();
            $this->PDO = $con->conexion();
        }
    
        public function insertar ($titulo, $autor, $descripcion, $isbn)
        {
            $stament = $this->PDO->prepare("INSERT INTO Books_library.books VALUES (null, :Titulo, :Autor, :Descripcion, :ISBN)");
            $stament->bindParam(":Titulo", $titulo);
            $stament->bindParam(":Autor", $autor);
            $stament->bindParam(":Descripcion", $descripcion);
            $stament->bindParam(":ISBN", $isbn);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
    
public function getbooks(){

    $stament = $this->PDO->prepare("SELECT * FROM Books_library.books");
    return ($stament->execute())?$stament->fetchAll() : false;
}

    }

 