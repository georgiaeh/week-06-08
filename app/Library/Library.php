<?php

declare(strict_types=1);
namespace App\Library;

class Library
{
    private $shelves;

    public function __construct()
    {
        $this->shelves = collect();
    }

    public function addShelf(Shelf $shelf) : Library
    {
        $this->shelves->push($shelf);
        return $this;
    }

    public function titles()
    {
        return $this->shelves
        ->map( function ($shelf){
            return $shelf->titles();
        })
        ->all();
    }
}