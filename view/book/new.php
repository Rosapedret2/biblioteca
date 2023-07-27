<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar nuevo libro4</title>
    <link rel="stylesheet" href="/biblioteca/resource/css/create.css">
</head>

<body>
<?php
        require_once("/Applications/MAMP/htdocs/biblioteca/view/head/header.php");
    ?>
 
  <div class="form-container">
    <h1>Agregar Libro</h1>
    <form action="store.php" method="POST" autocomplete="off">
      <div class="form-group">
        <label for="titulo">Título del Libro:</label>
        <input type="text" id="titulo" name="titulo" required>
      </div>

      <div class="form-group">
        <label for="autor">Autor del Libro:</label>
        <input type="text" id="autor" name="autor" required>
      </div>

      <div class="form-group">
        <label for="descripcion">Descripción del Libro:</label>
        <textarea id="descripcion" name="descripcion" required></textarea>
      </div>

    <div class="form-group">
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn" required>
      </div> 

     <!-- <div class="form-group">
        <label for="imagen">Imagen (max 60 KB):</label>
        <input type="file" id="imagen" name="imagen" accept=".jpg, .jpeg, .png" required>
      </div>  -->

      <div class="form-buttons">
        <button type="submit" class="btn btn-guardar">Guardar</button>
        <a href="index.php"><button type="button" class="btn btn-cancelar" onclick="cancelar()">Cancelar</button>
      </div></a>
    </form>
  </div>

  <?php
        require_once("/Applications/MAMP/htdocs/biblioteca/view/head/footer.php");
    ?>
</body>
</html>