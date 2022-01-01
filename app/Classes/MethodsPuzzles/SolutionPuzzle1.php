<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\PuzzleInput;

class SolutionPuzzle1
{
    static public function Solution(string $puzzle):string
    {
        $puzzleString = str_replace(array("\n", "\r"), ' ', PuzzleInput::get($puzzle));
        $puzzleData = explode(" ",$puzzleString);
        $depth = self::calculateDepth($puzzleData);

        return "Depth increased: " . $depth;
    }

    static private function calculateDepth($reportSonarSweep):int{
        $depthIncreased = 0;
        $lastMeasurement = 3;

        for ($i = 0; $i + $lastMeasurement < count($reportSonarSweep); $i++)
		{
            $measurement1 = intval($reportSonarSweep[$i]);
            $measurement2 = intval($reportSonarSweep[$i+1]);
            $measurement3 = intval($reportSonarSweep[$i+2]);
            $measurement4 = intval($reportSonarSweep[$i+3]);

            $currentReportValue = $measurement1 + $measurement2 + $measurement3;
			$nextReportValue = $measurement2 + $measurement3 + $measurement4;

			if($currentReportValue < $nextReportValue){
				$depthIncreased++;
			}
        }

        return intval($depthIncreased);
    }
}
