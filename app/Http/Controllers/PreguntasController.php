<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Preguntas;
use Illuminate\Http\Request;

class PreguntasController extends Controller
{
	public function getIndex() {
		return view('preguntas.indexpreguntas')->with('preguntas', Preguntas::all());
	}

	public function getShow($idpregunta) {
		return view('preguntas.showpregunta')->with('preguntas', Preguntas::findOrFail($idpregunta));
	}
	public function getCreate() {
		return view('preguntas.createpregunta');
	}
	public function getEdit($idpregunta) {
		return view('preguntas.editpregunta')->with('preguntas', Preguntas::findOrFail($idpregunta));
	}
	public function postCreate(Request $request) {
		$pregunta = new Preguntas;
		$pregunta->pregunta = $request->input('pregunta');
		$pregunta->idrespuesta = $request->input('idrespuesta');
		$pregunta->save();
		
		return redirect()->action('PreguntasController@getIndex');
	}
	public function putEdit(Request $request, $idpregunta) {
		$pregunta = Preguntas::findOrFail($idpregunta);
		$pregunta->pregunta = $request->input('pregunta');
		$pregunta->idrespuesta = $request->input('idrespuesta');
		$pregunta->save();
		
		return view('preguntas.showpregunta')->with('preguntas', Preguntas::findOrFail($idpregunta));
	}
}
?>