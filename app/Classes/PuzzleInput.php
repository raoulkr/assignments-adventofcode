<?php

namespace App\Classes;

class PuzzleInput
{
    static public function get(string $puzzle):string
    {
        $path = "puzzleData/";

        $PuzzleData = fopen($path . $puzzle, "r");
        if ($PuzzleData) {
            while (($PuzzleText = fgets($PuzzleData)) !== false) {
                return $PuzzleText;
            }

            fclose($PuzzleData);
        } else {
            return "Error: can not find puzzle file";
        }
    }
}

