<!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Thrillverse library</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="resource/css/styles.css">
    
    </head>
    <body>
    <?php
        require_once("/Applications/MAMP/htdocs/biblioteca/view/head/header.php");
    ?>

    <div class="banner">
      <img class ="banner-img" src="/biblioteca/resource/img/banner-library.png" alt="imagen de libreria misteriosa">
      <div class="search-container">
        <input type="text" class="search-input" placeholder="Busca por libro o autor">
        <button type="submit" class="search-button"></button>
     </div>
    </div>

    <?php

require_once ("/Applications/MAMP/htdocs/biblioteca/controller/bookController.php");


$obj = new bookController();
$rows = $obj->getBooks();
?>
<!-- <div>
    <a href="/4Library/biblioteca/view/books/create.php" class="btn btn-primary m-2">Agregar un nuevo libro</a>
</div> -->

<h2 class="section-title">¡Los mejores libros de suspenso!</h2>
<div class="books-container">

<?php if (isset($rows) && !empty($rows)): ?>
   
        <?php foreach ($rows as $row): ?>
            <div class="book-list">
                
            <div class="book-card">
                    
                        <h5 class="book-title">
                        <?= $row["Titulo"] ?>
                        </h5>
                        <p class="book-autor">
                            <?= $row["Autor"] ?>
                        </p>
                        <p class="book-isbn">ISBN:
                            <?= $row["ISBN"] ?>
                        </p>
                        <a class="info" href="view/book/show.php?id=<?= $row[0] ?>" class="detail-button">Más información</a>
                    </div>
                </div>
            
        <?php endforeach; ?>
</div>
<?php else: ?>
    <div>
        <div class="col-md-12">
            <p class="text-center">No se han encontrado libros.</p>
        </div>
    </div>
<?php endif; ?>
</div>



    </body>


    <style>
        
    /* .row{
    display: flex;
    flex-direction: row;
    } */

     .section-title{
        text-align: center;
        padding: 2rem;
     }   


 .book-list{
    
    display: flex;
    flex: wrap;
    justify-content: center;

 }
 
  .book-card{
    flex-basis: 30%;
        margin-bottom: 20px;
        padding: 10px;
        border: solid 1px black;
        border-radius: 4px;
        background-color: #f3f2f2;
  }

  .book-title{
    font-size: 1.2rem;
  }    

.book-autor{
   color: #808080;

} 

  .info{
    color: #00ADB5;
    font-size: 0.8rem;
  }
    </style>