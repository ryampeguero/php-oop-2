<?php
require_once __DIR__ . "/category.php";
class Product
{
    protected string $name;
    protected string $imgProduct;
    protected int $price;
    protected int $quantity;
    protected Array $generalList;
    private Category $category;
    public function __construct(string $name, int $price, int $quantity, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category;
        $this->imgProduct = "./img/blank_poster.jpg";
    }

    //Metodi Get
    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getImgProduct()
    {
        return $this->imgProduct;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }


    //Metodi Set
    public function setName($name)
    {
        $this->name = $name;
    }

    public function setPrice(int $price)
    {
        if ($price > 0) {
            $this->price = $price;
        } else {
            throw new Exception("Inserisci un prezzo valido");
        }
    }

    public function setImgProduct($imgProduct)
    {
        $this->imgProduct = $imgProduct;
    }

    public function setGeneralList(Array $myList, $generalList)
    {
        if (is_array($generalList)) {
            $myList = $generalList;
        }else if(is_string($generalList)){
            $myList[] = $generalList;
        }else {
            throw new Exception("Non è un materiale valido");
        }

        return $myList;
    }
}
