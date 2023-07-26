<?php
    class BookModel{
        private $PDO;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/biblioteca/config/DataBase.php");
            $con = new DataBase();
            $this->PDO = $con->conection();
        }
    
        public function insertar ($Titulo, $Autor, $Descripcion, $ISBN, $Imagen)
        {
            $stament = $this->PDO->prepare("INSERT INTO Books_library VALUES (null, :Titulo, :Autor, :Descripcion, :ISBN, :Imagen)");
            $stament->bindParam(":Titulo", $Titulo);
            $stament->bindParam(":Autor", $Autor);
            $stament->bindParam(":Descripcion", $Descripcion);
            $stament->bindParam(":ISBN", $ISBN);
            $stament->bindParam(":Imagen", $Imagen);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
    
    }