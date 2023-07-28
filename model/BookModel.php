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
            $stament = $this->PDO->prepare("INSERT INTO Books_library.books VALUES (:Titulo, :Autor, :Descripcion, :ISBN, null)");
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
public function show($id){
    $stament = $this->PDO->prepare("SELECT * FROM Books_library.books where id = :id limit 1");
    $stament->bindParam(":id",$id);
    return ($stament->execute()) ? $stament->fetch() : false ;
}

    }

 