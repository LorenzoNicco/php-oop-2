<?php
    require_once __DIR__ .'/classes/product.php';
    require_once __DIR__ .'/classes/petDog.php';
    require_once __DIR__ .'/classes/petCat.php';

    if (isset($_GET['targetInput']) && isset($_GET['typeInput']) && isset($_GET['unitsInput'])) {
        $targetInput = $_GET['targetInput'];
        $typeInput = $_GET['typeInput'];
        $unitsInput = $_GET['unitsInput'];

        if ($targetInput == 'cane') {
            $product = new Dog('cane', $typeInput, $unitsInput);
            $product->setNameAndPic();
            $product->setPrice();

            $_SESSION['product'] = $product;

            header('Location: ./productShow.php');
        }
        elseif ($targetInput == 'gatto') {
            $product = new Cat('gatto', $typeInput, $unitsInput);
            $product->setNameAndPic();
            $product->setPrice();

            $_SESSION['product'] = $product;

            header('Location: ./productShow.php');
        }
    }
?>