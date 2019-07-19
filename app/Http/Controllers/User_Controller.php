<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;





class User_Controller extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
       $users=User::all();


        $title = "listado de usuarios";
        return view('users.index',compact('title','users'));
    }

    public function show($id){
        $users = User::findOrFail($id);


       return view('users.show', compact('users'));

    }

    public function edit($id){
        return "Editando ID: {$id}";
    }

    public function create(){
        return view('users.create');
    }


    public function store(){

        $data = request()->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'password'=>'required|min:6'
            ],[
                'name.required' =>'El campo nombre es obligatorio',
                'email.required'=>'El campo email es obligatorio',
                'email.unique'=> 'Ya existe un usuario con ese email',
                'password.required'=>'El campo contraseña es obligatorio',
               'password.min'=>'La longitud de la contraseña debe ser superior a 6'
        ]);


        User::create([
           'name'=>$data['name'],
           'email'=>$data['email'],
           'password'=>bcrypt($data['password']),
       ]);

       return redirect()->route('user.index');
    }

    public function editdata(User $user){
        return view('users.edit',['user'=>$user]);
    }
}
