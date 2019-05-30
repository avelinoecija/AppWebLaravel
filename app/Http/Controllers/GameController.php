<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Respuestas;
use App\Preguntas;
use App\User;
use Illuminate\Http\Request;

class GameController extends Controller
{

	public function getAnswers($id) {
		$answers['respuesta'] = DB::table('respuestas')->get('respuesta');
		return view('game.game')->with($answers);
	}

	public function getQuestions() {
		return view('game.game')->with('questions', Preguntas::all());
	}

	public function getWinner($id) {
		return view('game.game')->with('usuarios', User::findOrFail($id));
	}

	public function succeed() {
		return view('game.final')->with('puntos', User::all());
	}

		public function succeed2() {
		return view('game.final2')->with('puntos', User::all());
	}

	public function fail () {
		return view('game.fail');
	}

	public function addPoints($id) {
		$user = User::findOrFail($id);
		$user->puntuacion = 10;
		$user->save();
		return view('game.final2')->with('puntos', User::findOrFail($id));
	}

	public function addNivel($id) {
		$user = User::findOrFail($id);
		$user->nivel = 1;
		$user->save();
		return view('game.final2')->with('puntos', User::findOrFail($id));
	}
}
