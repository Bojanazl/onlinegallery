<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

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
            'email' => 'required|email|max:250|unique:users',
            'pasword' => Hash::make($request->password)
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'pasword' => Hash::make($request->password)
        ]);

        $credentials = $request->only('email','password');
        Auth::attempt($credentials);
        $request->session()->regenerate();
        return redirect()->route('dashboard')
        ->withSuccess('You have sucessfully registed and logged in!');
    }

    /**Displey a login form */
    public function login()
    {
        return view('auth.login');
    }

    /**Authenticate the user. */
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|mail',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect()->route('dashboard')
            ->withSuccess('You have successfully logged in!');
        }

        return back()->withErrors([
            'email' => 'Your information do not match.',
        ])->onlyInput(('email'));
    }

    /**Display a dashboard. */
    public function dashboard()
    {
        if(Auth::check())
        {
            return view('auth.dahsboard');
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
}
