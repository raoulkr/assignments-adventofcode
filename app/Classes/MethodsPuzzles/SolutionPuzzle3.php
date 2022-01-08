<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\OccurenceBit;
use App\Classes\PuzzleInput;

class SolutionPuzzle3
{
    static OccurenceBit $occurencesOneBit;

    static public function Solution(string $puzzle) : string {
        $powerWasted = self::PowerConsumption(PuzzleInput::get($puzzle));
        return "The PowerConsumption is: " . $powerWasted ;
    }

    static private function PowerConsumption($binaryConsumptionData) {
        self::$occurencesOneBit = new OccurenceBit();

        foreach($binaryConsumptionData as $binary) {
            self::$occurencesOneBit->countOnes($binary);
        }

        return self::$occurencesOneBit->getPower();
    }
}
