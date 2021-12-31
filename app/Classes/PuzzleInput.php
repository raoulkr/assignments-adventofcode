<?php

namespace App\Classes;

class PuzzleInput
{
    static public function get(string $puzzle):string
    {
        $path = "puzzleData/";
        $fileLocation = $path . $puzzle;
        $puzzleInput = fopen($fileLocation, 'r');
        return (string)$puzzleInput;
    }
}
