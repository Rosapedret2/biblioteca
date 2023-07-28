<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class dataBase {
    private $host = "localhost";
    private $dbname = "Books_library";
    private $user = "root";
    private $password = "root";
    // private $password = ""; XAMP

    public function conexion() {
        try {
            $PDO = new PDO("mysql:host={$this->host};dbname={$this->dbname}", $this->user, $this->password);
            return $PDO;
        } catch (PDOException $e) {
            die("Error en la conexión: " . $e->getMessage());
        }
    }
}
?>
