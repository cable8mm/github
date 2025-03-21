<?php

namespace Cable8mm\Github;

class Example
{
    /**
     * Plus method
     */
    public function plus(int $x, int $y): int
    {
        return $x + $y;
    }

    public function minus(int $x, int $y): int
    {
        return $x - $y;
    }

    public function times(int $x, int $y): int
    {
        return $x * $y;
    }
}
