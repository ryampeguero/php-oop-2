<?php
require_once __DIR__."/category.php";
class Product{
    private string $name;
    private int $price;
    private Category $category;
    public function __construct(string $name, int $price, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;

    }

    public function getPrice()
    {
        return $this->price;
    }


    public function setPrice($price)
    {
        $this->price = $price;
    }
}