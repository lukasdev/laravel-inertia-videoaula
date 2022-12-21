<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(Request $request) {

        return Inertia::render('Auth/Login');
    }

    public function store(LoginRequest $request) {
        if (! Auth::attempt($request->validated())) {
            return back()->withErrors([
                'message' => 'Não foi possivel efetuar o login'
            ]);
        }

        return redirect()->route('dashboard');
    }
}
