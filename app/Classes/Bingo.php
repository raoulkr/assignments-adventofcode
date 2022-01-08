<?php

namespace App\Classes;

class Bingo
{
    static public function getBingoMapInput(array $puzzleInput):array
    {
        array_shift($puzzleInput);
        $bingoInput = explode(" ", implode(" ", $puzzleInput));
        $bingoInput = self::removeArrEmpty($bingoInput);

        return $bingoInput;
    }

    static public function getBingoMarksInput(string $puzzleInput):array
    {
        return explode(",", $puzzleInput);
    }

    static public function checkBingo(int $maxBoards, int $boardSize, array $bingoMaps){
        for ($board = 1; $board < $maxBoards; $board++) {
            $bingoBoard = self::getBoards($board, $boardSize, $bingoMaps);

            $yBingo = 0;
            $xBingo = 0;

            for($i = 0; $i < 5; $i++){
                if($bingoBoard[$i] == "bingo"){
                    $xBingo++;
                }
                if($bingoBoard[$i+($i*5)] == "bingo"){
                    $yBingo++;
                }
                if($yBingo == 5||$xBingo == 5){
                    return $board;
                }
            }
        }
        return 0;
    }

    static private function getBoards(int $boardNum, int $boardSize, array $bingoMaps):array{
        $bingoBoard = array();
        $maxBoardIndex = $boardSize * $boardNum;
        $minBoardIndex = $maxBoardIndex - $boardSize;

        for ($i = $minBoardIndex; $i < $maxBoardIndex; $i++) {
            array_push($bingoBoard, $bingoMaps[$i]);
        }

        return $bingoBoard;
    }

    static private function removeArrEmpty(array $arr):array{
        $newArr = array();
        foreach($arr as $key){
            if($key != ""){
                array_push($newArr, $key);
            }
        }
        return $newArr;
    }
}

