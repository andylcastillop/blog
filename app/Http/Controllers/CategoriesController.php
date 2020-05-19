<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Laracast\Flash\Flash;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'ASC')->paginate(5);
        return view('admin.categories.index')->with('categories', $categories);
        
    }
    
    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:4|max:25|unique:categories',
        ]);

        $category = new Category($request->all());
        $category->save();
        
        flash('Registro exitoso de la categoría '.$category->name)->success()->important();
        return redirect()->route('categories.index');
        
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view ('admin.categories.edit')->with('category', $category);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:4|max:25',
        ]);

        $category = Category::find($id);
        $category->fill($request->all());
        $category->save();

        flash('Categoría '.$category->name . ' actualizada con éxito')->warning()->important();
        return redirect()->route('categories.index');
    }

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        flash('Categoría '.$category->name . ' eliminada con éxito')->error()->important();
        return redirect()->route('categories.index');
    }
}
