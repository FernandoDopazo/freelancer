<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    public function __invoke(Request $request)
    {
        //$user = User::find(1);
        /*$user = User::query()->create([
            'name' => 'Fernando',
            'email' => 'nando@email.com',
            'password' => 'vasco'
        ]);/*

        //para atualizar
        /*$user->email_verified_at = now();
        $user->save();*/

        //dd($user->email_verified_at->diffForHumans());

        //Auth::login($user);

        return view('welcome');
    }
}
