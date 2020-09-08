<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Historyform extends Controller
{
    //

    public function index()
    {
        return  view('historyform');
    }

    public function store(Request $request)
    {
        //
        $Historyformnew= new login();
        $Historyformnew->Firstname=$request->get('fname');
        $Historyformnew->Lastname=$request->get('lname');
        $Historyformnew->Birddate=$request->get('dmy');
        $Historyformnew->Sex=$request->get('sex');
        $Historyformnew->Email=$request->get('email');
        $Historyformnew->Password=$request->get('password');
        $Historyformnew->save();
               
    }

}
