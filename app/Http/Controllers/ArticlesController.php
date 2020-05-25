<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Tag;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        //        
    }
    
    public function create()
    {
        $tags = Tag::orderBy('name', 'ASC')->get();
        $categories = Category::orderBy('name', 'ASC')->get();
        return view('admin.articles.create')->with('categories', $categories);
    }

    public function store(Request $request)
    {
        //        
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
