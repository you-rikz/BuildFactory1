<?php

namespace App;

class HouseWithGarageBuilder implements HouseBuilder
{
    private $Garage;

    /**
     * A fresh builder instance should contain a blank Garage object, which is
     * used in further assembly.
     */
    public function __construct()
    {
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildGarage();
        
    }

    public function buildDoors()
    {
        $this->Garage = new HouseWithGarage();
        $this->Garage->parts[] = "Doors";
    }
    public function buildWindows()
    {
        $this->Garage = new HouseWithGarage();
        $this->Garage->parts[] = "Windows";
    }
    public function buildWalls()
    {
        $this->Garage = new HouseWithGarage();
        $this->Garage->parts[] = "Walls";
    }
    public function buildRoof()
    {
        $this->Garage = new HouseWithGarage();
        $this->Garage->parts[] = "Roof";
    }
    public function buildFlooring()
    {
        $this->Garage = new HouseWithGarage();
        $this->Garage->parts[] = "Flooring";
    }
    public function buildFoundation()
    {
        $this->Garage = new HouseWithGarage();
        $this->Garage->parts[] = "Foundation";
    }
    public function buildGarage()
    {
        $this->Garage = new HouseWithGarage();
        $this->Garage->parts[] = "Garage";
    }

    public function getResult():HouseWithGarage {
        $result = $this->Garage;
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildGarage();

        return $result;
    }

}
    
    class HouseWithGarage
    {
        public $parts = [];
    
        public function listParts(): void
        {
            echo "House parts: " . implode(', ', $this->parts) . "\n\n";
        }
    }
    // public function producePartA(): void
    // {
    //     $this->Garage->parts[] = "Doorst";
    // }

    // public function producePartB(): void
    // {
    //     $this->product->parts[] = "PartB1";
    // }

    // public function producePartC(): void
    // {
    //     $this->product->parts[] = "PartC1";
    // }




    
