<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Donor;
use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminMangement extends Controller
{
    //----------------Return Admin View ------------------/
    public function admin()

    {

        return view('admin');
    }
    //----------------Return Registration Form View ------------------/
    public function register()
    {
        return view('register');
    }
    //----------------Logout ------------------/

    public function logout(Request $request)
    {

        $request->session()->flush();
        Auth::logout();
        return redirect('/admin');
    }
    //----------------Add Admin to Database ------------------/
    public function storeUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required'
        ]);

        $user = User::create([
            'name' => trim($request->input('name')),
            'email' => strtolower($request->input('email')),
            'password' => bcrypt($request->input('password')),
        ]);

        session()->flash('message', 'Your account is created');

        return redirect()->route('admin');
    }
    //----------------Authenticate User ------------------/

    public function authenticate(Request $request)
    {




        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect()->intended('adminPannel');
        }
        else
        {
            return redirect()->route('admin') ->with('failed', 'Wrong Username or Password');

        }

    }
    public function dashboard() {

        // check if user logged in
        if(Auth::check()) {
            $donors = Donor::all() ->count();
            $posts = Post::all() ->count();
            return view('adminPannel', compact('donors','posts'));
        }

        return redirect()->route('admin') ->with('failed', 'You Must Log In');
    }

}
