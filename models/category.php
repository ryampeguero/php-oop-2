<?php

class Category{
    private string $type;
    private string $race;

    public function __construct(string $type, string $race)
    {
        $this->setType($type);
        $this->race = $race;
        
    }
    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }


    public function getRace()
    {
        return $this->race;
    }

    //Metodi Set
    public function setRace($race)
    {
        $this->race = $race;
    }

    public function setType($type)
    {
        $type = strtolower($type);
        if($type == "cane" || $type == "gatto")
        $this->type = $type;

    }
}