<?php
require_once __DIR__ . "/models/product.php";
require_once __DIR__ . "/models/category.php";

$catalogo = [];
$prod_category = new Category("Cane", "Carlino");
$prod_1 = new Product("Crocchete di Salmone", 5, $prod_category);

var_dump($prod_1);
