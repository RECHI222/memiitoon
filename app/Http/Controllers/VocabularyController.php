<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vocabulary;
use App\Models\Title;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\VocabularyRequest;

class VocabularyController extends Controller
{
    public function index(Request $request)
    {
    
        $vocabularies = Auth::user()->vocabularies()->sortable()->paginate(10);
      
        return view('vocabularies.index', compact('vocabularies'));
    }

    public function create() 
    {
       
        $titles = Title::all();
        $users = Auth::id();
       
        return view('vocabularies.create', compact('titles','users'));

    }

    public function store(VocabularyRequest $request)
    {
        $vocabulary = new Vocabulary();
        $vocabulary->word = $request->input('word');
        $vocabulary->mean = $request->input('mean');
        $vocabulary->example = $request->input('example');
        $vocabulary->title_id = $request->input('title_id');
        $vocabulary->user_id = Auth::id();

        $vocabulary->save();

        return to_route('vocabularies.index');
    }

    public function show(Vocabulary $vocabulary)
    {
        $titles = Title::all();
     
        $users = Auth::id();
        return view('vocabularies.show', compact('vocabulary', 'titles', 'users'));
    }

    public function edit(Vocabulary $vocabulary)
    {
        $titles = Title::all();
     
        $users = Auth::id();
        return view('vocabularies.edit', compact('vocabulary', 'titles', 'users'));
    }

    public function update(VocabularyRequest $request, Vocabulary $vocabulary)
    {
        $vocabulary->word = $request->input('word');
        $vocabulary->mean = $request->input('mean');
        $vocabulary->example = $request->input('example');
        $vocabulary->title_id = $request->input('title_id');

        $vocabulary->update();

        return to_route('vocabularies.index');
    }

    public function destroy(Vocabulary $vocabulary)
    {
        $vocabulary->delete();
        return to_route('vocabularies.index');
    }
}
