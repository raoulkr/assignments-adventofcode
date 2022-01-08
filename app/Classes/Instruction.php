<?php

namespace App\Classes;

class Instruction {
    public static function getDirections(array $instruction):array {
        return explode(' ' , preg_replace('/[0-9]+/', '', implode($instruction)));
    }

    public static function getCardinalValues(array $instruction):array{
        return array_map('intval', preg_replace('/[^0-9.]+/', ' ', $instruction));
    }
}

