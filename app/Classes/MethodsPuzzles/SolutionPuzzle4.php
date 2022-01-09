<?php

namespace App\Classes\MethodsPuzzles;

use App\Classes\PuzzleInput;
use App\Classes\Bingo;

class SolutionPuzzle4
{
    static public function Solution(string $puzzle):string
    {
        $bingoMarks = Bingo::getBingoMarksInput(PuzzleInput::get($puzzle)[0]);
        $bingoMaps = Bingo::getBingoMapInput(PuzzleInput::get($puzzle));

        return "Winning BingoMap: " . self::BingoWinningBoard($bingoMaps, $bingoMarks);
    }

    static private function BingoWinningBoard(array $bingoMaps, array $bingoMarks):string
    {
        $bingoMarkNumber = 0;
        $boardSize = 25;
        $maxBoards = count($bingoMaps)/$boardSize;

        foreach($bingoMarks as $j => $mark){
            foreach($bingoMaps as $i => $bingoNum){
                if($mark == $bingoNum){
                    $bingoMaps[$i] = "bingo";
                }

                $unMarkedBingoNumber = Bingo::checkBingo($maxBoards, $boardSize, $bingoMaps);
                if($unMarkedBingoNumber > 0){
                    return $bingoMarks[$j] * $unMarkedBingoNumber;
                }
            }
        }

        return "no Winner has been found";
    }
}
