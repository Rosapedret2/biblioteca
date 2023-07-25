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
        require_once("/Applications/MAMP/htdocs/biblioteca/view/head/footer.php");
    ?>

    </body>