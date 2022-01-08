<?php

namespace App\Classes;

class Instruction {
    public static function getStrArr(array $instruction) {
        return explode(' ' , preg_replace('/[0-9]+/', '', implode($instruction)));
    }

    public static function getIntArr(array $instruction) {
        return array_map('intval', preg_replace('/[^0-9.]+/', ' ', $instruction));
    }
}
