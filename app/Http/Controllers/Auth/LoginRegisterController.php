<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Validator;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Session;
 

class LoginRegisterController extends Controller
{
    /**Instantiate a new LoginREgisterController instance */
    public function __construct() 
    {
        $this->middleware('guest')->except( [
            'logout', 'dashboard'
        ]);
    }

    /** Display a registration form */  
    public function register()
    {
        return view('auth.register');
    }

    /** Store a new user */
    public function store(Request $request) 
    {
        $request->validate( [
            'name' => 'required|string|max:250',
            'email' => 'required|email:rfc,dns|max:250|unique:users',
            'password' => 'required|min:6',
            'password_confirmation' =>'required_with:password|same:password|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email','password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('You have sucessfully registed and logged in!');
    }

    /**Display a dashboard. */
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('auth.dashboard');
        }

        return redirect()->route('login')
        ->withError([
            'email' => 'You have to login to access the dashboard.',
        ])->onlyInput('email');
    }


    /**Log out the user. */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')
        ->withSuccess('You have logged out sucessfully.');
    }


    /*
    public function postLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
   
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->withSuccess('You have Successfully loggedin');
        }
  
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');
    }

    public function postRegistration(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
           
        $data = $request->all();
        $check = $this->create($data);
         
        return redirect("dashboard")->withSuccess('Great! You have Successfully loggedin');
    }
*/

    /**Display a login form.*/
    public function login()
    {
        return view('auth.login');
    }

    /**Authenticate the user. */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
            /*->withSuccess('You have successfully logged in!');*/
        }

        return back()->withErrors([
            'email' => 'Your information do not match.',
        ])->onlyInput(('email'));
    }

    
/*
    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }
  
        return redirect("login")->withSuccess('Opps! You do not have access');
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function logout() {
        Session::flush();
        Auth::logout();
  
        return Redirect('login');
    }*/
}
