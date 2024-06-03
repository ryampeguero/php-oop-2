<?php
require_once __DIR__."/category.php";
class Product{
    protected string $name;
    protected string $imgProduct;
    protected int $price;
    protected int $quantity;
    private Category $category;
    public function __construct(string $name, int $price, int $quantity, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category;
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

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function setImgProduct($imgProduct)
    {
        $this->imgProduct = $imgProduct;
    }

   
 
}