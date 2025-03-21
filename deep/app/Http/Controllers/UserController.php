<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user.index', ['user' => $user]);
    }

    public function create()
    {        
        return view('user.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'name' => 'required|string',
        
            'email' => 'required|email|string',
        
            'password' => 'required|string',
        
        ]);

        User::create($request->all());

        return redirect()->route('user.index')->with('success', 'user criado com sucesso.');
    }

    public function edit(User $user)
    {                
        return view('user.edit', ['entity' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'name' => 'required|string',
        
            'email' => 'required|email|string',
        
            'password' => 'required|string',
        
        ]);

        $user->update($request->all());

        return redirect()->route('user.index')->with('success', 'user atualizado com sucesso.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('user.index')->with('success', 'user exclu�do com sucesso.');
    }
}