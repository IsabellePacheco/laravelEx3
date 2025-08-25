<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function create(){ return view('users.create'); }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:6'
        ]);
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('login.form')->with('success','Usuário cadastrado com sucesso!');
    }

    public function edit($id){
        $user = User::findOrFail($id);
        return view('users.edit.id',compact('user'));
    }

    public function update(Request $request,$id){
        $user = User::findOrFail($id);
        $request->validate([
            'name'=>'required|string|min:3',
            'email'=>'required|email|unique:users,email,'.$user->id,
            'password'=>'nullable|min:6'
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        if($request->filled('password')) $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('dashboard')->with('success','Perfil atualizado com sucesso!');
    }
}
