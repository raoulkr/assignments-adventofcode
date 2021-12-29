<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){ return view('pages.index');}
    public function day1(){ return view('pages.day1');}
    public function day2(){ return view('pages.day2');}
    public function day4(){ return view('pages.day4');}
}
