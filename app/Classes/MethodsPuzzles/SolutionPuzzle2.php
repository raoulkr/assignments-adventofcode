<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\PuzzleInput;

class SolutionPuzzle2
{
    static public function Solution(string $puzzle):string
    {
        $puzzleValues = preg_replace('/[^0-9.]+/', ' ', PuzzleInput::get($puzzle));
        $puzzleWords = preg_replace('/[0-9]+/', '', PuzzleInput::get($puzzle));
        $puzzleArrWords = explode(" " , $puzzleWords);
        $puzzleArrValues = explode(" " , $puzzleValues);
        $puzzleValues = array_shift($puzzleArrValues);
        $plannedCourseValue = self::Dive($puzzleArrWords, $puzzleArrValues);

        return "Planned Course: " . $plannedCourseValue;
    }

    static private function Dive($shipDirections, $shipCardinalValues): int
    {
        $aim = 0;
        $horizontal = 0;
        $depth = 0;

        for ($i = 0; $i < count($shipDirections); $i++) {
            switch(trim($shipDirections[$i])){
                case "down":
                    $aim += $shipCardinalValues[$i];
                    break;
                case "up":
                    $aim -= $shipCardinalValues[$i];
                    break;
                case "forward":
                    $horizontal += $shipCardinalValues[$i];
                    $depth += $shipCardinalValues[$i] * $aim;
                    break;

            }
        }

        $plannedCourse = $depth * $horizontal;

        return $plannedCourse;
    }
}







