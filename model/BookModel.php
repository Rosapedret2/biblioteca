<?php
    class BookModel{
        private $PDO;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/biblioteca/config/DataBase.php");
            $con = new DataBase();
            $this->PDO = $con->conexion();
        }
    
        public function insertar($Titulo, $Autor, $Descripcion, $ISBN, $Imagen)
        {
            $stament = $this->PDO->prepare("INSERT INTO Books_library VALUES (null, :Titulo, :Autor, :Descripcion, :ISBN, :Imagen)");
            $stament->bindParam(":Titulo", $Titulo);
            $stament->bindParam(":Autor", $Autor);
            $stament->bindParam(":Descripcion", $Descripcion);
            $stament->bindParam(":ISBN", $ISBN);
            $stament->bindParam(":Imagen", $Imagen);
            return ($stament->execute()) ? $this->PDO->lastInsertId() : false ;
        }
    
        public function show($id)
        {
            $stament = $this->PDO->prepare("SELECT * FROM Books_library WHERE id = :id LIMIT 1");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $stament->fetch() : false ;
        }
    
        public function index()
        {
            $stament = $this->PDO->prepare("SELECT * FROM Books_library");
            return ($stament->execute()) ? $stament->fetchAll() : false;
        }
    
        public function update( $Titulo, $Autor, $Descripcion,$ISBN, $Imagen, $id,)
        {
            $stament = $this->PDO->prepare("UPDATE Books_library SET  Título = :Titulo, Autor = :Autor, Descripción = :Descripcion, ISBN = :ISBN,  Imagen = :Imagen WHERE id = :id");
            $stament->bindParam(":Titulo", $Titulo);
            $stament->bindParam(":Autor", $Autor);
            $stament->bindParam(":Descripcion", $Descripcion);
            $stament->bindParam(":ISBN", $ISBN);
            $stament->bindParam(":Imagen", $Imagen);
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? $id : false;
        }
    
        public function delete($id)
        {
            $stament = $this->PDO->prepare("DELETE FROM Books_library WHERE id = :id");
            $stament->bindParam(":id", $id);
            return ($stament->execute()) ? true : false;
        }
    }