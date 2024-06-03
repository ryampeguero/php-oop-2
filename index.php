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
$prod_3->setMaterialList($materials2);
$prod_3->setSize("Medium");

$catalogo[] = $prod_3;


var_dump($catalogo);

