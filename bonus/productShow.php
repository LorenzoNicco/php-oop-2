<?php
    session_start();
    
    include __DIR__ .'/functions.php';
    require_once __DIR__ .'/classes/product.php';
    require_once __DIR__ .'/classes/petDog.php';
    require_once __DIR__ .'/classes/petCat.php';

    var_dump($_SESSION['product']);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Product Show</title>
    </head>
    <body>
        <div class="card" style="width: 18rem;">
            <img src=<?php echo $_SESSION['product']['pic']; ?> class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $_SESSION['product']['name']; ?>
                </h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Prodotto per: 
                    <?php 
                        if ($_SESSION['product']['target'] == 'gatto') {
                    ?>
                            <i class="fa-solid fa-cat"></i>
                    <?php
                        }
                        elseif ($_SESSION['product']['target'] == 'cane') {
                    ?>
                            <i class="fa-solid fa-dog"></i>
                    <?php
                        }
                    ?>
                </li>
                <li class="list-group-item">
                    Tipo di prodotto: <?php echo $_SESSION['product']['type']; ?>
                </li>
                <li class="list-group-item">
                    Quantità: <?php echo $_SESSION['product']['units']; ?>
                </li>
                <li class="list-group-item">
                    Prezzo: <?php echo $_SESSION['product']['price']; ?>
                </li>
            </ul>
        </div>
    </body>
</html>