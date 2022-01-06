<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\OccurenceBit;
use App\Classes\PuzzleInput;

class SolutionPuzzle3
{
    static OccurenceBit $occurencesOneBit;

    static public function Solution(string $puzzle) : string {
        $binaryData = explode("\n", PuzzleInput::get($puzzle));
        $powerWasted = self::PowerConsumption($binaryData);
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
