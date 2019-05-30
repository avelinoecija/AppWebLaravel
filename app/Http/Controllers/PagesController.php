<?php

namespace App\Http\Controllers;
use App\Preguntas;


use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index () { 

    	return view('welcome'); 

    }

    public function contact () { 

    	return view('contacto'); 

    }

    public function getQuestions() {
		return view('game.game')->with('questions', Preguntas::all());
	}
}
