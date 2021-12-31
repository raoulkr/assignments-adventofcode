<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\PuzzleInput;

class SolutionPuzzle2
{
    static public function Solution(string $puzzle):string
    {
        $PuzzleData = str_split(PuzzleInput::get($puzzle));
        $result = self::Method($PuzzleData);

        return "RESULT: " . $result;
    }

    static public function Method($puzzle):int
    {
        $aim = 0;
        $horizontal = 0;
        $depth = 0;
        $error=0;

        $ShipCoordinatesList = $puzzle;
        $arrlength = count($ShipCoordinatesList);

        for ($i = 0; $i < $arrlength; $i++) {
            if(!is_int($ShipCoordinatesList[$i])){
                switch($ShipCoordinatesList[$i]){
                    case "down":
                        $i++;
                        $aim += intval($ShipCoordinatesList[$i]);
                        break;
                    case "up":
                        $i++;
                        $aim -= intval($ShipCoordinatesList[$i]);
                        break;
                    case "forward":
                        $i++;
                        $horizontal += intval($ShipCoordinatesList[$i]);
                        $depth += intval($ShipCoordinatesList[$i]) * $aim;
                        break;
                    default:
                        $error++;
                        break;
                }
            }
        }

        $result = $depth * $horizontal;

        return $result;
    }
}







