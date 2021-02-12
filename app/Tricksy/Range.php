<?php

declare(strict_types=1);
namespace App\Tricksy;

class Range implements \Iterator
{

    private $start;
    private $end;
    private $count = 0;

    public function __construct(int $start, int $end)
    {
        $this->start = $start;
        $this->end= $end;
    }

    public function rewind()
    {
        $this->position = $this->start;
    }

    public function current()
    {
        return $this->start;
    }

    public function key()
    {
        return $this->count;
    }

    public function next()
    {
        $this->start = $this->start + 1;
    }

    public function valid()
    {
    
        return $this->start <= $this->end;
    }
}