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
            'email'=>'required',
            'password'=>'required'
            ],[
                'name.required' => 'El campo nombre es obligatorio'

        ]);


        User::create([
           'name'=>$data['name'],
           'email'=>$data['email'],
           'password'=>bcrypt($data['password']),
       ]);

       return redirect()->route('user.index');
    }
}
