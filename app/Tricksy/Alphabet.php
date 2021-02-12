<?php

declare(strict_types=1);
namespace App\Tricksy;

class Alphabet implements \Iterator
{

    private $position;

    public function __construct()
    {
        $this->position = 65;
    }

    public function rewind()
    {
        $this->position = 65;
    }

    public function current()
    {
        return chr($this->position);
    }

    public function key()
    {
        return $this->position-65;
    }

    public function next()
    {
        $this->position = $this->position + 1;
    }

    public function valid()
    {
    
        return $this->position >= 65 && $this->position <= 90;
    }
}