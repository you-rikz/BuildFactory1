<?php

namespace App;

class HouseWithSwimmingPoolBuilder implements HouseBuilder
{
    private $SwimmingPool;

    /**
     * A fresh builder instance should contain a blank SwimmingPool object, which is
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
        $this->buildSwimmingPool();
        
    }

    public function buildDoors()
    {
        $this->SwimmingPool = new HouseWithSwimmingPool();
        $this->SwimmingPool->parts[] = "Doors";
    }
    public function buildWindows()
    {
        $this->SwimmingPool = new HouseWithSwimmingPool();
        $this->SwimmingPool->parts[] = "Windows";
    }
    public function buildWalls()
    {
        $this->SwimmingPool = new HouseWithSwimmingPool();
        $this->SwimmingPool->parts[] = "Walls";
    }
    public function buildRoof()
    {
        $this->SwimmingPool = new HouseWithSwimmingPool();
        $this->SwimmingPool->parts[] = "Roof";
    }
    public function buildFlooring()
    {
        $this->SwimmingPool = new HouseWithSwimmingPool();
        $this->SwimmingPool->parts[] = "Flooring";
    }
    public function buildFoundation()
    {
        $this->SwimmingPool = new HouseWithSwimmingPool();
        $this->SwimmingPool->parts[] = "Foundation";
    }
    public function buildSwimmingPool()
    {
        $this->SwimmingPool = new HouseWithSwimmingPool();
        $this->SwimmingPool->parts[] = "SwimmingPool";
    }

    public function getResult():HouseWithSwimmingPool {
        $result = $this->SwimmingPool;
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildSwimmingPool();
    

        return $result;
    }

}
    
    class HouseWithSwimmingPool
    {
        public $parts = [];
    
        public function listParts(): void
        {
            echo "House parts: " . implode(', ', $this->parts) . "\n\n";
        }
    }
    // public function producePartA(): void
    // {
    //     $this->SwimmingPool->parts[] = "Doorst";
    // }

    // public function producePartB(): void
    // {
    //     $this->product->parts[] = "PartB1";
    // }

    // public function producePartC(): void
    // {
    //     $this->product->parts[] = "PartC1";
    // }




    
