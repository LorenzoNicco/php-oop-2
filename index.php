<?php
    require_once __DIR__ .'/classes/product.php';
    require_once __DIR__ .'/classes/petDog.php';
    require_once __DIR__ .'/classes/petCat.php';

    $dogBall = new Dog('cane', 'gioco', 1);
    $dogBall->setNameAndPic();
    $dogBall->setPrice();

    $catHouse = new Cat('gatto', 'cuccia', 1);
    $catHouse->setNameAndPic();
    $catHouse->setPrice();

    $dogFood = new Dog('cane', 'cibo', 1);
    $dogFood->setNameAndPic();
    $dogFood->setPrice();

    $catFood = new Cat('gatto', 'cibo', 1);
    $catFood->setNameAndPic();
    $catFood->setPrice();

    $products = [$dogBall, $catHouse, $dogFood, $catFood];
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <title>PHP OOP 2</title>
    </head>
    <body>
        <!-- versione 1 -------------------------------------------------------------------------------------------->
        <!-- <div class="card" style="width: 18rem;">
            <img src="https://www.stockvault.net/data/2016/05/19/198785/preview16.jpg" class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $dogBall->name; ?>
                </h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    Prodotto per: <?php echo $dogBall->target; ?>
                </li>
                <li class="list-group-item">
                    Quantità: <?php echo $dogBall->units; ?>
                </li>
                <li class="list-group-item">
                    Prezzo: <?php echo $dogBall->price; ?>
                </li>
            </ul>
        </div> -->

        <!-- versione 2 ---------------------------------------------------------------------------------------->
        <?php 
            foreach ($products as $product) {

        ?>
            <div class="card" style="width: 18rem;">
                <img src=<?php echo $product->pic ?> class="card-img-top" alt="...">

                <div class="card-body">
                    <h5 class="card-title">
                        <?php echo $product->name; ?>
                    </h5>
                </div>

                <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                        Prodotto per: <?php echo $product->target; ?>
                    </li>
                    <li class="list-group-item">
                        Quantità: <?php echo $product->units; ?>
                    </li>
                    <li class="list-group-item">
                        Prezzo: <?php echo $product->price; ?>
                    </li>
                </ul>
            </div>
        <?php
            }
        ?>
    </body>
</html>