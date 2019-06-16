<?php
namespace App\Http\Controllers;
use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
	public function getIndex() {
		return view('user.indexuser')->with('usuarios', User::all());
	}
	public function getWinner($id) {
		return view('game.game')->with('usuarios2', User::findOrFail($id));
	}
	public function getUser() {
		return view('welcome')->with('usuarios', User::all());
	}
	public function getShow($id) {
		return view('user.showuser')->with('usuario', User::findOrFail($id));
	}
	public function getCreate() {
		return view('user.createuser');
	}
	public function getEdit($id) {
		return view('user.edituser')->with('usuario', User::findOrFail($id));
	}
	public function postCreate(Request $request) {
		$user = new User;
		$user->nombre = $request->input('nombre');
		$user->apellido = $request->input('apellido');
		$user->curso = $request->input('curso');
		$user->idpregunta =$request->input('idpregunta');
		$user->idrespuesta = $request->input('idrespuesta');
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->save();
		
		return redirect()->action('UserController@getIndex');
	}
	public function putEdit(Request $request, $id) {
		$user = User::findOrFail($id);
		$user->nombre = $request->input('nombre');
		$user->apellido = $request->input('apellido');
		$user->curso = $request->input('curso');
		$user->idpregunta = $request->input('idpregunta');
		$user->idrespuesta = $request->input('idrespuesta');
		$user->email = $request->input('email');
		$user->password = $request->input('password');
		$user->save();
		return view('user.edituser')->with('usuario', User::findOrFail($id));
	}
}
?>
