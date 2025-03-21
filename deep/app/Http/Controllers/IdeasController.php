<?php

namespace App\Http\Controllers;

use App\Models\Ideas;
use Illuminate\Http\Request;

use App\Models\User;

class IdeasController extends Controller
{
    public function index()
    {
        $ideas = Ideas::all();
        return view('ideas.index', ['ideas' => $ideas]);
    }

    public function create()
    {        
        $user = User::all();
        return view('ideas.create', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'title' => 'required|string',
        
            'description' => 'required|string',
        
            'user_id' => 'integer',
        
        ]);

        Ideas::create($request->all());

        return redirect()->route('ideas.index')->with('success', 'ideas criado com sucesso.');
    }

    public function edit(Ideas $ideas)
    {
        
        $user = User::all();        
        return view('ideas.edit', ['entity' => $ideas, 'user' => $user]);
    }

    public function update(Request $request, Ideas $ideas)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'title' => 'required|string',
        
            'description' => 'required|string',
        
            'user_id' => 'integer',
        
        ]);

        $ideas->update($request->all());

        return redirect()->route('ideas.index')->with('success', 'ideas atualizado com sucesso.');
    }

    public function destroy(Ideas $ideas)
    {
        $ideas->delete();

        return redirect()->route('ideas.index')->with('success', 'ideas exclu�do com sucesso.');
    }
}