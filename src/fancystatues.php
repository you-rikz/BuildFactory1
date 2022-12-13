<?php

namespace App;

class HouseWithFancyStatuesBuilder implements HouseBuilder
{
    private $FancyStatues;

    /**
     * A fresh builder instance should contain a blank FancyStatues object, which is
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
        $this->buildFancyStatues();
        
    }

    public function buildDoors()
    {
        $this->FancyStatues = new HouseWithFancyStatues();
        $this->FancyStatues->parts[] = "Doors";
    }
    public function buildWindows()
    {
        $this->FancyStatues = new HouseWithFancyStatues();
        $this->FancyStatues->parts[] = "Windows";
    }
    public function buildWalls()
    {
        $this->FancyStatues = new HouseWithFancyStatues();
        $this->FancyStatues->parts[] = "Walls";
    }
    public function buildRoof()
    {
        $this->FancyStatues = new HouseWithFancyStatues();
        $this->FancyStatues->parts[] = "Roof";
    }
    public function buildFlooring()
    {
        $this->FancyStatues = new HouseWithFancyStatues();
        $this->FancyStatues->parts[] = "Flooring";
    }
    public function buildFoundation()
    {
        $this->FancyStatues = new HouseWithFancyStatues();
        $this->FancyStatues->parts[] = "Foundation";
    }
    public function buildFancyStatues()
    {
        $this->FancyStatues = new HouseWithFancyStatues();
        $this->FancyStatues->parts[] = "FancyStatues";
    }

    public function getResult():HouseWithFancyStatues {
        $result = $this->FancyStatues;
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildFancyStatues();
    

        return $result;
    }

}
    
    class HouseWithFancyStatues
    {
        public $parts = [];
    
        public function listParts(): void
        {
            echo "House parts: " . implode(', ', $this->parts) . "\n\n";
        }
    }
    // public function producePartA(): void
    // {
    //     $this->FancyStatues->parts[] = "Doorst";
    // }

    // public function producePartB(): void
    // {
    //     $this->product->parts[] = "PartB1";
    // }

    // public function producePartC(): void
    // {
    //     $this->product->parts[] = "PartC1";
    // }




    
