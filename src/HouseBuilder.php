<?php 

namespace App;


interface HouseBuilder
{
    public function buildDoors(): void;

    public function buildWindows(): void;

    public function buildWalls(): void;

    public function buildRoof(): void;

    public function buildFlooring(): void;

    public function buildFoundation(): void;
}