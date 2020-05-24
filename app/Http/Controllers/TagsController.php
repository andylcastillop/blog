<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tag;
use Laracast\Flash\Flash;

class TagsController extends Controller
{
    public function index(Request $request)
    {
        $tags = Tag::orderBy('id', 'ASC')->paginate(5);
        return view('admin.tags.index')->with('tags', $tags);
        
    }
    
    public function create()
    {
        return view('admin.tags.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:4|max:25|unique:tags',
        ]);

        $tag = new Tag($request->all());
        $tag->save();
        
        flash('Registro exitoso del tag '.$tag->name)->success()->important();
        return redirect()->route('tags.index');
        
    }

    public function edit($id)
    {
        $tag = Tag::find($id);
        return view ('admin.tags.edit')->with('tag', $tag);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:4|max:25',
        ]);

        $tag = Tag::find($id);
        $tag->fill($request->all());
        $tag->save();

        flash('Tag '.$tag->name . ' actualizado con éxito')->warning()->important();
        return redirect()->route('tags.index');
    }

    public function destroy($id)
    {
        $tag = Tag::find($id);
        $tag->delete();
        flash('Tag '.$tag->name . ' eliminado con éxito')->error()->important();
        return redirect()->route('tags.index');
    }
    public function __construct()
{
    $this->middleware('auth');
}
}
