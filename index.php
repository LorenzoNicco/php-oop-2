<?php
    require_once __DIR__ .'/classes/product.php';
    require_once __DIR__ .'/classes/petDog.php';
    require_once __DIR__ .'/classes/petCat.php';

    $prodottoCane = new Dog('cane', 'cuccia', 2);

    $prodottoCane->setPrice();

    var_dump($prodottoCane);

    $prodottoGatto = new Cat('cat', 'cuccia', 2);

    $prodottoGatto->setPrice();

    var_dump($prodottoGatto);
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
    
</body>
</html>