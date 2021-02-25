<?php

namespace App\Http\Controllers;

use App\User;
use App\Content;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function index()
    {
        $users = User::all();

        return view('users.index' , [
            'users' => $users,
        ]);
    }

    
    public function create()
    {
        
    }

    
    public function store(Request $request)
    {
        
    }


    public function show($id)
    {
        $user = User::get($id);
        
        $contents = $user->content()->get();

        return view('users.show' , [
            'users' => $user,
        ]);
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
