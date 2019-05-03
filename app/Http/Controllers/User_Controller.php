<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class User_Controller extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index(){
        $users= ['Alonso','Napadensky','Oliver','Ostorero'];

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
