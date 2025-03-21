<?php

namespace App\Http\Controllers;

use App\Models\IdeaDiscovery;
use Illuminate\Http\Request;

use App\Models\Ideas;
use App\Models\Discoveries;

class IdeaDiscoveryController extends Controller
{
    public function index()
    {
        $idea_discovery = IdeaDiscovery::all();
        return view('idea_discovery.index', ['idea_discovery' => $idea_discovery]);
    }

    public function create()
    {
        
        $ideas = Ideas::all();
        $discoveries = Discoveries::all();
        return view('idea_discovery.create', ['ideas' => $ideas, 'discoveries' => $discoveries]);
    }

    public function store(Request $request)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'idea_id' => 'integer',
        
            'discovery_id' => 'integer',
        
        ]);

        IdeaDiscovery::create($request->all());

        return redirect()->route('idea_discovery.index')->with('success', 'idea_discovery criado com sucesso.');
    }

    public function edit(IdeaDiscovery $idea_discovery)
    {
        
        $ideas = Ideas::all();
        $discoveries = Discoveries::all();        
        return view('idea_discovery.edit', ['entity' => $idea_discovery, 'ideas' => $ideas, 'discoveries' => $discoveries]);
    }

    public function update(Request $request, IdeaDiscovery $idea_discovery)
    {
        $request->validate([
        
            'id' => 'integer',
        
            'idea_id' => 'integer',
        
            'discovery_id' => 'integer',
        
        ]);

        $idea_discovery->update($request->all());

        return redirect()->route('idea_discovery.index')->with('success', 'idea_discovery atualizado com sucesso.');
    }

    public function destroy(IdeaDiscovery $idea_discovery)
    {
        $idea_discovery->delete();

        return redirect()->route('idea_discovery.index')->with('success', 'idea_discovery exclu�do com sucesso.');
    }
}