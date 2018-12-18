<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //index page
    public function index() {	return view('users');	}
    //game page
    public function game() {	return view('game');	}
    //welcome
    public function welcome() { return view('welcome');	}
}
