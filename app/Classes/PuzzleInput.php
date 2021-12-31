<?php

namespace App\Classes;

class PuzzleInput
{
    static public function get(string $puzzle):string
    {
        $path = "../puzzleData/";
        $location = $path . $puzzle;

        $PuzzleFile = fopen($location , "r");
        if ($PuzzleFile) {
            $puzzleContent = fread($PuzzleFile, filesize($location));
            fclose($PuzzleFile);
            return $puzzleContent;
        } else {
            return "Error: can not find puzzle file";
        }
    }
}

