<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\PuzzleInput;

class SolutionPuzzle1
{
    static public function Solution(string $puzzle):string
    {
        $PuzzleData = array_map('intval', str_split(PuzzleInput::get($puzzle)));
        $depth = self::calculateDepth($PuzzleData);

        return "Depth increased: " . $depth;
    }

    static private function calculateDepth($ReportSonarSweep):int{
        $depthIncreased = 0;
        $lastMeasurement = 3;

        $arrlength = count($ReportSonarSweep);
        for ($i = 0; $i+$lastMeasurement < $arrlength; $i++)
		{
            $measurement = $ReportSonarSweep[$i];
            $measurement1 = $ReportSonarSweep[$i+1];
            $measurement2 = $ReportSonarSweep[$i+2];
            $measurement3 = $ReportSonarSweep[$i+3];

			$currentReportValue = $measurement + $measurement1 + $measurement2;
			$nextReportValue = $measurement1 + $measurement2 + $measurement3;

			if($currentReportValue < $nextReportValue){
				$depthIncreased++;
			}
		}
        return $depthIncreased;
    }
}
