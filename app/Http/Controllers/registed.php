<?php

namespace App\Http\Controllers;

use App\login;
use Illuminate\Http\Request;

class registed extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('Project1.verify');
        return  view('index');
    }
    /**
     * Show the form for creating a new resource.
     *
     *@return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
     public function store(Request $request)
    {
        //
        $registednew= new login();
        $registednew->Firstname=$request->get('fname');
        $registednew->Lastname=$request->get('lname');
        $registednew->Birddate=$request->get('dmy');
        $registednew->Sex=$request->get('sex');
        $registednew->Email=$request->get('email');
        $registednew->Password=$request->get('password');
        $registednew->save();
        session_start();
        $_SESSION["EMAIL"]=$request->get('email');
        return redirect()->route('regis.index')
                        ->with('success','Book created successfully.');
                        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function show(login $login)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function edit(login $login)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, login $login)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\login  $login
     * @return \Illuminate\Http\Response
     */
    public function destroy(login $login)
    {
        //
    }
    
    public function loginuser(Request $request) {
        session_start();
        $email = $request->input('email');
        $password = $request->input('password');

        $user = login::where('Email', $email)->first();
        if ($user) {
            if ($user['Password']==$password) {
                $_SESSION["EMAIL"] = $email;
                $_SESSION["PASSWORD"] = $password;
                $_SESSION["NAME"]=$user['Firstname'];
                $_SESSION["LNAME"]=$user['Lastname'];
                $_SESSION["BIRDDATE"]=$user['Birddate'];
                $_SESSION["SEX"]=$user['Sex'];
                return  view('index');
                //echo "success",$user;exit;
            } else {
                echo "fail","password don't ture";exit;
            }

            //return response()->json(['success' => true,'message' => 'User found.']);

        } else {
            return response()->json(['success' => false,'message' => 'User not found.']);
        }
    }
}
