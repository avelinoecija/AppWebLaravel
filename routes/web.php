<?php
use Illuminate\Support\Facades\Input;
//Route::group(['middleware' => 'auth'], function(){

	Route::get('/game/game', 'GameController@getQuestions');
    Route::get('/game/game', 'GameController@getAnswers');
	Route::get('/contacto', function (){
    	return view('contacto');
	});
	Route::group(['middleware' => 'admin'], function () {
    	Route::get('/admin', 'AdminController@index');
	});
	//Route::get('/', 'PagesController@index');
	Route::get('/', 'UserController@getUser');
	Route::get('/game/game/{id}', 'UserController@getUser');


// Route::get('/login', 'LoginController@showLoginForm');
// Route::post('/login', 'LoginController@login');
// Route::post('/logout', 'LoginController@logout');
// Route::get('/register', 'RegisterController@showRegistrationForm');
// Route::post('/register', 'RegisterController@register');
// Route::post('/password/email', 'ForgotPasswordController@sendResetLinkEmail');
// Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm');
// Route::post('/password/reset', 'ResetPasswordController@reset');
// Route::get('/password/reset/{token}', 'ResetPasswordController@showResetForm');




// Profesores //

	Route::get('/profesores', 'ProfesoresController@getIndex');
	Route::get('/profesores/showteacher/{idprofesor}', 'ProfesoresController@getShow');
	Route::get('/profesores/createteacher', 'ProfesoresController@getCreate');
	Route::get('/profesores/editteacher/{idprofesor}', 'ProfesoresController@getEdit');
	Route::post('/profesores/createteacher', 'ProfesoresController@postCreate');
	Route::put('/profesores/editteacher/{idprofesor}', 'ProfesoresController@putEdit');

// Usuarios en general //

	Route::get('/user', 'UserController@getIndex');
	Route::get('/user/show/{id}', 'UserController@getShow');
	Route::get('/user/create', 'UserController@getCreate');
	Route::get('/user/edit/{id}', 'UserController@getEdit');
		
	Route::post('/user/create', 'UserController@postCreate');
	Route::put('/user/edit/{id}', 'UserController@putEdit');

// Preguntas //

	Route::get('/preguntas', 'PreguntasController@getIndex');
	Route::get('/preguntas/showpregunta/{idpregunta}', 'PreguntasController@getShow');
	Route::get('/preguntas/createpreguntas', 'PreguntasController@getCreate');
	Route::get('/preguntas/editpreguntas/{idpregunta}', 'PreguntasController@getEdit');
	Route::post('/preguntas/createpreguntas', 'PreguntasController@postCreate');
	Route::put('/preguntas/editpreguntas/{idpregunta}', 'PreguntasController@putEdit');

// Respuestas //

	Route::get('/respuestas', 'RespuestasController@getIndex');
	Route::get('/respuestas/showrespuesta/{idrespuesta}', 'RespuestasController@getShow');
	Route::get('/respuestas/createrespuestas', 'RespuestasController@getCreate');
	Route::get('/respuestas/editrespuestas/{idrespuesta}', 'RespuestasController@getEdit');
	Route::post('/respuestas/createrespuestas', 'RespuestasController@postCreate');
	Route::put('/respuestas/editrespuestas/{idrespuesta}', 'RespuestasController@putEdit');

// JUEGO //


	Route::get('/game/game{id}', 'GameController@getWinner');
	Route::get('/game/game{id}', 'GameController@getQuestions');
	Route::get('/game/final', 'GameController@succeed');
	Route::put('/game/final2', 'GameController@addPoints');
	Route::put('/game/final2', 'GameController@addNivel');
	Route::get('/game/fail', 'GameController@fail');
	Route::get('/game/final2{id}', 'GameController@succeed2');

	Route::resource('cart', 'CartController');
	Route::post('proceedToCheckout/{id}', 'CartController@proceedToCheckout');
	Route::delete('emptyCart', 'CartController@emptyCart');
	Route::get('paypal', 'CartController@paypal');
	Route::get('game.final', 'GameController@addPoints');
//});


//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

