<?php
class dataBase {
    private $host = "localhost";
    private $dbname = "Books_library";
    private $user = "root";
    private $password = "root";
    public function conection(){
        try{
            $PDO = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname,$this->user,$this->password);
            return $PDO;
        }catch(PDOExeption $e){
            return $e->getMessage();
        }
    }
}
$object = new dataBase();
print_r($object->conection());

?>