<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLIDER</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="esti.css">
    
</head>
<body>
    <header>
    <h1>Titulo de Ejemplo</h1>
    </header>
    <div class="container-all">
        <?php
        for ($i=1; $i <= 5; $i++) { 
        echo '
        <input type="radio" id="'.$i.'" name="image-slide" hidden>';
        } 
        ?>
            <div class="slide">
                <?php
                for ($i=1; $i <= 5; $i++) { 
                    echo'<div class="item-slide">
                        <img class="imagen" src= "imagenes/'.$i.'.png">
                    </div>
                    ';
                }
                ?>
            </div> 
                <?php
                echo'
                <div class="pagination">';
                for ($i=1; $i <= 5; $i++) { 
                    echo'
                        <label class="pagination-item" for="'.$i.'">
                            <img src="imagenes/'.$i.'.png">
                        </label>
                    ';
                }
                echo'
                </div>
                ';    
                ?>
</body>
</html>