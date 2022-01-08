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
        $boardSize = 25;
        $maxBoards = count($bingoMaps)/$boardSize;

        foreach($bingoMaps as $i => $bingoNum){
            foreach($bingoMarks as $mark){
                if($mark == $bingoNum){
                    $bingoMaps[$i] = "bingo";
                }

                $winningBingoBoard = Bingo::checkBingo($maxBoards, $boardSize, $bingoMaps);
                if($winningBingoBoard > 0){
                    return $winningBingoBoard;
                }
            }
        }

        return "no Winner has been found";
    }
}
