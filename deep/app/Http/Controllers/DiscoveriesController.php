<?php

namespace App\Http\Controllers;

use App\Models\Discoveries;
use Illuminate\Http\Request;


class DiscoveriesController extends Controller
{
    public function index()
    {
        $discoveries = Discoveries::all();
        return view('discoveries.index', ['discoveries' => $discoveries]);
    }

    public function create()
    {
        
        return view('discoveries.create');
    }

    public function store(Request $request)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'title' => 'required|string',
        
            'description' => 'required|string',
        
            'date' => 'required|date',
        
            'area_of_study' => 'string',
        
            'scientists_inventors' => 'string',
        
            'references' => 'string',
        
            'keywords' => 'string',
        
            'image_url' => 'string',
        
        ]);

        Discoveries::create($request->all());

        return redirect()->route('discoveries.index')->with('success', 'discoveries criado com sucesso.');
    }

    public function edit(Discoveries $discoveries)
    {
                
        return view('discoveries.edit', ['entity' => $discoveries]);
    }

    public function update(Request $request, Discoveries $discoveries)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'title' => 'required|string',
        
            'description' => 'required|string',
        
            'date' => 'required|date',
        
            'area_of_study' => 'string',
        
            'scientists_inventors' => 'string',
        
            'references' => 'string',
        
            'keywords' => 'string',
        
            'image_url' => 'string',
        
        ]);

        $discoveries->update($request->all());

        return redirect()->route('discoveries.index')->with('success', 'discoveries atualizado com sucesso.');
    }

    public function destroy(Discoveries $discoveries)
    {
        $discoveries->delete();

        return redirect()->route('discoveries.index')->with('success', 'discoveries excluído com sucesso.');
    }
}