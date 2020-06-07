<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class FrontController extends Controller
{
    
    public function index()
    {
        $articles = Article::orderBy('id', 'ASC')->paginate(8);
        $articles->each(function($articles){
            $articles->category;
            $articles->images;
        });
        return view('front.index')->with('articles', $articles);
    }
}
