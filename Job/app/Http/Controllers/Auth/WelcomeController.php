<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use PharIo\Manifest\Author;

class WelcomeController extends Controller
{
    public function create()
    {
        return view('welcome');
    }
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'string',
            'password' => 'string',
            'textarea' => 'string'
        ]);

        $Fields = request()->only(['email', 'password']);

        if (isset(User::where('email', $Fields['email'])->get()[0])) {
            if (Auth::attempt($Fields)) {
                return redirect(route('about'));
            }
        } else {
            return redirect(route('welcome'))->withErrors([
                'Пользователь с такой почтой не зарегистрирован'
            ]);
        }
    }


    public function destroy()
    {
        Auth::logout();

        return redirect(route('welcome'));
    }
}
