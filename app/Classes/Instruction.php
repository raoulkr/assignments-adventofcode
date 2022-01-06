<?php

namespace App\Classes;

class Instruction {
    private string $instruction;

    public function __construct($instruction)
    {
        $this->instruction = $instruction;
    }

    public static function make($instruction) {
        return new Instruction($instruction);
    }

    public function getDirection() {
        return explode(' ', $this->instruction)[0];
    }

    public function getdistance() {
        return explode(' ', $this->instruction)[1];
    }
}
