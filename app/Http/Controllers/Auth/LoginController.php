<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use App\User;
use DB;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */
    use AuthenticatesUsers;
    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function setPasswordAttribute($password) {
        $this->attributes['password'] = \Hash::make($password);
    }


    public function login(Request $req) {
    $user = User::all();
    $user->email = $req->input('email');
    $user->password = $req->input('password');    
        if ($checkEmail = DB::table('users')->select('email')->where('email', $user->email)->first()) {
        } else {
            echo "Correo incorrecto";
            return view('auth.login');
        }

        if ($checkPass = DB::table('users')->select('password')->where('password', $user->password)->first()) {         
        } else {
            echo "Contraseña incorrecta";
            return view('auth.login');
        }
    return view('welcome')->with('usuarios', User::all());
    }
}
