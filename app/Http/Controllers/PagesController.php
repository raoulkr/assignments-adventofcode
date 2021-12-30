<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){ 
        $puzzleInputText = "test";
        $puzzleInputPlainText = strip_tags($puzzleInputText);
        return view('pages.index')->with('puzzleInput', $puzzleInputPlainText);
    } 
    public function day1(){ return view('pages.day1');}
    public function day2(){ return view('pages.day2');}
    public function day4(){ return view('pages.day4');}
}    