<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Title;
use App\Http\Requests\TitleRequest;
use App\Models\Vocabulary;
use Illuminate\Database\Eloquent\Model;

class TitleController extends Controller
{


    
    public function index()
    {
        $titles = Auth::user()->titles()->orderBy('created_at', 'desc')->get();

        // return response()->json($titles);
        return view('titles.index', compact('titles'));
    }

    public function show(Title $title)
    {
        $vocabularies = Vocabulary::all();
        $words = Vocabulary::select('word')->where('title_id', $title->id)->get();
        $means = Vocabulary::select('mean')->where('title_id', $title->id)->get();
        return view('titles.show', compact('title', 'vocabularies', 'words','means'));
    }

    public function create()
    {
        return view('titles.create');
    }

    public function store(TitleRequest $request)
    {
        $title = new Title();
        $title->name = $request->input('name');
        $title->time = $request->input('time');
        $title->color = $request->input('color');
        $title->user_id = Auth::id();
       
        
        // $request->validate([
        //     'time' => 'numeric|min:0|max:10'
        // ]);
        $title->save();
        return redirect()->route('titles.index')->with('flash_message', 'complete to create title');
        
    }
    public function edit(Title $title)
    {
      

        return view('titles.edit', compact('title'));
    }

    public function update(TitleRequest $request, Title $title)
    {
        $title->name = $request->input('name');
        $title->time = $request->input('time');
        $title->color = $request->input('color');
        $title->user_id = Auth::id();
        // $request->validate([
        //     'time' => 'numeric|min:0|max:10'
        // ]);

        $title->update();

        return to_route('titles.index');
    }

    public function destroy(Title $title)
    {
        $title->delete();
        return to_route('titles.index');
    }
}
