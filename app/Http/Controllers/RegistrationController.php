<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class RegistrationController extends Controller
{
    public function __construct()
    {


        $this->middleware('guest');
    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);


        $user = User::create(request(['name', 'email', 'password']));
        $user->password =  bcrypt($user->password);
        $user->save();


        auth()->login($user);



        session()->flash('message', 'Thanks so much for registration!');

        return redirect()->home();

    }







    public function create()
    {
        
        return view('registration.create');
    }










    public function index()
    {

    }






    public function show($id)
    {

    }


    public function edit($id)
    {

    }


    public function update(Request $request, $id)
    {

    }


    public function destroy($id)
    {

    }
}
