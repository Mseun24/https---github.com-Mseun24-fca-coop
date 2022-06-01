<?php

namespace App\Http\Controllers;
use App\Models\User;
use Hash;
use Session;
use illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {

        return view('users.register');
    }

    public function userReg() {

        return view('users.register');
    }
    
    public function customRegistration(Request $request) {
        
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'user_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'password' => 'required|min:8',
            'password1' => 'required|min:8'
        ]);

        $data = $request->all();
        $check = $this->create($data);
        return redirect("login")->with('message', 'You have signed In');
        
    }

    public function create(array $data) {

        return User::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'user_name' => $data['user_name'],
            'phone_number' => $data['phone_number'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'password1' => Hash::make($data['password1'])
        ]);
    }

    public function userLog() {

        return view('users.login');
    }

    public function customLogin(Request $request) {

        $request->validate([
            'user_name' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('user_name', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->with('message', 'Logged In Successful !');
        }
        // return redirect('login')->withErrors($credentials)->withInput();
        return redirect('login')->with('message', 'Invalid Credentials');
       
    }

    public function signOut() {

        Session::flush();
        Auth::logout();
        return redirect('login');
    }

    public function pass() {

        return view('users.forgot-pass');
    }

    public function getPass(Request $request) {
            //
        }
    
    }
