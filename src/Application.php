<?php


namespace App;

use App\Director;
use App\HouseWithGardenBuilder;
use App\HouseWithGarageBuilder;
use App\HouseWithSwimmingPoolBuilder;
use App\HouseWithFancyStatuesBuilder;


class Application
{
   function Application(Director $director)
   {
    $garden_builder = new HouseWithGardenBuilder();
    $director->setHouseBuilder($garden_builder);

    echo "House with Garden:\n";
    $director->makeHouseWithGarden();
    $garden_builder->getResult()->listParts();

    $garage_builder = new HouseWithGarageBuilder();
    $director->setHouseBuilder($garage_builder);

    echo "House with Garage:\n";
    $director->makeHouseWithGarage();
    $garage_builder->getResult()->listParts();

    $foundation_builder = new HouseWithFoundation();
    $director->setHouseBuilder($foundation_builder);

    echo "House with Foundation:\n";
    $director->makeHouseWithFoundation();
    $foundation_builder->getResult()->listParts();

    $statue_builder = new HouseWithFancyStatues();
    $director->setHouseBuilder($statue_builder);

    echo "House with Fancy Statues:\n";
    $director->makeHouseWithFancyStatues();
    $statue_builder->getResult()->listParts();

    $director = new Director();
clientCode($director);
   }
   
}