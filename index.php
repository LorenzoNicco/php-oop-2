<?php
    require_once __DIR__ .'/classes/product.php';
    require_once __DIR__ .'/classes/petDog.php';
    require_once __DIR__ .'/classes/petCat.php';

    $dogBall = new Dog('cane', 'gioco', 1);
    $catHouse = new Cat('gatto', 'cuccia', 1);
    $dogFood = new Dog('cane', 'cibo', 1);
    $catFood = new Cat('gatto', 'cibo', 1);
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
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">

            <div class="card-body">
                <h5 class="card-title">Card title</h5>
            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item">An item</li>
                <li class="list-group-item">A second item</li>
                <li class="list-group-item">A third item</li>
            </ul>
        </div>
    </body>
</html>