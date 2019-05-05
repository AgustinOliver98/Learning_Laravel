<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
       return "el id del usuario es: {$id}";

    }

    public function edit($id){
        return "Editando ID: {$id}";
    }
}
