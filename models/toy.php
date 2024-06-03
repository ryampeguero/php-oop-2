<?php
require_once __DIR__ . "/product.php";

class Toy extends Product
{
    private array $materialList = [];
    private string $size;

    public function getMaterialList()
    {
        return $this->materialList;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getGeneralList()
    {
        return $this->materialList;
    }

    public function setMaterialList($materialList)
    {
       $this->materialList = $this->setGeneralList($this->materialList, $materialList);
    }

    public function setSize(string $size)
    {
        $size = strtolower($size);
        if ($size == "big" || $size == "medium" || $size == "small") {
            $this->size = $size;
        }else {
            throw new Exception("Non una dimensione valida");
        }
    }
}
