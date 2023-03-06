<?php
    session_start();
    // require_once __DIR__ .'/classes/product.php';
    // require_once __DIR__ .'/classes/petDog.php';
    // require_once __DIR__ .'/classes/petCat.php';
    include __DIR__ .'/functions.php';

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

    // if (isset($_GET['targetInput']) && isset($_GET['typeInput']) && isset($_GET['unitsInput'])) {
    //     $targetInput = $_GET['targetInput'];
    //     $typeInput = $_GET['typeInput'];
    //     $unitsInput = $_GET['unitsInput'];

    //     if ($targetInput == 'cane') {
    //         $product = new Dog('cane', $typeInput, $unitsInput);
    //         $product->setNameAndPic();
    //         $product->setPrice();

    //         $_SESSION['product'] = $product;

    //         header('Location: ./productShow.php');
    //     }
    //     elseif ($targetInput == 'gatto') {
    //         $product = new Cat('gatto', $typeInput, $unitsInput);
    //         $product->setNameAndPic();
    //         $product->setPrice();

    //         $_SESSION['product'] = $product;

    //         header('Location: ./productShow.php');
    //     }
    // }
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

        <form action="" method="GET">
            <div>
                <label for="targetInput">Per quale animale fai acquisti?</label>
                <select name="targetInput" id="targetInput">
                    <option value="cane">Cane</option>
                    <option value="gatto">Gatto</option>
                </select>
            </div>

            <div>
                <label for="typeInput">Che tipo di prodotto stai cercando?</label>
                <select name="typeInput" id="typeInput">
                    <option value="cibo">Cibo</option>
                    <option value="cuccia">Cuccia</option>
                    <option value="gioco">Gioco</option>
                </select>
            </div>

            <div>
                <label for="unitsInput">Di quante unità hai bisogno?</label>
                <input type="number" name="unitsInput" id="unitsInput">
            </div>

            <button type="submit">Cerca</button>
        </form>

        <!-- card nella stessa pagina ----------------------------------------------------------->
        <!-- <div class="card" style="width: 18rem;">
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
        </div> -->
    </body>
</html>