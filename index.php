<?php
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/category.php";
require_once __DIR__ . "/models/food.php";


$ingredients = ["Salmone", "Tonno", "Farina", "Sale", "Acqua", "Zucchero"];

$prod_category = new Category("Cane", "Carlino");
$prod_1 = new Food("Crocchete di Salmone", 5, 200, $prod_category);
$prod_1->setExpiringDate("2030-09-31");
$prod_1->setIngredientList($ingredients);

var_dump($prod_1);
