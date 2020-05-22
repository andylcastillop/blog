<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Laracast\Flash\Flash;

class UsersController extends Controller
{
    public function index()
    {
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
        
    }
    
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:4|max:25',
            'email'     => 'required|unique:users|min:4|max:250',
            'password'  => 'required|min:8|max:25',
        ]);

        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        
        flash('Registro exitoso de '.$user->name)->success()->important();
        return redirect()->route('users.index');
        
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view ('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name'      => 'required|min:4|max:25',
            'email'     => 'required|min:4|max:250',
        ]);

        $user = User::find($id);
        $user->fill($request->all());
        $user->save();

        flash('Datos de '.$user->name . ' actualizados con éxito')->warning()->important();
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        flash('Usuario '.$user->name . ' eliminado con éxito')->error()->important();
        return redirect()->route('users.index');
    }
    public function __construct()
{
    $this->middleware('auth');
}
}
