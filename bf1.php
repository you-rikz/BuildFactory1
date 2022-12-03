<?php

namespace RefactoringGuru\Builder\Conceptual;


interface HouseBuilder
{
    public function buildDoors(): void;
    public function buildWindows(): void;
    public function buildWalls(): void;
    public function bbuildRoof(): void;
    public function buildFlooring(): void;
    public function buildFoundation(): void;
    public function getResult(): void;
}

// abstract class House{
//     public $door;
//     public $window;
//     public $wall;
//     public $roof;
//     public $foundation;
// }

class HouseWithGardenBuilder implements HouseBuilder
{
    private $garden;

    public function __construct()
    {
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildGarden();
        $this->getResult();
    }


    public function buildDoors(): void
    {
        $this->garden->buildDoors = "doors";
    }

    public function buildWindows(): void
    {
        $this->garden->buildWindows = "windows";
    }

    public function buildWalls(): void
    {
        $this->garden->buildWalls = "walls";
    }

    public function buildRoof(): void
    {
        $this->garden->buildRoof = "roof";
    }

    public function buildFlooring(): void
    {
        $this->garden->buildFlooring = "flooring";
    }

    public function buildFoundation(): void
    {
        $this->garden->buildFoundation = "foundation";
    }

    public function buildGarden(): void
    {
        $this->garden->buildGarden = "garden";
    }

    public function getResult(): HouseWithGarden
    {
        $result = $this->garden;
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildGarden();
        $this->getResult();

        return $result;
    }
}

class HouseWithGarageBuilder implements HouseBuilder
{
    private $garage;

    public function __construct()
    {
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildGarage();
        $this->getResult();
    }


    public function buildDoors(): void
    {
        $this->garage->buildDoors = "doors";
    }

    public function buildWindows(): void
    {
        $this->garage->buildWindows = "windows";
    }

    public function buildWalls(): void
    {
        $this->garage->buildWalls = "walls";
    }

    public function buildRoof(): void
    {
        $this->garage->buildRoof = "roof";
    }

    public function buildFlooring(): void
    {
        $this->garage->buildFlooring = "flooring";
    }

    public function buildFoundation(): void
    {
        $this->garage->buildFoundation = "foundation";
    }

    public function buildGarage(): void
    {
        $this->garage->buildGarage = "garage";
    }

    public function getResult(): HouseWithGarage
    {
        $result = $this->garage;
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildGarage();
        $this->getResult();

        return $result;
    }
}

class HouseWithSwimmingPoolBuilder implements HouseBuilder
{
    private $swimming_pool;

    public function __construct()
    {
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildSwimmingPool();
        $this->getResult();
    }


    public function buildDoors(): void
    {
        $this->swimming_pool->buildDoors[] = "doors";
    }

    public function buildWindows(): void
    {
        $this->swimming_pool->buildWindows[] = "windows";
    }

    public function buildWalls(): void
    {
        $this->swimming_pool->buildWalls[] = "walls";
    }

    public function buildRoof(): void
    {
        $this->swimming_pool->buildRoof[] = "roof";
    }

    public function buildFlooring(): void
    {
        $this->swimming_pool->buildFlooring[] = "flooring";
    }

    public function buildFoundation(): void
    {
        $this->swimming_pool->buildFoundation[] = "foundation";
    }

    public function buildSwimmingPool(): void
    {
        $this->swimming_pool->buildSwimmingPool[] = "swimming pool";
    }

    public function getResult(): HouseWithSwimmingPool
    {
        $result = $this->swimming_pool;
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildSwimmingPool();
        $this->getResult();

        return $result;
    }
}

class HouseWithFancyStatuesBuilder implements HouseBuilder
{
    private $fancy_statue;

    public function __construct()
    {
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildFancyStatues();
        $this->getResult();
    }


    public function buildDoors(): void
    {
        $this->fancy_statue->buildDoors[] = "doors";
    }

    public function buildWindows(): void
    {
        $this->fancy_statue->buildWindows[] = "windows";
    }

    public function buildWalls(): void
    {
        $this->fancy_statue->buildWalls[] = "walls";
    }

    public function buildRoof(): void
    {
        $this->fancy_statue->buildRoof[] = "roof";
    }

    public function buildFlooring(): void
    {
        $this->fancy_statue->buildFlooring[] = "flooring";
    }

    public function buildFoundation(): void
    {
        $this->fancy_statue->buildFoundation[] = "foundation";
    }

    public function buildFancyStatues(): void
    {
        $this->fancy_statue->buildFancyStatues[] = "fancy statues";
    }

    public function getResult(): HouseWithSwimmingPool
    {
        $result = $this->fancy_statue;
        $this->buildDoors();
        $this->buildWindows();
        $this->buildWalls();
        $this->buildRoof();
        $this->buildFlooring();
        $this->buildFoundation();
        $this->buildFancyStatues();
        $this->getResult();

        return $result;
    }
}

class HouseWithGarden
{
    public $garden = [];

    public function listParts(): void
    {
        echo "Product parts: " . implode(', ', $this->parts) . "\n\n";
    }
}

/**
 * The Director is only responsible for executing the building steps in a
 * particular sequence. It is helpful when producing products according to a
 * specific order or configuration. Strictly speaking, the Director class is
 * optional, since the client can control builders directly.
 */
class Director
{
    /**
     * @var Builder
     */
    private $builder;

    /**
     * The Director works with any builder instance that the client code passes
     * to it. This way, the client code may alter the final type of the newly
     * assembled product.
     */
    public function setBuilder(Builder $builder): void
    {
        $this->builder = $builder;
    }

    /**
     * The Director can construct several product variations using the same
     * building steps.
     */
    public function buildMinimalViableProduct(): void
    {
        $this->builder->producePartA();
    }

    public function buildFullFeaturedProduct(): void
    {
        $this->builder->producePartA();
        $this->builder->producePartB();
        $this->builder->producePartC();
    }
}

/**
 * The client code creates a builder object, passes it to the director and then
 * initiates the construction process. The end result is retrieved from the
 * builder object.
 */
function clientCode(Director $director)
{
    $builder = new ConcreteBuilder1();
    $director->setBuilder($builder);

    echo "Standard basic product:\n";
    $director->buildMinimalViableProduct();
    $builder->getProduct()->listParts();

    echo "Standard full featured product:\n";
    $director->buildFullFeaturedProduct();
    $builder->getProduct()->listParts();

    // Remember, the Builder pattern can be used without a Director class.
    echo "Custom product:\n";
    $builder->producePartA();
    $builder->producePartC();
    $builder->getProduct()->listParts();
}

$director = new Director();
clientCode($director);