<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Http\Requests\UserPost;
use Illuminate\Support\Facades\Hash;

class AdministratorController extends Controller
{
    public function administracion(){
        $users = User::Where('admin', '<>', 1)->get();
        return view('administrador.administracion', compact('users'));
    }

    public function nuevoUsuario(){
        return view('administrador.nuevo-usuario');
    }

    public function postNuevoUsuario(UserPost $request){
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('administracion');
    }

    public function deleteUsuario($id){
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    }

}
