<?php
namespace App\Http\Controllers;

use App\Data\Auth\LoginData;
use App\Data\Auth\RegisterData;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Message;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {

        if (Auth::check()) {
            return redirect()->route('admin.index');
        }
        return view('auth.index', [
            'title' => 'Login Page'
        ]);
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register',
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--!Font Awesome Free 6.7.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2025 Fonticons, Inc.--><path d="M352 96l64 0c17.7 0 32 14.3 32 32l0 256c0 17.7-14.3 32-32 32l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32l64 0c53 0 96-43 96-96l0-256c0-53-43-96-96-96l-64 0c-17.7 0-32 14.3-32 32s14.3 32 32 32zm-9.4 182.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L242.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l210.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>'
        ]);
    }

    public function store(RegisterData $register)
    {

            User::create([
                'name' => $register->fullname,
                'email' => $register->email,
                'password' => Hash::make($register->password),
            ]);

            return $this->responseCreated('Registration successful, please login');

    }

    public function login(LoginData $login, Request $request)
    {
        // dd($login);
        $user = User::where('username', $login->username)->first();

        if (!$user || !Hash::check($login->password, $user->password)) {
            return $this->responseUnAuthorized('Invalid credentials');
        }

        Auth::login($user);
        $request->session()->regenerate();

        return $this->responseSuccess('Login berhasil', [
            'user' => $user,
            'redirect_url' => route('admin.index'),
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        // Hapus session
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return $this->responseSuccess('Logout berhasil', [
            'redirect_url' => url('/'),
        ]);
    }

}
