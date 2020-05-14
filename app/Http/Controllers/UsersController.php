<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Laracast\Flash\Flash;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::select('select * from users');

        return view('admin.users.index', ['users' => $users]);
        
    }
    
    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
        $user->save();
        flash('Registro exitoso de '.$user->name)->success();
        return redirect()->route('users.index');
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view ('admin.users.edit')->with('user', $user);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->type = $request->type;
        $user->save();
    }

    public function destroy($id)
    {
        $deleted = DB::delete('delete from users');
        flash('El usuario '. $user->name . ' ha sido eliminado exitosamente')->error();
        return redirect()->route('users.index');
    }
}
