<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Profesores;

class ProfesoresController extends Controller
{
    public function getIndex() {
		return view('profesores.indexteacher')->with('profesores', Profesores::all());
	}
	public function getShow($idprofesor) {
		return view('profesores.showteacher')->with('profesores', Profesores::findOrFail($idprofesor));
	}
	public function getCreate() {
		return view('profesores.createteacher');
	}
	public function getEdit($idprofesor) {
		return view('profesores.editteacher')->with('profesores', Profesores::findOrFail($idprofesor));
	}
	public function postCreate(Request $request) {
		$profesor = new Profesores;
		$profesor->nombre = $request->input('nombre');
		$profesor->apellido = $request->input('apellido');
		$profesor->departamento = $request->input('departamento');
		$profesor->id = $request->input('id');
		$profesor->idasignatura = $request->input('idasignatura');
		$profesor->save();
		
		return redirect()->action('ProfesoresController@getIndex');
	}
	public function putEdit(Request $request, $idprofesor) {
		$profesor = Profesores::findOrFail($idprofesor);
		$profesor->nombre = $request->input('nombre');
		$profesor->apellido = $request->input('apellido');
		$profesor->departamento = $request->input('departamento');
		$profesor->id = $request->input('id');
		$profesor->idasignatura = $request->input('idasignatura');
		$profesor->save();
		return view('profesores.editteacher')->with('profesores', Profesores::findOrFail($idprofesor));
	}
}
?>
