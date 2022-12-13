<?php

namespace App;

class HouseWithGardenBuilder implements HouseBuilder
{
    private $garden;

    /**
     * A fresh builder instance should contain a blank garden object, which is
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
        $this->buildGarden();
        
    }

    public function buildDoors()
    {
        $this->garden = new HouseWithGarden();
        $this->garden->parts[] = "Doors";
    }
    public function buildWindows()
    {
        $this->garden = new HouseWithGarden();
        $this->garden->parts[] = "Windows";
    }
    public function buildWalls()
    {
        $this->garden = new HouseWithGarden();
        $this->garden->parts[] = "Walls";
    }
    public function buildRoof()
    {
        $this->garden = new HouseWithGarden();
        $this->garden->parts[] = "Roof";
    }
    public function buildFlooring()
    {
        $this->garden = new HouseWithGarden();
        $this->garden->parts[] = "Flooring";
    }
    public function buildFoundation()
    {
        $this->garden = new HouseWithGarden();
        $this->garden->parts[] = "Foundation";
    }
    public function buildGarden()
    {
        $this->garden = new HouseWithGarden();
        $this->garden->parts[] = "Garden";
    }

    public function getResult():HouseWithGarden {
        $result = $this->garden;
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildGarden();
    

        return $result;
    }

}
    
    class HouseWithGarden
    {
        public $parts = [];
    
        public function listParts(): void
        {
            echo "House parts: " . implode(', ', $this->parts) . "\n\n";
        }
    }
    // public function producePartA(): void
    // {
    //     $this->garden->parts[] = "Doorst";
    // }

    // public function producePartB(): void
    // {
    //     $this->product->parts[] = "PartB1";
    // }

    // public function producePartC(): void
    // {
    //     $this->product->parts[] = "PartC1";
    // }




    
