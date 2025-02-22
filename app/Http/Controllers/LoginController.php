<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use App\Models\User;

class LoginController extends Controller
{
    // Exibe a tela de login
    public function login()
    {
        return view('dashboard.login.login');
    }


    // Processa o login
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }

    // Exibe a tela de registro
    public function register()
    {
        return view('dashboard.login.register');
    }

    // Registra um novo usuário
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }

    // Faz logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

    // Exibe a tela de recuperação de senha
    public function showForgotPasswordForm()
    {
        return view('dashboard.login.forgot');
    }

    // Envia o e-mail de redefinição de senha
    public function sendResetLink(Request $request)
    {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink($request->only('email'));

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    }
}
