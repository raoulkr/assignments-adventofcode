<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\Instruction;
use App\Classes\PuzzleInput;

class SolutionPuzzle2
{
    static public function Solution(string $puzzle):string
    {
        // deze?
        $puzzleValues = preg_replace('/[^0-9.]+/', ' ', PuzzleInput::get($puzzle));
        $puzzleWords = preg_replace('/[0-9]+/', '', PuzzleInput::get($puzzle));
        $puzzleArrWords = explode(" " , $puzzleWords);
        $puzzleArrValues = explode(" " , $puzzleValues);
        $puzzleValues = array_shift($puzzleArrValues);

        // of deze mooiere?
        $instructionsStrings = explode("\n", PuzzleInput::get($puzzle));
        $instructions = array_map(fn($instruction) => new Instruction($instruction), $instructionsStrings);

        // welke was mooier? :)

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

    static private function DiveTwo($instructions): int
    {
        $aim = 0;
        $horizontal = 0;
        $depth = 0;

        foreach($instructions as $instruction) {
            
        }

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







