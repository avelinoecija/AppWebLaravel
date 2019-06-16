<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Preguntas;
use App\User;
use App\Asignaturas;
use App\Tests;
use Illuminate\Http\Request;

class GameController extends Controller
{


	public function getQuestions() {
		return view('game.game')->with('questions', Preguntas::all());
	}

	public function getMaterias() {
		return view('game.select')->with('materias', Asignaturas::all());
	}

	public function getTests() {
		return view('game.test')->with('cuestionarios', Tests::all());
	}	

	public function succeed($idrespuesta) {
		return view('game.final', array('puntos'=>User::findOrFail($idrespuesta)))->with('nombre', $idrespuesta);
	}

	public function succeed2() {
		return view('game.final2')->with('puntos', User::all());
	}

	public function fail () {
		return view('game.fail');
	}

	public function putEdit (Request $request, $idrespuesta){
			 $user = User::findOrFail($idrespuesta);
	    	 $user->puntuacion = $request->input('puntuacion');
	    	 $user->nivel = $request->input('nivel');
	    	 $user->save();
	    	 return redirect('/game/final2/' . $idrespuesta);
     }
}
?>
