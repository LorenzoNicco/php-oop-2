<?php
    require_once __DIR__ .'/classes/product.php';
    // require_once __DIR__ .'/classes/petDog.php';
    // require_once __DIR__ .'/classes/petCat.php';

    // $dogBall = new Dog('cane', 'gioco', 1);
    // $dogBall->setNameAndPic();
    // $dogBall->setPrice();

    // $catHouse = new Cat('gatto', 'cuccia', 1);
    // $catHouse->setNameAndPic();
    // $catHouse->setPrice();

    // $dogFood = new Dog('cane', 'cibo', 1);
    // $dogFood->setNameAndPic();
    // $dogFood->setPrice();

    // $catFood = new Cat('gatto', 'cibo', 1);
    // $catFood->setNameAndPic();
    // $catFood->setPrice();

    // $products = [$dogBall, $catHouse, $dogFood, $catFood];  

    require_once __DIR__ .'/classes/category.php';

    $categoriaCani = new Category('cani', '&#128054;');
    $categoriaGatti = new Category('gatti', '&#128049;');

    $prodotti = [];

    $prodotti[] = new Product('Pallina di gomma', 8, 'https://www.stockvault.net/data/2016/05/19/198785/preview16.jpg', 10, $categoriaCani);
    $prodotti[] = new Product('Castello per gatti', 25.99, 'https://images.pexels.com/photos/11533580/pexels-photo-11533580.jpeg', 3, $categoriaGatti);
    $prodotti[] = new Product('Cibo per gatti', 3.50, 'https://upload.wikimedia.org/wikipedia/commons/5/5b/Cat_and_Cat_Foods.jpg', 8, $categoriaGatti);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
        <!-- <?php 
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
                        Prodotto per: 
                        <?php 
                            if ($product->target == 'gatto') {
                        ?>
                                <i class="fa-solid fa-cat"></i>
                        <?php
                            }
                            elseif ($product->target == 'cane') {
                        ?>
                                <i class="fa-solid fa-dog"></i>
                        <?php
                            }
                        ?>
                    </li>
                    <li class="list-group-item">
                        Tipo di prodotto: <?php echo $product->type; ?>
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
        ?> -->

        <!-- versione 3 --------------------------------------------------------------------->
        <main>
            <div class="container">
                <div class="row">
                <?php 
                foreach ($prodotti as $product) {

                ?>
                    <div class="col-4 card" style="width: 18rem;">
                        <img src=<?php echo $product->img ?> class="card-img-top" alt="...">

                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $product->name; ?>
                            </h5>
                        </div>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Prodotto per: 
                                <?php echo $product->category->icon; ?>
                                <?php echo $product->category->name; ?>
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
                </div>
            </div>
        </main>
    </body>
</html>