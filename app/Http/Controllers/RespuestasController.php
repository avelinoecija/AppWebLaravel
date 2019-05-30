<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Respuestas;
use Illuminate\Http\Request;


class RespuestasController extends Controller
{

	public function getIndex() {
		return view('respuestas.indexrespuestas')->with('respuestas', Respuestas::all());
	}

	public function getAnswers() {
		return view('game')->with('respuestas', Respuestas::all());
	}
	public function getShow($idrespuesta) {
		return view('respuestas.showrespuesta')->with('respuestas', Respuestas::findOrFail($idrespuesta));
	}
	public function getCreate() {
		return view('respuestas.createrespuestas');
	}
	public function getEdit($idrespuesta) {
		return view('respuestas.editrespuestas')->with('respuestas', Respuestas::findOrFail($idrespuesta));
	}
	public function postCreate(Request $request) {
		$respuesta = new Respuestas;
		$respuesta->respuesta = $request->input('respuesta');
		$pregunta->save();
		
		return redirect()->action('RespuestasController@getIndex');
	}
	public function putEdit(Request $request, $idrespuesta) {
		$respuesta = Respuestas::findOrFail($idrespuesta);
		$respuesta->respuesta = $request->input('respuesta');
		$respuesta->save();
		
		return view('respuestas.showrespuesta')->with('respuestas', Respuestas::findOrFail($idrespuesta));
	}
}
?>
