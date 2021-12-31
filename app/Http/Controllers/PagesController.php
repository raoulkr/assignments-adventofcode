<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\PuzzleInput;

class PagesController extends Controller
{
    public function index(){ return view('pages.index')->with(['puzzleInput' => PuzzleInput::get("puzzle1")]);}
    public function day1(){ return view('pages.day1')->with(['puzzleInput' => PuzzleInput::get("puzzle1")]);}
    public function day2(){ return view('pages.day2');}
    public function day4(){ return view('pages.day4');}
}
