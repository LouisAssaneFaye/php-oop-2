<?php

include_once __DIR__ . '/classes/Products.php';

$catFood = new Food('food', 500 ,'<i class="fa-solid fa-cat"></i>', 'https://www.focus.it/images/2021/02/22/gatto_1020x680.jpg', 'purina One cat',
['10,50']);

$dogFood = new Food('food', 700, '<i class="fa-solid fa-dog"></i>', 'https://www.zoo-service.it/wp-content/uploads/2019/01/carattere-dei-cani.jpg.webp', 'purina One dog',
['15,50']);

$dogAccessory = new Accessory('kennel', 'big', '<i class="fa-solid fa-dog"></i>', 'https://www.perilcane.it/3730-large_default/cuccia-coibentata-termica-per-cani-modello-comfort.jpg', 'Best Kennel',
['20,55']);

$catAccessory = new Accessory('bed for cat', 'medium', '<i class="fa-solid fa-cat"></i>', 'https://www.minellisrl.eu/1110-large_default/cuccia-per-gatto-in-vimini-con-cuscino-simple-day.jpg', 'bed of your cat',
['18,50']);

$dogToy = new Toy('game', 'medium', '<i class="fa-solid fa-dog"></i>', 'https://www.epocaitalpigeon.com/8850-large_default/tucano-gioco-osso-colorato-gomma-dura-per-cane-tg-l-22-cm-arancione-fluo.jpg', 'bones',
['5,50']);

$catToy = new Toy('game', 'small' , '<i class="fa-solid fa-cat"></i>', 'https://onlypets.it/2163-thickbox_default/giochi-gatto-mix-col-blu-ferribiella.jpg', 'little mouse',
['2,50']);

$products=[
    $catFood,
    $dogFood,
    $dogToy,
    $catToy,
    $dogAccessory,
    $catAccessory,
];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="container">
        <?php foreach ($products as $product){?>

            <div class="card">
            <div class="informations">
                <h3>
                    Informations
                </h3>
                <p class="informations">
                    <span>
                       Title:
                    </span> 
                    <?php echo "$product->title" ?>
                    <br>
                    <span>
                       Category:
                    </span>
                    <?php echo "$product->category" ?>
                    <br>
                    <span>
                       Type:
                    </span>
                    <?php echo "$product->type" ?>
                    <br>
                    <span>
                       Price on dollar:
                    </span>
                    <?php foreach ($product->price as $singlePrice){
                        echo "$singlePrice";
                    }
                    ?>
                </p>

            </div>
            <div class="imagine">
                <img src=" <?php echo "$product->imagine" ?>" alt="immagine">
            </div>

        </div>

        <?php }?>
    </div>
</body>
</html>