<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;
use App\Article;
use App\Image;
use Laracast\Flash\Flash;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        return view('admin.articles.index');   
    }
    
    public function create()
    {
        $tags = Tag::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.articles.create')->with('categories', $categories)->with('tags', $tags);
    }

    public function store(Request $request)
    {
        //Manipulación de imágenes
        
        if ($request->file('image')) {
            $file = $request ->file('image');
            $name = 'innovbec_' . time() . '.' . $file->getClientOriginalExtension();
            $path = public_path() . '/img/articles/';
            $file->move($path, $name);
        }
        
        $article = new Article($request->all());
        $article->user_id = \Auth::user()->id;
        $article->save();

        $article->tags()->sync($request->tags);

        $image = new Image();
        $image->name = $name;
        $image->article()->associate($article);
        $image->save();

        flash('Registro exitoso del artículo '.$article->title)->success()->important();
        return redirect()->route('articles.index');
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}