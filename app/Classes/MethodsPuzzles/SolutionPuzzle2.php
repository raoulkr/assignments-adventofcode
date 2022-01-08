<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\Instruction;
use App\Classes\PuzzleInput;

class SolutionPuzzle2
{
    static public function Solution(string $puzzle):string
    {
        $puzzleInput = PuzzleInput::get($puzzle);
        $shipCardinalValues = Instruction::getIntArr($puzzleInput);
        $shipDirections = Instruction::getStrArr($puzzleInput);

        return "Planned Course: " . self::Dive($shipDirections, $shipCardinalValues);
    }

    static private function Dive($shipDirections, $shipDistance): int
    {
        $aim = 0;
        $horizontal = 0;
        $depth = 0;
        $i = 0;

        foreach($shipDirections as $direction){
            switch($direction){
                case "down":
                    $aim += $shipDistance[$i];
                    break;
                case "up":
                    $aim -= $shipDistance[$i];
                    break;
                case "forward":
                    $horizontal += $shipDistance[$i];
                    $depth += $shipDistance[$i] * $aim;
                    break;

            }
            $i++;
        }

        $plannedCourse = $depth * $horizontal;

        return $plannedCourse;
    }
}







