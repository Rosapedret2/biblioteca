<?php
    class BookModel{
        private $PDO;
        public function __construct()
        {
            require_once("/Applications/MAMP/htdocs/biblioteca/config/DataBase.php");
            $con = new DataBase();
            $this->PDO = $con->conexion();
        }
    
        public function insertar($titulo, $autor, $descripcion, $ISBN, $imagen)
        {
            $stament = $this->PDO->prepare("INSERT INTO Book (Título, Autor, Descripción, ISBN, Imagen) VALUES (:autor, :titulo, :isbn, :descripcion, :imagen)");
            $stament->bindParam(":titulo", $titulo);
            $stament->bindParam(":autor", $autor);
            $stament->bindParam(":descripcion", $descripcion);
            $stament->bindParam(":isbn", $isbn);
            $stament->bindParam(":imagen", $imagen);
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
    
        public function update($id, $nombre, $isbn, $titulo, $autor, $descripcion, $imagen)
        {
            $stament = $this->PDO->prepare("UPDATE Books_library SET Autor = :autor, Título = :titulo, ISBN = :isbn, Descripción = :descripcion, Imagen = :imagen WHERE id = :id");
            $stament->bindParam(":autor", $autor);
            $stament->bindParam(":titulo", $titulo);
            $stament->bindParam(":isbn", $isbn);
            $stament->bindParam(":descripcion", $descripcion);
            $stament->bindParam(":imagen", $imagen);
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