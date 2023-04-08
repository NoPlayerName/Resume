<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Mail\Message;

class AuthController extends Controller
{
 
    public function index()
    {
        return view('auth.index', [
            'title' => 'Login Page'
        ]);
    }

    public function register()
    {
        return view('auth.register', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request)
    {
            $password = md5($request->password);
            User::create([
                'username' => $request->username,
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
            ]);

            return redirect('login');
    }
    
}
