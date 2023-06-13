<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Auth;

class AboutController extends Controller
{
    public function AllData()
    {
        $user = auth()->user();
        return view('about', $user);
    }

    public function update(Request $request)
    {
        $ValidateFields = request()->validate([
            'fam' => 'string',
            'name' => 'string',
            'otch' => 'string',
            'pasport' => 'string',
            'email' => 'string',
            'textarea' => 'string',
        ]);

        $request->validate([
            'fam' => 'string',
            'name' => 'string',
            'otch' => 'string',
            'pasport' => 'string',
            'email' => 'string',
            'textarea' => 'string',
        ]);

        // dd($request);
        $user = auth()->user();
        $user->update($ValidateFields);
        // dd($ValidateFields);
        return redirect('/about');
    }
}
