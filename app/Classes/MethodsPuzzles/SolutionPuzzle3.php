<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\PuzzleInput;

class SolutionPuzzle3
{
    static public function Solution(string $puzzle):string
    {
        PuzzleInput::get($puzzle);
        $puzzleString = str_replace(array("\n", "\r"), ' ', PuzzleInput::get($puzzle));
        $binaryData = explode(" ",$puzzleString);
        $powerWasted = self::PowerConsumption($binaryData);
        return "The PowerConsumption is: " . $powerWasted ;
    }

    static private function PowerConsumption($binaryConsumptionData){
        $zeroBit = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $oneBit = array(0,0,0,0,0,0,0,0,0,0,0,0);
        $binary = array();

        for ($i = 0; $i < count($binaryConsumptionData); $i++)
		{
            $singleBit = str_split($binaryConsumptionData[$i]);
            for ($j = 0; $j < count($singleBit); $j++)
            {
                switch($singleBit[$j]){
                    case "0":
                        $zeroBit[$j]++;
                        break;
                    case "1":
                        $oneBit[$j]++;
                        break;
                }
            }
        }

        for ($i = 0; $i < count($zeroBit); $i++)
		{
            if($zeroBit[$i] < $oneBit[$i])
            {
                $binary[$i] = 1;
            }else{
                $binary[$i] = 0;
            }
        }

        $powerConsumption = bindec(implode($binary));

        return $powerConsumption;
    }
}
