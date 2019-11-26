<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class UserController extends Controller
{
   public function index()
    {

        $userList = User::all();

      return view('user/index', ['userList'=>$userList]);
    }

    public function show($id)
    {
       //$user = User::find($id);
       //return view('user.show',['user'=> $user]);
    }

    public function create()
    {
        return view('user/form');
    }


    public function store(Request $r)
    {

            $user = new User();

            //$user = $r->all();
            $user->name=$r->name;
            //$user->apellidos=$r->apellidos;
            $user->email=$r->email;
           // $user->nick=$r->nick;
            $user->password=$r->password;
            //$user->tipo=$r->tipo;

            $user->save();

            return redirect()->route('user.index');
    }

    public function edit($id)
    {
       $user = User::find($id);
       return view('user/form', array('user'=> $user));
    }

    public function update(Request $r)
    {
        $user = User::find($r->id);
        $user->name=$r->name;
        //$user->apellidos=$r->apellidos;
        $user->email=$r->email;
       // $user->nick=$r->nick;
        $user->password=$r->password;
        //$user->tipo=$r->tipo;

            $user->save();
            return redirect()->route('user.index');

    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}
