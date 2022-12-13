<?php

namespace App;

abstract class House
{
    public $door;
    public $windows;
    public $walls;
    public $roof;
    public $foundation;
}

class HouseWithGarden extends House
{

}
class HouseWithGarage extends House
{
    
}
class HouseWithSwimmingPool extends House
{
    
}
class HouseWithFancyStatue extends House
{
    
}