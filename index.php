<?php

include_once __DIR__ . '/classes/Products.php';

$catFood = new Products('<i class="fa-solid fa-cat"></i>', 'https://www.focus.it/images/2021/02/22/gatto_1020x680.jpg', 'purina One cat',
500, 'food');
$dogFood = new Products('<i class="fa-solid fa-dog"></i>', 'https://www.zoo-service.it/wp-content/uploads/2019/01/carattere-dei-cani.jpg.webp', 'purina One dog',
600, 'food');
$dogKennel = new Products('<i class="fa-solid fa-dog"></i>', 'https://www.perilcane.it/3730-large_default/cuccia-coibentata-termica-per-cani-modello-comfort.jpg', 'Best Kennel',
10000, 'kennel');
$catBed = new Products('<i class="fa-solid fa-cat"></i>', 'https://www.minellisrl.eu/1110-large_default/cuccia-per-gatto-in-vimini-con-cuscino-simple-day.jpg', 'bed of your cat',
5000, 'bed for cat');
$plasticBone = new Products('<i class="fa-solid fa-dog"></i>', 'https://www.epocaitalpigeon.com/8850-large_default/tucano-gioco-osso-colorato-gomma-dura-per-cane-tg-l-22-cm-arancione-fluo.jpg', 'bones',
650, 'game');
$catBed = new Products('<i class="fa-solid fa-cat"></i>', 'https://onlypets.it/2163-thickbox_default/giochi-gatto-mix-col-blu-ferribiella.jpg', 'little mouse',
300, 'game');

$products=[
    $catFood,
    $dogFood,
    $dogKennel,
    $catBed,
    $plasticBone,
    $catBed,
]
 
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
                       <?php echo "$product->title" ?>
                    </span> 
                    Purina One Dog
                    <br>
                    <span>
                    <?php echo "$product->category" ?>
                    </span>
                    <i class="fa-solid fa-cat"></i>
                    <br>
                    <span>
                    <?php echo "$product->type" ?>
                    </span>
                    Food
                    <br>
                    <span>
                    <?php echo "$product->priceOnCent" ?>
                    </span>
                    500
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