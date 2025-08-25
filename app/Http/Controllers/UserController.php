<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('users.index');
    }
    public function create(){
        return view('users.create');
    }
    public function store(Request $request)
{
    User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password) // Hash da senha
    ]);

    return redirect()->route('user.create')->with('success', 'Usuário criado com sucesso!');
}
}

