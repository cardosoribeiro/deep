<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use Illuminate\Http\Request;

use App\Models\User;

class CommentsController extends Controller
{
    public function index()
    {
        $comments = Comments::all();
        return view('comments.index', ['comments' => $comments]);
    }

    public function create()
    {        
        $user = User::all();
        return view('comments.create', ['user' => $user]);
    }

    public function store(Request $request)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'user_id' => 'integer',
        
            'commentable' => 'string',
        
            'text' => 'string',
        
        ]);

        Comments::create($request->all());

        return redirect()->route('comments.index')->with('success', 'comments criado com sucesso.');
    }

    public function edit(Comments $comments)
    {        
        $user = User::all();        
        return view('comments.edit', ['entity' => $comments, 'user' => $user]);
    }

    public function update(Request $request, Comments $comments)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'user_id' => 'integer',
        
            'commentable' => 'string',
        
            'text' => 'string',
        
        ]);

        $comments->update($request->all());

        return redirect()->route('comments.index')->with('success', 'comments atualizado com sucesso.');
    }

    public function destroy(Comments $comments)
    {
        $comments->delete();

        return redirect()->route('comments.index')->with('success', 'comments exclu�do com sucesso.');
    }
}