<?php

namespace App\Http\Controllers;

use App\Classes\MethodsPuzzles\SolutionPuzzle1;
use App\Classes\MethodsPuzzles\SolutionPuzzle2;
use App\Classes\MethodsPuzzles\SolutionPuzzle4;

class PagesController extends Controller
{
    public function index(){ return view('pages.index');}
    public function day1(){ return view('pages.day')->with(['puzzleSolution' => SolutionPuzzle1::Solution("puzzle1")]);}
    public function day2(){ return view('pages.day')->with(['puzzleSolution' => SolutionPuzzle2::Solution("puzzle2")]);}
    public function day4(){ return view('pages.day')->with(['puzzleSolution' => SolutionPuzzle4::Solution("puzzle4")]);}
}

