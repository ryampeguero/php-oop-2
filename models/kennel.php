<?php
require_once __DIR__ . "/product.php";

class Kennel extends Product
{
    private int $capability;
    private string $size;
    private string $color;
    private array $materialList = [];

    public function getCapability()
    {
        return $this->capability;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function getMaterialList()
    {
        return $this->materialList;
    }

    public function setCapability($capability)
    {
        $this->capability = $capability;
    }


    public function setSize($size)
    {
        $size = strtolower($size);
        if ($size == "large" || $size == "medium" || $size == "small") {
            $this->size = $size;
        } else {
            throw new Exception("Non una dimensione valida");
        }
    }

    public function setColor($color)
    {
        $this->color = $color;
    }
    
    public function setMaterialList($materialList)
    {
        $this->materialList = $this->setGeneralList($this->materialList, $materialList);

    }
}
