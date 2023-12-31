<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function register(Request $request) {
        $data = $request->validate([
            'name' => ['required', 'max:255', Rule::unique('users','name')],
            'email' => ['required', 'max:255', Rule::unique('users','email')],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        auth()->login($user);

        return redirect('/');
    }

    public function logout() {
        auth()->logout();
        return redirect('/');
    }

    public function login(Request $request) {
        $data = $request->validate([
            'email' => 'required',
            'password'=>'required'
        ]);

        if(auth()->attempt(['email'=>$data['email'], 'password'=>$data['password']])){
            $request->session()->regenerate();
        }

        return redirect('/');
    }

    public function adminDashboard(){
        return view('admin/adminDashboard');
    }

    public function dashboard(){
        return view('dashboard');
    }

    public function wysiwyg(){
        return view('wysiwyg');
    }

}
