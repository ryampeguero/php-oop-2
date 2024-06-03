<?php
require_once __DIR__ . "/product.php";

class Food extends Product
{
    private string $expiringDate;
    private array $ingredientList;


    public function getExpiringDate()
    {
        return $this->expiringDate;
    }

    public function getIngredientList()
    {
        return $this->ingredientList;
    }

    public function setExpiringDate($expiringDate)
    {
        $this->expiringDate = $expiringDate;
    }


    public function setIngredientList($ingredientList)
    {
        if (is_array($ingredientList)) {
            $this->ingredientList = $ingredientList;
        }else{
            $this->ingredientList[] = $ingredientList;
        }
    }
}
