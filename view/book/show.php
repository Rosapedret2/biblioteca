<?php
require_once("/Applications/MAMP/htdocs/biblioteca/view/head/header.php");
require_once("/Applications/MAMP/htdocs/biblioteca/controller/BookController.php");

$obj = new bookController();
$detail = $obj->show($_GET['id']);
?>

<h2 class="book-detail">Detalle del libro</h2>

<div class="details-container">
    
     
<div class="col-md-8">
            <h3>
                <?= $detail["Titulo"] ?>
            </h3>
            <p>
                <?= $detail["Autor"] ?>
            </p>

            <p>Descripción:
                <?= $detail["Descripcion"] ?>
            </p>

            <p>ISBN:
                <?= $detail["ISBN"] ?>
            </p>
           
            <div class="col-md-8">
                <div class="pb-3">
                    <a href="/biblioteca/index.php" class="btn btn-primary">Volver</a>
                    <a href="edit.php?id=<?= $date["id"] ?>" class="edit-button">Editar</a>
                    <a class="btn btn-primary" data-bs-toggle="modal"
                        data-bs-target="#id<?= $date["id"] ?>">Eliminar</a>
                </div>
            </div>
<div class="modal fade" id="id<?= $date["id"] ?>" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            
<div class="modal-footer">
                            <button type="button" class="btn-guardar" data-bs-dismiss="modal">Guardar</button>
                            <button class="btn-cerrar">Cancelar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <style>
   
  @import url('https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600;700&display=swap');


body{
    width:100%;
    margin:0;
    padding:0;
    font-family: 'Fira Sans', sans-serif;
}

.navbar{
    width: 100vw;
    height: 10vh;
    background-color: #222831;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 0 2rem;
}

a{
    color: white;
    font-size: 1.5rem;
    font-weight: 600;
    text-decoration: none;
}


.header-button{
    color: white;
    font-size: 1rem;
    font-weight: 500;
    background-color: #00ADB5;
    border-radius: 4px;
    border: none;
    padding: 0.5rem 1rem;
}

.book-detail{
    padding: 2rem;
    width: 80%;
}

.details-container{
    padding: 0rem 2rem;

}

.btn-guardar {
   
    background-color: #FF6745;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 0.5rem 1rem; 

  }

.btn-cerrar{
    background-color: #00ADB5;
    color: #fff;
    border: none;
    border-radius: 4px;
    padding: 0.5rem 1rem; 
    
}
  