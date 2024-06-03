<?php
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/food.php";
require_once __DIR__ . "/models/toy.php";
require_once __DIR__ . "/models/kennel.php";

$catalogo = [];
//Lista ingredienti
$ingredients = ["Salmone", "Tonno", "Farina", "Sale", "Acqua", "Zucchero"];
//Istanza categoria
$prod_category = new Category("Cane", "Carlino");
//Istanza prodotto Food
$prod_1 = new Food("Crocchete di Salmone", 5, 200, $prod_category);
$prod_1->setImgProduct("https://images.ctfassets.net/550nf1gumh01/3On3unatR5g271dhnyAlY4/ebfb1c242039bef34c80214212248b46/Cat_Adult_Kibble_Salmon_EN.png?q=80&w=800");
$prod_1->setExpiringDate("2030-09-31");
$prod_1->setIngredientList($ingredients);

//Inserimento nel catalogo per la stampa
$catalogo[] = $prod_1;

//Lista materiali
$materials = ["Fibra di Carbonio", "Gomma", "Cotone"];
//Istanza categoria
$prod_2_category = new Category("Gatto", "Arancione");
//Istanza prodotto Toy
$prod_2 = new Toy("Palla di gomma", 15, 300, $prod_2_category);
$prod_2->setImgProduct("https://static.vecteezy.com/system/resources/previews/021/084/830/non_2x/isolated-rubber-band-ball-of-colored-elastic-png.png");
$prod_2->setMaterialList($materials);
$prod_2->setSize("Big");

$catalogo[] = $prod_2;

//Terzo Prodotto

//Lista materiali
$materials2 = ["Alluminio", "Cotone", "Seta", "Oro"];
//Istanza categoria
$prod_3_category = new Category("Gatto", "Generico");
//Istanza prodotto Toy
$prod_3 = new Toy("Casetta in Alluminio", 400, 52, $prod_3_category);
$prod_3->setImgProduct("https://m.media-amazon.com/images/S/aplus-media/sc/ea7bc992-61a4-45cf-9750-e26a926068bd.__CR0,0,300,400_PT0_SX300_V1___.png");
$prod_3->setMaterialList($materials2);
$prod_3->setSize("Medium");

$catalogo[] = $prod_3;


// var_dump($catalogo);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <?php foreach ($catalogo as $prod) { ?>
                <div class="col-4 ">
                    <div class="card ms_card">
                        <div class="border">
                            <img src="<?php echo $prod->getImgProduct() ?>" class="card-img-top" alt="">
                        </div>

                        <div class="card-body d-flex flex-column justify-self-end">
                            <h4 class="card-title"> <?php echo $prod->getName(); ?></h4>
                            <ul>
                                <?php
                                foreach ($prod->getGeneralList() as $material) {
                                    echo "<li>" . $material . "</li>";
                                }
                                ?>
                            </ul>
                            <p class="card-text">Quantità Disponibile: <?php echo $prod->getQuantity(); ?></p>
                            <?php
                            if (is_a($prod, "Food")) {
                                echo "<div class='card-text'>Data di Scadenza: " . $prod->getExpiringDate() . "</div>";
                            }
                            ?>

                            <a href="#" class="btn btn-primary justify-self-end">Aggiungi al Carrello </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>


</body>

</html>