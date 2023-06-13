<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;



class RegisterController extends Controller
{
    public function create()
    {

        return view('reg');
    }

    public function store(Request $request)
    {
        $request->validate([
            'fam' => 'string',
            'name' => 'string',
            'otch' => 'string',
            'pasport' => 'string',
            'email' => 'string|email|unique:users',
            'password' => 'min:8',
            'textarea' => 'string',

        ]);
        //dd($request);

        $user = User::create([
            'fam' => $request['fam'],
            'name' => $request['name'],
            'otch' => $request['otch'],
            'pasport' => $request['pasport'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'textarea' => $request['textarea'],
        ]);

        Auth::login($user);

        return redirect('/about');
    }
}
